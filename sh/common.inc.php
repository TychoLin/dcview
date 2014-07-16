<?php
define("DOC_ROOT", realpath(dirname(__FILE__)));
mb_internal_encoding("UTF-8");

require_once("../shdb.inc.php");

$main_content_path = DOC_ROOT."/templates/".str_replace(".", ".tpl.", basename($_SERVER["PHP_SELF"]));
define("MAIN_CONTENT_PATH", $main_content_path);

$area_names = array(0 => "不限", 1 => "北部", 2 => "中部", 3 => "南部", 4 => "花東", 5 => "離島", 9 => "其他");
$trade_status_names = array(1 => "售", 2 => "徵", 3 => "交換", 4 => "團購");
$sort_names = array(1 => "按最新回應時間", 2 => "按刊登時間");
$period_names = array(1 => 7, 2 => 30, 3 => 90);
?>