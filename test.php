<?php
require_once("shdb.inc.php");

ini_set("memory_limit", "256M");
var_dump(ini_get_all());

/*
$ta = new TblArticle();
for ($i = 0; $i < 20000; $i++) {
	$record = array(
		"user_id" => mt_rand(1, 100),
		"sh_sub_category_id" => mt_rand(1, 50),
		"article_title" => "this is article title",
		"article_content" => "this is article content",
		"article_sh_trade_status" => mt_rand(1, 4),
		"article_sh_price" => mt_rand(1000, 100000),
		"article_sh_area" => mt_rand(1, 5),
		"article_create_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 5), mt_rand(1, 20), mt_rand(2010, 2014))),
		"article_update_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 5), mt_rand(1, 20), mt_rand(2010, 2014))),
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

/*
$tr = new TblReport();
for ($i = 2; $i < 20; $i++) {
	$now = date("Y-m-d H:i:s");
	$record = array("article_id" => 1, "user_id" => $i, "report_comment" => "hello", "report_create_time" => $now);

	$tr->create($record);
}
*/
?>