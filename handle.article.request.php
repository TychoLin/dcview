<?php
$ta = new TblArticle();
// SELECT a.article_id, a.user_account, a.user_nickname, a.article_title, a.sh_sub_category_id, a.article_sh_is_traded, a.article_sh_trade_status, a.article_sh_price,
// a.article_sh_area, a.article_create_time, IFNULL(b.reply_amount, 0) AS reply_amount, IFNULL(b.sort_time, a.article_create_time) AS sort_time, c.sh_sub_category_name
// FROM tblArticle AS a LEFT JOIN (SELECT article_id, COUNT(*) AS reply_amount, MAX(reply_create_time) AS sort_time FROM tblReply GROUP BY article_id) AS b USING(article_id)
// INNER JOIN tblSHSubCategory AS c USING(sh_sub_category_id)
$fields = array("a.article_id", "a.user_account", "a.user_nickname", "a.article_title", "a.sh_sub_category_id", "a.article_sh_is_traded", "a.article_sh_trade_status");
array_push($fields, "a.article_sh_price", "a.article_sh_area", "c.sh_sub_category_name", "a.article_create_time", "IFNULL(b.reply_amount, 0) AS reply_amount");
array_push($fields, "IFNULL(b.sort_time, a.article_create_time) AS sort_time", "c.sh_sub_category_name");
$table_reference = array(
	"tblArticle AS a LEFT JOIN",
	"(SELECT article_id, COUNT(*) AS reply_amount, MAX(reply_create_time) AS sort_time FROM tblReply GROUP BY article_id) AS b USING(article_id)",
	"INNER JOIN tblSHSubCategory AS c USING(sh_sub_category_id)",
);

$get_params = array("sub_category", "area", "trade_status", "keyword", "sort", "period", "page", "name");
$get_data = array_intersect_key($_GET, array_fill_keys($get_params, null));

$where_cond = array("a.article_status = ?" => 1); // 1: show; 2: hide
$order_by_clause = "sort_time DESC";
if (count($get_data) > 0) {
	foreach ($get_data as $key => $value) {
		if ($key == "sub_category" && !empty($value)) {
			$where_cond["a.sh_sub_category_id = ?"] = $value;
		} else if ($key == "area" && in_array($value, array_keys($area_names)) && !empty($value)) {
			$where_cond["a.article_sh_area = ?"] = $value;
		} else if ($key == "trade_status" && in_array($value, array_keys($trade_status_names))) {
			$where_cond["a.article_sh_trade_status = ?"] = $value;
		} else if ($key == "keyword" && !empty($value)) {
			$where_cond["a.article_title LIKE ?"] = "%$value%";
		} else if ($key == "sort" && in_array($value, array_keys($sort_names))) {
			switch ($value) {
				case 2:
					$order_by_clause = "a.article_create_time DESC";
					break;
			}
		} else if ($key == "period" && in_array($value, array_keys($period_names))) {
			$recent_days = $period_names[$value];
		} else if ($key == "name") {
			$where_cond["a.user_nickname LIKE ?"] = $value;
		}
	}
}
$now = date("Y-m-d H:i:s");
$where_cond["DATEDIFF('$now', a.article_create_time) <= ?"] = (isset($recent_days)) ? $recent_days : $period_names[1];

// init article list
define("LIMIT", 10);
$page = isset($get_data["page"]) ? (int)$get_data["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

$sql_params = array(
	"fields" => $fields,
	"table_reference" => $table_reference,
	"where_cond" => $where_cond,
	"order_by_clause" => $order_by_clause,
	"limit" => LIMIT,
	"offset" => $offset,
);
$article_list = $ta->read($ta->generateReadSQL($sql_params));

$sql_params = array(
	"fields" => array("COUNT(*) AS total_record_number"),
	"table_reference" => $table_reference,
	"where_cond" => $where_cond,
);

$total_record_number = $ta->read($ta->generateReadSQL($sql_params));
$total_record_number = $total_record_number[0]["total_record_number"];
$total_page_number = ceil($total_record_number / LIMIT);
?>