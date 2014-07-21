<?php
require_once("common.inc.php");

function get_path($src) {
	$search = "http://".str_replace(basename(__FILE__), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]);
	return str_replace($search, "", $src);
}

$fields = array("edm_id", "edm_thumbnail_src1", "edm_thumbnail_src2");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

// handle post data
if (isset($post_data["edm_id"])) {
	$record = array();
	if (isset($post_data["edm_thumbnail_src1"])) {
		$edm_thumbnail_path1 = get_path($post_data["edm_thumbnail_src1"]);
		$record["edm_thumbnail_path1"] = $edm_thumbnail_path1;
	}

	if (isset($post_data["edm_thumbnail_src2"])) {
		$edm_thumbnail_path2 = get_path($post_data["edm_thumbnail_src2"]);
		$record["edm_thumbnail_path2"] = $edm_thumbnail_path2;
	}

	if (count($record) > 0) {
		$te = new TblEdm();
		$status = $te->update($record, array("edm_id = ?" => $post_data["edm_id"]));

		header("Content-Type: application/json");
		echo json_encode(array("status" => $status));
	}
}
?>