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
	$edm_publish_date = $result[0]["edm_publish_date"];
} else {
	die();
}

$tmp = explode("-", $edm_publish_date);
$publish_year = $tmp[0];
$publish_month = $tmp[1];
$publish_day = $tmp[2];

$some_edm_dirname = $publish_year.$publish_month.$publish_day;
$dir_path = "upload/edm/$publish_year/$publish_month/$some_edm_dirname/";
$prefix = "edm_";

if (!is_dir($dir_path) && !mkdir($dir_path, 0775, true)) {
	die("Failed to create folders...");
}

$dir_url_path = "http://".str_replace(basename(__FILE__), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]).$dir_path;
$urls = array();
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
			array_push($urls, $dir_url_path.basename($new_tmp_file_name));
		}
	}
}

echo json_encode($urls);
?>