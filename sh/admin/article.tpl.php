<?php
require_once("../handle.article.request.php");
?>
<form id="sh_list_form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
	<?php require_once(DOC_ROOT."/templates/category.tpl.php"); ?>
	<label for="trade_status">買或賣:</label>
	<select id="trade_status" name="trade_status">
		<option value="0">全部</option>
		<option value="1">售</option>
		<option value="2">徵</option>
		<option value="3">交換</option>
		<option value="4">團購</option>
	</select>
	<label for="area">地區:</label>
	<select id="area" name="area">
		<option value="0">全部</option>
		<option value="1">北部</option>
		<option value="2">中部</option>
		<option value="3">南部</option>
		<option value="4">花東</option>
		<option value="5">離島</option>
		<option value="9">其他</option>
	</select>
	<label for="sort">物品排序方式:</label>
	<select id="sort" name="sort">
		<option value="1">按最新回應時間</option>
		<option value="2">按刊登時間</option>
	</select>
	<label for="period">文章週期:</label>
	<select id="period" name="period">
		<option value="1">最近 7天</option>
		<option value="2">最近 30天</option>
		<option value="3">最近 90天</option>
	</select>
	<br>
	<label for="keyword">關鍵字:</label>
	<input id="keyword" name="keyword" type="text" />
	<button id="search_sh" type="button">搜尋</button>
	<select id="page" name="page">
	<?php
	for ($i = 1; $i <= $total_page_number; $i++) {
		echo "<option value=\"$i\">$i</option>";
	}
	?>
	</select>
</form>
<table>
	<tr>
		<th>回應時間</th>
		<th>刊登人</th>
		<th></th>
		<th class="title">標題 (回應篇數)</th>
		<th>價格</th>
		<th>類別</th>
		<th>地區</th>
	</tr>
	<?php foreach ($article_list as $record) { ?>
	<tr>
		<td><span><?php echo $record["sort_time"]; ?></span></td>
		<td><a href="<?php echo $view_url."&name=".$record["user_nickname"]; ?>"><?php echo $record["user_nickname"]; ?></a></td>
		<td><span><?php echo $trade_status_names[$record["article_sh_trade_status"]]; ?></span></td>
		<td>
			<a href="../sh_article.php?article_id=<?php echo $record["article_id"]; ?>" target="_blank">
				<?php echo htmlentities($record["article_title"], ENT_COMPAT, "UTF-8"); ?>
				<span>(<?php echo $record["reply_amount"]; ?>)</span>
			</a>
			<button type="button" value="delete">delete</button>
		</td>
		<td><span>$<?php echo number_format($record["article_sh_price"]); ?></span></td>
		<td><a href="<?php echo $view_url."&sub_category=".$record["sh_sub_category_id"]; ?>"><?php echo (empty($record["sh_sub_category_name"])) ? "" : $record["sh_sub_category_name"]; ?></a></td>
		<td><a href="<?php echo $view_url."&area=".$record["article_sh_area"]; ?>"><?php echo $area_names[$record["article_sh_area"]]; ?></a></td>
	</tr>
	<?php } ?>
</table>
<script type="text/javascript">
$(window).load(function () {
	$.getScript("../js/URI.js", function () {
		var search = URI.parseQuery(window.location.search);
		for (var name in search) {
			if (name == "keyword") {
				$("#" + name).val(search[name]);
			} else {
				$("#" + name + " option[value=" + search[name] + "]").prop("selected", true);
			}
		}
	});

	$("#page").change(function () {
		var uri = new URI();
		uri.setQuery({v: "article", page: $("option:selected", this).val()});
		window.location = uri.href();
	});

	$("#sub_category").append($("#sub_category_1 option").clone());
	$("#main_category").change(function () {
		var suffix = $("option:selected", this).val();
		$("#sub_category").empty().append($("#sub_category_" + suffix + " option").clone());
	});

	$("#search_sh").click(function () {
		$("#page option[value=1]").prop("selected", true);
		var uri = new URI();
		uri.query($("#sh_list_form").serialize());
		uri.addQuery({v: "article"});
		window.location = uri.href();
	});

	$("button[value=delete]").click(function () {
		var uri = new URI($(this).prevAll("a").prop("href"));
		var table_row = $(this).parents("tr");
		$.post("handle_ajax.php", {article_id: URI.parseQuery(uri.search()).article_id}, function (data) {
			if (data.status) {
				alert("delete successfully");
				table_row.empty();
			} else {
				alert("failed...");
			}
		});
	});
});
</script>