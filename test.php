<?php
require_once("shdb.inc.php");

$ta = new TblArticle();

/*
for ($i = 0; $i < 100; $i++) {
	$record = array(
		"user_id" => 1,
		"category_id" => 1,
		"article_title" => "this is article title",
		"article_content" => "this is article content",
		"article_sh_trade_status" => 1,
		"article_sh_price" => 10000,
		"article_sh_area" => 1,
		"article_create_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
		"article_update_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
	);

	$ta->create($record);
}
*/

/*
$d1 = date('Y-m-d H:i:s', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013)));
$d2 = date('Y-m-d H:i:s', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013)));
$cond = array(
	"article_id > ?" => 10,
	"article_id < ?" => 60,
	"article_create_time > ?" => $d1,
	"article_update_time > ?" => $d2,
);

var_dump($ta->read($cond));
*/

/*
$tr = new TblReply();

for ($i = 0; $i < 100; $i++) {
	$record = array(
		"article_id" => mt_rand(1, 20),
		"user_id" => 1,
		"reply_content" => "我有興趣",
		"reply_create_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
		"reply_update_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
	);

	$tr->create($record);
}
*/

$tr = new TblReport();
for ($i = 2; $i < 20; $i++) {
	$now = date("Y-m-d H:i:s");
	$record = array("article_id" => 1, "user_id" => $i, "report_comment" => "hello", "report_create_time" => $now);

	$tr->create($record);
}
?>