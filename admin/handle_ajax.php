<?php
require_once("common.inc.php");

if (isset($_POST["article_id"])) {
	header("Content-Type: application/json");

	$ta = new TblArticle();
	$record = array("article_status" => 2); // 1: show; 2: hide
	$where_cond = array("article_id = ?" => (int)$_POST["article_id"]);
	if ($ta->update($record, $where_cond)) {
		echo json_encode(array("status" => true));
	} else {
		echo json_encode(array("status" => false));
	}
}
?>