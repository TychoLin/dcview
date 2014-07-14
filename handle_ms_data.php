<?php
// $file = file_get_contents("sh_ms_data");
// mb_regex_encoding("UTF-8");
// $data = mb_split("======", $file);

$begin_time = time();

ini_set("memory_limit", "256M");
set_time_limit(0);

require_once("PHPExcel_1.8.0/Classes/PHPExcel/IOFactory.php");
require_once("shdb.inc.php");

$category_select = file_get_contents("category.select");
preg_match_all("|<[^>]+\"(0A[^>]+)\">(.*)</[^>]+>|", $category_select, $matches);
$old_category1 = array_combine($matches[1], $matches[2]);
// var_dump($old_category1);

$tssc = new TblSHSubCategory();
$sql_params = array(
	"fields" => array("sh_sub_category_id", "sh_sub_category_name"),
	"where_cond" => array("sh_main_category_id = ?" => 1),
);
$new_category1 = array_flip($tssc->read($tssc->generateReadSQL($sql_params), PDO::FETCH_COLUMN|PDO::FETCH_UNIQUE));
// var_dump($new_category1);

preg_match_all('|<[^>]+\"([\d])\">(.*)</[^>]+>|', $category_select, $matches);
$old_category3 = array_combine($matches[1], $matches[2]);
// var_dump($old_category3);

$sql_params = array(
	"fields" => array("sh_sub_category_id", "sh_sub_category_name"),
	"where_cond" => array("sh_main_category_id = ?" => 3),
);
$new_category3 = array_flip($tssc->read($tssc->generateReadSQL($sql_params), PDO::FETCH_COLUMN|PDO::FETCH_UNIQUE));
// var_dump($new_category3);

function get_sub_category_id($one_piece_data) {
	global $old_category1, $new_category1, $old_category3, $new_category3;

	if (in_array($one_piece_data["pclass"], array_keys($old_category3))) {
		return $new_category3[$old_category3[$one_piece_data["pclass"]]];
	}

	$brandid = "0{$one_piece_data["brandid"]}";
	if (isset($old_category1[$brandid])) {
		return $new_category1[$old_category1[$brandid]];
	}

	return 0;
}

// 1: 已交易 0: 未交易
function get_article_sh_is_traded($one_piece_data) {
	if ($one_piece_data["article_sh_is_traded"] == 1) {
		return 1;
	} else {
		return 0;
	}
}

function get_article_sh_trade_status($one_piece_data) {
	if (in_array($one_piece_data["article_sh_trade_status"], array(1, 2, 3, 4))) {
		return (int)$one_piece_data["article_sh_trade_status"];
	}

	return 1;
}

function get_sh_price($one_piece_data) {
	$price = $one_piece_data["article_sh_price"];

	if (empty($price)) return 0;

	return (int)preg_replace('/NT\$|,|\.00/', "", $price);
}

function get_sh_area($one_piece_data) {
	if (in_array($one_piece_data["article_sh_area"], array(1, 2, 3, 4, 5, 9))) {
		return (int)$one_piece_data["article_sh_area"];
	}

	return 0;
}

$ta = new TblArticle();
$tr = new TblReply();

$objPHPExcel = PHPExcel_IOFactory::load("sh_article_have_reply_ms_data.xls");
$sh_article_have_reply = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

$fields = array_values(array_shift($sh_article_have_reply));
foreach ($sh_article_have_reply as &$value) {
	$value = array_combine($fields, array_values($value));
}

foreach ($sh_article_have_reply as $value) {
	$article_record = array(
		"user_id" => mt_rand(1, 100),
		"old_article_id" => $value["回覆編號"],
		"user_account" => $value["user_account"],
		"user_nickname" => $value["user_nickname"],
		"sh_sub_category_id" => get_sub_category_id($value),
		"article_sh_is_traded" => get_article_sh_is_traded($value),
		"article_title" => $value["article_title"],
		"article_content" => $value["article_content"],
		"article_sh_trade_status" => get_article_sh_trade_status($value),
		"article_sh_price" => get_sh_price($value),
		"article_sh_area" => get_sh_area($value),
		"article_email" => $value["article_email"],
		"article_phone_number" => $value["article_phone_number"],
		"article_img_url1" => $value["article_img_url1"],
		"article_img_url2" => $value["article_img_url2"],
		"article_page_views" => $value["article_page_views"],
		"article_sh_is_notified" => $value["article_sh_is_notified"],
		"article_create_time" => $value["article_create_time"],
		"article_update_time" => $value["article_update_time"],
	);

	$ta->create($article_record);
}

$objPHPExcel = PHPExcel_IOFactory::load("sh_article_reply_ms_data.xls");
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
array_shift($sheetData);

$sql_params = array(
	"fields" => array("article_id", "old_article_id"),
);
$article_list = $ta->read($ta->generateReadSQL($sql_params));

$sh_article_reply = array();
$amount = count($sheetData);
foreach ($sheetData as $key => $value) {
	$reply = array_combine($fields, array_values($value));

	if (isset($sh_article_reply[$reply["回覆編號"]]) && is_array($sh_article_reply[$reply["回覆編號"]])) {
		array_push($sh_article_reply[$reply["回覆編號"]], $reply);
	} else {
		$sh_article_reply[$reply["回覆編號"]] = array();
		array_push($sh_article_reply[$reply["回覆編號"]], $reply);
	}

	if ($key % 1000 == 0 || $key == $amount - 1) {
		foreach ($article_list as $article_record) {
			if (isset($sh_article_reply[$article_record["old_article_id"]])) {
				$replies = $sh_article_reply[$article_record["old_article_id"]];
				foreach ($replies as $piece_of_reply) {
					$reply_record = array(
						"article_id" => $article_record["article_id"],
						"user_id" => mt_rand(1, 100),
						"user_account" => $piece_of_reply["user_account"],
						"reply_content" => $piece_of_reply["article_content"],
						"reply_create_time" => $piece_of_reply["article_create_time"],
						"reply_update_time" => $piece_of_reply["article_create_time"],
					);

					$tr->create($reply_record);
				}
			}
		}

		$sh_article_reply = array();
	}
}

unset($sheetData);

$objPHPExcel = PHPExcel_IOFactory::load("sh_article_no_reply_ms_data.xls");
$sh_article_no_reply = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

$fields = array_values(array_shift($sh_article_no_reply));
foreach ($sh_article_no_reply as &$value) {
	$value = array_combine($fields, array_values($value));
}

foreach ($sh_article_no_reply as $value) {
	$article_record = array(
		"user_id" => mt_rand(1, 100),
		"user_account" => $value["user_account"],
		"user_nickname" => $value["user_nickname"],
		"sh_sub_category_id" => get_sub_category_id($value),
		"article_sh_is_traded" => get_article_sh_is_traded($value),
		"article_title" => $value["article_title"],
		"article_content" => $value["article_content"],
		"article_sh_trade_status" => get_article_sh_trade_status($value),
		"article_sh_price" => get_sh_price($value),
		"article_sh_area" => get_sh_area($value),
		"article_email" => $value["article_email"],
		"article_phone_number" => $value["article_phone_number"],
		"article_img_url1" => $value["article_img_url1"],
		"article_img_url2" => $value["article_img_url2"],
		"article_page_views" => $value["article_page_views"],
		"article_sh_is_notified" => $value["article_sh_is_notified"],
		"article_create_time" => $value["article_create_time"],
		"article_update_time" => $value["article_update_time"],
	);

	$ta->create($article_record);
}


$end_time = time();

$execute_time = $end_time - $begin_time;
echo "execute time: ".$execute_time."s";
?>