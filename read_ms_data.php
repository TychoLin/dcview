<?php
// $file = file_get_contents("sh_ms_data");
// mb_regex_encoding("UTF-8");
// $data = mb_split("======", $file);
require_once("PHPExcel_1.8.0/Classes/PHPExcel/IOFactory.php");

$objPHPExcel = PHPExcel_IOFactory::load("sh_ms_data.xls");

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
var_dump($sheetData);
?>