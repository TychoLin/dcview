<?php
require_once("common.inc.php");

header("Content-Type: application/json");

if (!isset($_POST["edm_id"])) {
	die();
}

$te = new TblEdm();
$sql_params = array(
	"fields" => array("edm_publish_date"),
	"where_cond" => array("edm_id = ?" => $_POST["edm_id"]),
);
$result = $te->read($te->generateReadSQL($sql_params));
if (count($result) == 1) {
	$publish_date = $result[0]["edm_publish_date"];
} else {
	die();
}

$upload_dir_path = get_edm_dir_path($publish_date, true);
$dir_path = get_edm_dir_path($publish_date);
$prefix = "edm_";

if (!is_dir($upload_dir_path) && !mkdir($upload_dir_path, 0775, true)) {
	die("Failed to create folders...");
}

$allowed_imagetypes = array(1 => "IMAGETYPE_GIF", 2 => "IMAGETYPE_JPEG", 3 => "IMAGETYPE_PNG");
$urls = array();
foreach ($_FILES["upload_imgs"]["error"] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		$tmp_name = $_FILES["upload_imgs"]["tmp_name"][$key];
		// validate if uploaded file is image
		if (!in_array(exif_imagetype($tmp_name), array_keys($allowed_imagetypes)))
			continue;

		$name = $_FILES["upload_imgs"]["name"][$key];
		$extension = pathinfo($name, PATHINFO_EXTENSION);
		$tmp_file_name = tempnam($upload_dir_path, $prefix);
		$new_tmp_file_name = $tmp_file_name.".$extension";
		rename($tmp_file_name, $new_tmp_file_name);
		if (move_uploaded_file($tmp_name, $new_tmp_file_name)) {
			array_push($urls, get_path("$dir_path/".basename($new_tmp_file_name)));
		}
	}
}

echo json_encode($urls);
?>