<?php
require_once("shdb.inc.php");
$file = file_get_contents("category.select");
$tssc = new TblSHSubCategory();

// <option value="0A04">Canon</option>
// preg_match_all("|<[^>]+0A[^>]+>(.*)</[^>]+>|", $file, $matches);
// $sub_category_list = $matches[1];

// foreach ($sub_category_list as $value) {
// 	$record = array(
// 		"sh_main_category_id" => 1,
// 		"sh_sub_category_name" => $value,
// 	);

// 	$tssc->create($record);
// }

// <option value="1">鏡頭</option>
// preg_match_all('|<[^>]+\"[\d]\">(.*)</[^>]+>|', $file, $matches);
// $sub_category_list = $matches[1];

// foreach ($sub_category_list as $value) {
// 	$record = array(
// 		"sh_main_category_id" => 3,
// 		"sh_sub_category_name" => $value,
// 	);

// 	$tssc->create($record);
// }

// mobile brand
// preg_match_all('|class=1" title="([^<]*)">|', $file, $matches);
// $sub_category_list = $matches[1];

// $remove_list = array(6, 9, 12, 13, 15, 16, 17, 18, 19, 20, 22, 24, 25);
// $new_sub_category_list = array();
// foreach ($sub_category_list as $key => $value) {
// 	if (!in_array($key, $remove_list)) {
// 		array_push($new_sub_category_list, $value);
// 	}
// }
// array_push($new_sub_category_list, "其他");

// foreach ($new_sub_category_list as $value) {
// 	$record = array(
// 		"sh_main_category_id" => 2,
// 		"sh_sub_category_name" => $value,
// 	);

// 	$tssc->create($record);
// }

preg_match_all("|<[^>]+\"(0A[^>]+)\">(.*)</[^>]+>|", $file, $matches);
$old_category = array_combine($matches[1], $matches[2]);
var_dump($old_category);

$tssc->initReadSQL(array("sh_sub_category_id", "sh_sub_category_name"), array("sh_main_category_id = ?" => 1));
$new_category = array_flip($tssc->read(PDO::FETCH_COLUMN|PDO::FETCH_UNIQUE));
var_dump($new_category);

var_dump($new_category[$old_category["0A29"]]);
?>