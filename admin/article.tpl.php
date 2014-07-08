<?php
require_once("../handle.article.request.php");
?>
<select id="page" name="page">
<?php
for ($i = 1; $i <= $total_page_number; $i++) {
	echo "<option value=\"$i\">$i</option>";
}
?>
</select>
<table class="list">
	<tr>
		<th>回應時間</th>
		<th>刊登人</th>
	    <th></th>
		<th>標題 (回應篇數)</th>
		<th>價格</th>
		<th>類別</th>
	    <th>地區</th>
	</tr>
	<?php foreach ($article_list as $record) { ?>
	<tr>
		<td><span><?php echo $record["sort_time"]; ?></span></td>
		<td><a href="?name=<?php echo $record["user_nickname"]; ?>"><?php echo $record["user_nickname"]; ?></a></td>
		<td><span><?php echo $trade_status_names[$record["article_sh_trade_status"]]; ?></span></td>
	    <td><a href="sh_article.php?article_id=<?php echo $record["article_id"]; ?>" target="_blank"><?php echo $record["article_title"]; ?><span>(<?php echo $record["reply_amount"]; ?>)</span></a></td>
		<td><span>$<?php echo number_format($record["article_sh_price"]); ?></span></td>
		<td><a href="?sub_category=<?php echo $record["sh_sub_category_id"]; ?>"><?php echo (empty($record["sh_sub_category_name"])) ? "" : $record["sh_sub_category_name"]; ?></a></td>
	    <td><a href="?area=<?php echo $record["article_sh_area"]; ?>"><?php echo $area_names[$record["article_sh_area"]]; ?></a></td>
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

		$("#fake_page").append($("#page option").clone());
		$("#fake_page option[value=" + search.page + "]").prop("selected", true);
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
});
</script>