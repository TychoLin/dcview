<?php
require_once("common.inc.php");

require_once("handle.article.request.php");
?>
<form id="sh_list_form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
<!--類別-->
<?php require_once("templates/category.tpl.php"); ?>
<!--類別 end-->

<!--買賣地區-->
<div class="block01_1">
<!-- Select -->
<label for="trade_status">買或賣:</label>
<select id="trade_status" name="trade_status">
<option value="0">全部</option>
<option value="1">售</option>
<option value="2">徵</option>
<option value="3">交換</option>
<option value="4">團購</option>
</select>

<!-- Select -->
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

<label for="keyword">關鍵字:</label>
<input id="keyword" name="keyword" type="text" />
<button id="search_sh" type="button" class="small">搜尋</button>
</div>
<!--買賣地區 end-->


<!--排序.頁數.刊登-->
<div class="block01">
<!-- Select -->
<label for="sort">物品排序方式:</label>
<select id="sort" name="sort">
<option value="1">按最新回應時間</option>
<option value="2">按刊登時間</option>

</select>
<!-- Select -->
<label for="period">文章週期:</label>
<select id="period" name="period">
<option value="1">最近 7天</option>
<option value="2">最近 30天</option>
<option value="3">最近 90天</option>
</select>

<span class="po_right">
<!-- Select -->
<label for="page">跳頁:</label>
<select id="page" name="page">
<option value="0">- 頁數 -</option>
<?php
for ($i = 1; $i <= $total_page_number; $i++) {
echo <<<EOT
<option value="$i">$i</option>
EOT;
}
?>
</select>
</div>
<button type="button" class="small orange style02"><i class="icon-star"></i>刊登物品</button>
</div>
<!--排序及頁數 end-->

<!--列表-->
<div>
<!-- Table -->
<table class="sortable" cellspacing="0" cellpadding="0" style="width:100%;">
<thead>
	<tr>
		<th>回應時間</th>
		<th>刊登人</th>
	    <th></th>
		<th>標題 (回應篇數)</th>
		<th>價格</th>
		<th>類別</th>
	    <th>地區</th>
	</tr>
</thead>
<tbody>
<tr class="sub">
	<td colspan="7">系統公告:DCView二手市場重要公告</td>
</tr>
<?php foreach ($article_list as $key => $record) { ?>
<tr class="<?php echo ($key % 2 == 1) ? "bg_color" : ""; ?>">
	<td><span class="time_text"><?php echo $record["sort_time"]; ?></span></td>
	<td><a href="?name=<?php echo $record["user_nickname"]; ?>"><?php echo mb_substr($record["user_nickname"], 0, 6).".."; ?></a></td>
	<td><span><?php echo $trade_status_names[$record["article_sh_trade_status"]]; ?></span></td>
    <td>
    	<a href="sh_article.php?article_id=<?php echo $record["article_id"]; ?>" target="_blank">
    		<?php echo mb_substr($record["article_title"], 0, 16).".."; ?>
    		<span>(<?php echo $record["reply_amount"]; ?>)</span>
    	</a>
    </td>
	<td><span class="time_text">$<?php echo number_format($record["article_sh_price"]); ?></span></td>
	<td><a href="?sub_category=<?php echo $record["sh_sub_category_id"]; ?>"><?php echo (empty($record["sh_sub_category_name"])) ? "" : $record["sh_sub_category_name"]; ?></a></td>
    <td><a href="?area=<?php echo $record["article_sh_area"]; ?>"><?php echo $area_names[$record["article_sh_area"]]; ?></a></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<!--列表 end-->


<!--刊登-->
<button type="button" class="small orange style02"><i class="icon-star"></i>刊登物品</button>
<!--刊登 end-->

<!--頁數-->
<div class="block01">
<?php echo <<<EOT
<span class="page"><span>第 $page 頁</span> / 共 $total_page_number 頁， $total_record_number 則文章</span>
EOT;
?>
<!-- Select -->
<div class="po_right">
<label>跳頁:</label>
<select id="fake_page">
</select>
</div>
</div>
<!--頁數 end-->
</form>
<script type="text/javascript">
$(window).load(function () {
	$.getScript("js/URI.js", function () {
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

	$("#search_sh").click(function () {
		$("#page option[value=1]").prop("selected", true);
		$("#sh_list_form").submit();
	});

	$("[id*='page']").change(function () {
		if ($(this).is("[id='fake_page']")) {
			$("#page option[value=" + $("option:selected", this).val() + "]").prop("selected", true);
		}
		$("#sh_list_form").submit();
	});

	$("button[class='small orange style02']").click(function () {
		window.location = "sh_post.php";
	});

	$("#sub_category").append($("#sub_category_1 option").clone());
	$("#main_category").change(function () {
		var suffix = $("option:selected", this).val();
		$("#sub_category").empty().append($("#sub_category_" + suffix + " option").clone());
	});
});
</script>