<?php
define("LIMIT", 10);
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

$table_reference = "tblReport AS a INNER JOIN tblArticle AS b ON a.article_id = b.article_id";
$sql_params = array(
	"fields" => array("a.*", "b.article_title"),
	"table_reference" => $table_reference,
	"order_by_clause" => "a.report_create_time DESC",
	"limit" => LIMIT,
	"offset" => $offset,
);
$tr = new TblReport();
$report_list = $tr->read($tr->generateReadSQL($sql_params));

$sql_params = array(
	"fields" => array("COUNT(*) AS total_record_number"),
	"table_reference" => $table_reference,
);
$total_record_number = $tr->read($tr->generateReadSQL($sql_params));
$total_record_number = $total_record_number[0]["total_record_number"];
$total_page_number = ceil($total_record_number / LIMIT);
?>
<select id="page" name="page">
<?php
for ($i = 1; $i <= $total_page_number; $i++) {
	echo "<option value=\"$i\">$i</option>";
}
?>
</select>
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
<script type="text/javascript">
$(window).load(function () {
	$.getScript("../js/URI.js", function () {
		var search = URI.parseQuery(window.location.search);
		for (var name in search) {
			$("#" + name + " option[value=" + search[name] + "]").prop("selected", true);
		}

		$("#page").change(function () {
			var uri = new URI();
			uri.setQuery({v: "report", page: $("option:selected", this).val()});
			window.location = uri.href();
		});

		$(".list button[value=delete]").click(function () {
			var uri = new URI($(this).prevAll("a").prop("href"));
			$.post("handle_ajax.php", {article_id: URI.parseQuery(uri.search()).article_id}, function (data) {
				if (data.status) {
					alert("delete successfully");
				} else {
					alert("failed...");
				}
			});
		});
	});
});
</script>