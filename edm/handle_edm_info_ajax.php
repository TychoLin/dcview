<?php
require_once("common.inc.php");

function verify_type($type) {
	return in_array($type, range(1, 8));
}

function verify_title($title) {
	if (empty($title)) {
		// return false;
	}

	return true;
}

function verify_author($author) {
	if (empty($author)) {
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

function verify_url($url) {
	return true;
}

function verify_thumbnail_path($thumbnail_path) {
	return true;
}

function verify_rank($rank) {
	return true;
}

header("Content-Type: application/json");
// echo json_encode($_POST);die;

$fields = array("action", "edm_info_id", "edm_id", "type", "author", "title", "summary", "url", "thumbnail_path", "rank");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

if (!isset($post_data["action"])) {
	die();
}

// handle post data
$data = array();
$action = $post_data["action"];
if ($action == "delete" && isset($post_data["edm_info_id"])) {
	$tei = new TblEdmInfo();
	$sql_params = array(
		"where_cond" => array("edm_info_id = ?" => $post_data["edm_info_id"]),
	);
	$data["status"] = $tei->delete($sql_params);
} else {
	$record = array();
	foreach ($post_data as $key => $value) {
		$func_name = "verify_".$key;
		if (function_exists($func_name) && call_user_func($func_name, $value)) {
			if (in_array($key, array("thumbnail_path"))) {
				$value = get_path($value);
			}
			$record["edm_info_".$key] = $value;
			continue;
		}

		if ($key == "edm_id") {
			$record[$key] = $value;
		}
	}

	if (count($record) > 0) {
		$tei = new TblEdmInfo();
		$now = date("Y-m-d H:i:s");
		$record["edm_info_update_time"] = $now;

		if ($action == "create") {
			$record["edm_info_create_time"] = $now;
			$tei->create($record);
			$data["edm_info_id"] = $tei->getLastInsertID();
		} else if ($action == "update" && isset($post_data["edm_info_id"])) {
			$tei->update($record, array("edm_info_id = ?" => $post_data["edm_info_id"]));
			$data["edm_info_id"] = $post_data["edm_info_id"];
		}
	}
}

echo json_encode($data);
?>