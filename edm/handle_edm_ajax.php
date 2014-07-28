<?php
require_once("common.inc.php");

function verify_title($title) {
	if (empty($title)) {
		// return false;
	}

	return true;
}

function verify_summary($summary) {
	if (empty($summary)) {
		// return false;
	}

	return true;
}

function verify_volume($volume) {
	if (!is_numeric($volume)) {
		// return false;
	}

	return true;
}

function verify_publish_date($publish_date) {
	$pattern = "/[\d]{4}-[\d]{2}-[\d]{2}/";
	if (!preg_match($pattern, $publish_date)) {
		return false;
	} else {
		$tmp = explode("-", $publish_date);
		$year = $tmp[0];
		$month = $tmp[1];
		$day = $tmp[2];

		if (!checkdate($month, $day, $year)) {
			return false;
		}
	}

	return true;
}

function verify_thumbnail_path1() {
	return true;
}

function verify_thumbnail_path2() {
	return true;
}

function get_urls($publish_date) {
	$allowed_imagetypes = array(1 => "IMAGETYPE_GIF", 2 => "IMAGETYPE_JPEG", 3 => "IMAGETYPE_PNG", 17 => "IMAGETYPE_ICO");
	$urls = array();

	if (!verify_publish_date($publish_date)) {
		return $urls;
	}

	$tmp = explode("-", $publish_date);
	$publish_year = $tmp[0];
	$publish_month = $tmp[1];
	$publish_day = $tmp[2];
	$some_edm_dirname = $publish_year.$publish_month.$publish_day;
	$dir_path = "upload/edm/$publish_year/$publish_month/$some_edm_dirname/";

	if (is_dir($dir_path)) {
		if ($dh = opendir($dir_path)) {
			while (($file = readdir($dh)) !== false) {
				if ($file != "." && $file != ".." && in_array(exif_imagetype($dir_path.$file), array_keys($allowed_imagetypes))) {
					array_push($urls, get_path($dir_path.$file));
				}
			}
			closedir($dh);
		}
	}

	return $urls;
}

header("Content-Type: application/json");
// echo json_encode($_POST);die;

$data = array();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["edm_id"])) {
	$te = new TblEdm();
	$sql_params = array(
		"fields" => array("*"),
		"where_cond" => array("edm_id = ?" => $_GET["edm_id"]),
	);
	$edm_data = $te->read($te->generateReadSQL($sql_params));

	if (count($edm_data) != 1) {
		die();
	}

	$edm_data = $edm_data[0];
	$edm_data["edm_thumbnail_path1"] = get_path($edm_data["edm_thumbnail_path1"]);
	$edm_data["edm_thumbnail_path2"] = get_path($edm_data["edm_thumbnail_path2"]);
	$data["edm"] = $edm_data;
	$data["urls"] = get_urls($edm_data["edm_publish_date"]);

	$tei = new TblEdmInfo();
	$sql_params = array(
		"fields" => array("*"),
		"where_cond" => array("edm_id = ?" => $_GET["edm_id"]),
	);
	$edm_info_list = $tei->read($tei->generateReadSQL($sql_params));
	foreach ($edm_info_list as &$value) {
		$value["edm_info_thumbnail_path"] = get_path($value["edm_info_thumbnail_path"]);
	}
	$data["edm_infos"] = $edm_info_list;
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fields = array("action", "edm_id", "title", "summary", "volume", "publish_date", "thumbnail_path1", "thumbnail_path2");
	$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

	if (!isset($post_data["action"])) {
		die();
	}

	// handle post data
	$record = array();
	foreach ($post_data as $key => $value) {
		$func_name = "verify_".$key;
		if (function_exists($func_name) && call_user_func($func_name, $value)) {
			if (in_array($key, array("thumbnail_path1", "thumbnail_path2"))) {
				$value = get_path($value);
			}
			$record["edm_".$key] = $value;
		}
	}

	if (count($record) > 0) {
		$te = new TblEdm();
		$now = date("Y-m-d H:i:s");
		$record["edm_update_time"] = $now;

		if ($post_data["action"] == "create") {
			$record["edm_create_time"] = $now;
			$te->create($record);
			$data["edm_id"] = $te->getLastInsertID();
		} else if ($post_data["action"] == "update" && isset($post_data["edm_id"])) {
			$te->update($record, array("edm_id = ?" => $post_data["edm_id"]));
			$data["edm_id"] = $post_data["edm_id"];
		}
	}
}

echo json_encode($data);
?>