<?php
require_once("shdb.inc.php");

// check if login

$area_names = array(1 => "北部", 2 => "中部", 3 => "南部", 4 => "花東", 5 => "離島", 9 => "其他");
$trade_status_names = array(1 => "售", 2 => "徵", 3 => "交換", 4 => "團購");

$fields = array("area", "trade_status", "keyword", "period");
$get_data = array_intersect_key($_GET, array_fill_keys($fields, null));

$cond = array();
if (count($get_data) > 0) {
	foreach ($get_data as $key => $value) {
		if ($key == "area" && in_array($value, array_keys($area_names))) {
			$cond["article_sh_area = ?"] = $value;
		} else if ($key == "trade_status" && in_array($value, array(1, 2, 3, 4))) {
			$cond["article_sh_trade_status = ?"] = $value;
		} else if ($key == "keyword") {
			$cond["article_title LIKE ?"] = "%$value%";
		} else if ($key == "period") {
			$now = date("Y-m-d H:i:s");
			$cond["DATEDIFF('$now', article_create_time) <= ?"] = 250;
		}
	}
}

$ta = new TblArticle();
$list = $ta->read($cond, 10, 0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二手專區</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/kickstart.js"></script> <!-- KICKSTART -->
<link rel="stylesheet" href="css/kickstart.css" media="all" /> <!-- KICKSTART -->
<link rel="stylesheet" href="css/form_style.css" media="all" /> <!-- KICKSTART -->
</head>

<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
<!--類別-->
<div class="block01">

<!-- Select -->
<label for="main_category">主類別:</label>
<select id="main_category" name="main_category">
<option value="0">數位相機</option>
<option value="1">手機相關</option>
<option value="2">其他</option>
</select>

<!-- Select -->
<label for="sub_category">類別:</label>
<select id="sub_category" name="sub_category">
<option value="0">Option 0</option>
<option value="1">Option 1</option>
<option value="2">Option 2</option>
<option value="3">Option 3</option>
</select>
</div>
<!--類別 end-->

<!--買賣地區-->
<div class="block01_1">
<!-- Select -->
<label for="trade_status">買或賣:</label>
<select id="trade_status" name="trade_status">
<option value="1">售</option>
<option value="2">徵</option>
<option value="3">交換</option>
<option value="4">團購</option>
</select>

<!-- Select -->
<label for="area">地區:</label>
<select id="area" name="area">
<option value="1">北部</option>
<option value="2">中部</option>
<option value="3">南部</option>
<option value="4">花東</option>
<option value="5">離島</option>
<option value="9">其他</option>
</select>

<label for="keyword">關鍵字:</label>
<input id="keyword" name="keyword" type="text" />
<button type="submit" class="small">搜尋</button>
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
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="3">4</option>
<option value="4">5</option>
<option value="3">6</option>
</select>
</div>
<button class="small blue style02"><i class="icon-star"></i>刊登物品</button>
</div>
<!--排序及頁數 end-->

<!--列表-->
<div>
<!-- Table -->
<table class="sortable" cellspacing="0" cellpadding="0">
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
<?php foreach ($list as $record) { ?>
<tr>
	<td><span class="time_text"><?php echo $record["article_create_time"]; ?></span></td>
	<td><a href="#">MonkeyLi</a></td>
	<td><span><?php echo $record["article_sh_trade_status"]; ?></span></td>
    <td><a href="#"><?php echo $record["article_title"]; ?><span>(1)</span></a></td>
	<td><span class="time_text">$<?php echo $record["article_sh_price"]; ?></span></td>
	<td><a href="#">Nikon</a></td>
    <td><a href="#"><?php echo $record["article_sh_area"]; ?></a></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<!--列表 end-->


<!--刊登-->
<button class="small blue style02"><i class="icon-star"></i>刊登物品</button>
<!--刊登 end-->

<!--頁數-->
<div class="block01">
<span class="page"><span>第 1 頁</span> / 共 68 頁， 1360 則文章</span>
<!-- Select -->
<div class="po_right">
<label for="page">跳頁:</label>
<select id="page" name="page">
<option value="0">- 頁數 -</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="3">4</option>
<option value="4">5</option>
<option value="3">6</option>
</select>
</div>
</div>
<!--頁數 end-->
</form>
</body>
</html>