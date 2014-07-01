<?php
require_once("common.inc.php");

// check if admin
session_name("dcview");
session_start();
if (!is_logined()) {
	header("Location: index.php");
	exit();
}

if (isset($_POST["article_id"])) {
	$ta = new TblArticle();
	$record = array("article_status" => 2); // 1: show; 2: hide
	$where_cond = array("article_id = ?" => (int)$_POST["article_id"]);
	$ta->update($record, $where_cond);
}

define("LIMIT", 10);
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

$fields = array("a.*", "b.article_title");
$where_cond = array();
$table_reference = "tblReport AS a INNER JOIN tblArticle AS b ON a.article_id = b.article_id";
$order_by_clause = "a.report_create_time DESC";
$tr = new TblReport();
$tr->initReadSQL($fields, $where_cond, $table_reference, $order_by_clause, LIMIT, $offset);
$report_list = $tr->read();

$fields = array("COUNT(*) AS total_record_number");
$tr->initReadSQL($fields, $where_cond, $table_reference);
$total_record_number = $tr->read()[0]["total_record_number"];
$total_page_number = ceil($total_record_number / LIMIT);
?>
<!DOCTYPE html>
<html>
<head>
<title>二手專區 - 檢舉文章列表</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style type="text/css">
table {
	border-collapse: collapse;
}

table, td, th {
	border: 1px solid black;
	padding: 0.5em;
}

.container {
	width: 50%;
	margin: auto;
}

.list {
	float: left;
	width: 80%;
}

#page {
	float: left;
}
</style>
</head>
<body>
	<div class="container">
		<div><a href="logout.php">logout</a></div>
		<table class="list">
			<tr><th>刊登人</th><th>標題</th><th>檢舉內容</th><th>檢舉時間</th></tr>
			<?php foreach ($report_list as $value) { ?>
			<tr>
				<td><?php echo $value["user_id"]; ?></td>
				<td>
					<a href="../sh_article.php?article_id=<?php echo $value["article_id"]; ?>" target="_blank"><?php echo $value["article_title"]; ?></a>
					<button type="button" value="delete">delete</button>
				</td>
				<td><?php echo $value["report_comment"]; ?></td>
				<td><?php echo $value["report_create_time"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<form id="report_list_form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
			<select id="page" name="page">
			<?php
			for ($i = 1; $i <= $total_page_number; $i++) {
				echo "<option value=\"$i\">$i</option>";
			}
			?>
			</select>
		</form>
		<form id="handle_article_form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<input type="hidden" id="article_id" name="article_id" value="">
		</form>
		<span style="display: block; clear: both;"></span>
	</div>
<script type="text/javascript">
$(window).load(function () {
	$.getScript("../js/URI.js", function () {
		var search = URI.parseQuery(window.location.search);
		for (var name in search) {
			$("#" + name + " option[value=" + search[name] + "]").prop("selected", true);
		}
	});

	$("#page").change(function () {
		$("#report_list_form").submit();
	});

	$(".list button[value=delete]").click(function () {
		var uri = new URI($(this).prevAll("a").prop("href"));
		$("#article_id").prop("value", URI.parseQuery(uri.search()).article_id);
		$("#handle_article_form").submit();
	});
});
</script>
</body>
</html>