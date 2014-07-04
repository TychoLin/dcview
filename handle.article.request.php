<?php
$fields = array("sub_category", "area", "trade_status", "keyword", "sort", "period", "page", "name");
$get_data = array_intersect_key($_GET, array_fill_keys($fields, null));

$where_cond = array("article_status = ?" => 1); // 1: show; 2: hide
$order_by_clause = "c.sort_time DESC";
if (count($get_data) > 0) {
	foreach ($get_data as $key => $value) {
		if ($key == "sub_category" && !empty($value)) {
			$where_cond["c.sh_sub_category_id = ?"] = $value;
		} else if ($key == "area" && in_array($value, array_keys($area_names)) && !empty($value)) {
			$where_cond["c.article_sh_area = ?"] = $value;
		} else if ($key == "trade_status" && in_array($value, array_keys($trade_status_names))) {
			$where_cond["c.article_sh_trade_status = ?"] = $value;
		} else if ($key == "keyword" && !empty($value)) {
			$where_cond["c.article_title LIKE ?"] = "%$value%";
		} else if ($key == "sort" && in_array($value, array_keys($sort_names))) {
			switch ($value) {
				case 1:
					$order_by_clause = "c.sort_time DESC";
					break;
				case 2:
					$order_by_clause = "c.article_create_time DESC";
					break;
			}
		} else if ($key == "period" && in_array($value, array_keys($period_names))) {
			$now = date("Y-m-d H:i:s");
			$where_cond["DATEDIFF('$now', c.article_create_time) <= ?"] = $period_names[$value];
		} else if ($key == "name") {
			$where_cond["c.user_nickname LIKE ?"] = $value;
		}
	}
}

// init article list
$ta = new TblArticle();
define("LIMIT", 10);
$page = isset($get_data["page"]) ? (int)$get_data["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

// SELECT c.*, (SELECT COUNT(*) FROM tblReply AS d WHERE d.article_id = c.article_id) AS reply_amount, e.sh_sub_category_name
// FROM (SELECT a.*, MAX(b.reply_create_time) AS sort_time FROM tblArticle AS a NATURAL LEFT JOIN tblReply AS b GROUP BY a.article_id) AS c
// NATURAL LEFT JOIN tblSHSubCategory AS e
// ORDER BY c.sort_time DESC
$fields = array("c.*", "(SELECT COUNT(*) FROM tblReply AS d WHERE d.article_id = c.article_id) AS reply_amount", "e.sh_sub_category_name");
$table_reference = "(SELECT a.*, MAX(b.reply_create_time) AS sort_time FROM tblArticle AS a NATURAL LEFT JOIN tblReply AS b GROUP BY a.article_id) AS c NATURAL LEFT JOIN tblSHSubCategory AS e";
$ta->initReadSQL($fields, $where_cond, $table_reference, $order_by_clause, LIMIT, $offset);
$article_list = $ta->read();

$fields = array("COUNT(*) AS total_record_number");
$ta->initReadSQL($fields, $where_cond, $table_reference);
$total_record_number = $ta->read();
$total_record_number = $total_record_number[0]["total_record_number"];
$total_page_number = ceil($total_record_number / LIMIT);
?>