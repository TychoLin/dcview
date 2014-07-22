<?php
require_once("common.inc.php");
// header("Content-Type: application/json");
// echo json_encode($_POST);die;

function verify_edm_data($data) {
	if (empty($data["title"])) {
		// return false;
	}

	if (!is_numeric($data["volume"])) {
		// return false;
	}

	$pattern = "/[\d]{4}-[\d]{2}-[\d]{2}/";
	if (!preg_match($pattern, $data["publish_date"])) {
		return false;
	} else {
		$tmp = explode("-", $data["publish_date"]);
		$year = $tmp[0];
		$month = $tmp[1];
		$day = $tmp[2];

		if (!checkdate($month, $day, $year)) {
			return false;
		}
	}

	return true;
}

$fields = array("title", "volume", "publish_date");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

// handle post data
if (count($post_data) == count($fields) && verify_edm_data($post_data)) {
	$te = new TblEdm();
	$now = date("Y-m-d H:i:s");
	$record = array(
		"edm_volume" => $post_data["volume"],
		"edm_title" => $post_data["title"],
		"edm_publish_date" => $post_data["publish_date"],
		"edm_create_time" => $now,
		"edm_update_time" => $now,
	);
	$te->create($record);
	$edm_id = $te->getLastInsertID();

	$tmp = explode("-", $post_data["publish_date"]);
	$publish_year = $tmp[0];
	$publish_month = $tmp[1];
	$publish_day = $tmp[2];
}

// handle file upload
if (isset($edm_id, $publish_year, $publish_month, $publish_day)) {
	$some_edm_dirname = $publish_year.$publish_month.$publish_day;
	$dir_path = "upload/edm/$publish_year/$publish_month/$some_edm_dirname/";
	$prefix = "edm_";

	if (!is_dir($dir_path) && !mkdir($dir_path, 0775, true)) {
		die("Failed to create folders...");
	}

	$dir_url_path = "http://".str_replace(basename(__FILE__), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]).$dir_path;
	$data = array();
	$data["edm_id"] = $edm_id;
	$data["urls"] = array();
	foreach ($_FILES["upload_imgs"]["error"] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["upload_imgs"]["tmp_name"][$key];
			$name = $_FILES["upload_imgs"]["name"][$key];
			// validate if uploaded file is image
			$extension = pathinfo($name, PATHINFO_EXTENSION);
			$tmp_file_name = tempnam($dir_path, $prefix);
			$new_tmp_file_name = $tmp_file_name.".$extension";
			rename($tmp_file_name, $new_tmp_file_name);
			if (move_uploaded_file($tmp_name, $new_tmp_file_name)) {
				array_push($data["urls"], $dir_url_path.basename($new_tmp_file_name));
			}
		}
	}

	header("Content-Type: application/json");
	echo json_encode($data);
}
?>