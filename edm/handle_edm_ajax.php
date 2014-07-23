<?php
require_once("common.inc.php");

function get_path($src) {
	$search = "http://".str_replace(basename(__FILE__), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]);
	return str_replace($search, "", $src);
}

function verify_title($title) {
	if (empty($title)) {
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

header("Content-Type: application/json");
// echo json_encode($_POST);die;

$fields = array("action", "edm_id", "title", "volume", "publish_date", "thumbnail_path1", "thumbnail_path2");
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

$data = array();
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
	}
}

echo json_encode($data);
?>