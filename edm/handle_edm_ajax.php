<?php
// header("Content-Type: application/json");
// echo json_encode($_FILES);die;

$dir_path = "upload";
$prefix = "edm_";
$json = array();
foreach ($_FILES["upload_imgs"]["error"] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		$tmp_name = $_FILES["upload_imgs"]["tmp_name"][$key];
		$name = $_FILES["upload_imgs"]["name"][$key];
		move_uploaded_file($tmp_name, tempnam($dir_path, $prefix));
	}
}

header("Content-Type: application/json");
echo json_encode($json);die;
?>