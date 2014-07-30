<?php
require_once("common.inc.php");

$te = new TblEdm();
$sql_params = array(
	"fields" => array("*", "DATE_FORMAT(edm_publish_date, '%Y/%m/%d') AS edm_publish_date"),
	"order_by_clause" => "edm_publish_date DESC",
	"limit" => 10,
);
$edm_list = $te->read($te->generateReadSQL($sql_params));

foreach ($edm_list as &$record) {
	$record["edm_title"] = htmlentities($record["edm_title"], ENT_COMPAT, "UTF-8");
	$record["edm_summary"] = htmlentities($record["edm_summary"], ENT_COMPAT, "UTF-8");
	$record["edm_thumbnail_path1"] = get_path($record["edm_thumbnail_path1"]);
	$record["edm_thumbnail_path2"] = get_path($record["edm_thumbnail_path2"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
	<!--<![endif]-->
	<link rel="stylesheet" href="css/list.css">
</head>
<body>
	<div class="conainter">
		<div class="header">
			<img src="img/logo.gif">
			<div class="nav navbar-right">
				<a href="#">討論區</a>
				<a href="#">作品發表</a>
				<a href="#">文章總覽</a>
			</div>
		</div>
		<div class="jumbotron">
			<?php
			$value = array_shift($edm_list);
			if (!empty($value)) {
			?>
			<div class="pure-g">
				<div class="pure-u-1 pure-u-md-7-24"><img src="<?php echo $value["edm_thumbnail_path1"]; ?>" width="200" height="130"></div>
				<div class="pure-u-1 pure-u-md-17-24">
					<span style="float: right;"><?php echo $value["edm_publish_date"]; ?> 出刊</span>
					<h3><?php echo $value["edm_title"]; ?></h3>
					<p><?php echo $value["edm_summary"]; ?></p>
					<a href="edm.php?id=<?php echo $value["edm_id"]; ?>" style="float: right;" target="_blank">閱讀內容</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<hr style="margin: 14px 0; border: 1px dashed #d8d8d8;">
		<div class="pure-g">
			<?php foreach ($edm_list as $value) { ?>
			<div class="pure-u-1 pure-u-md-1-2">
				<div class="pure-g cell">
					<div class="pure-u-1 pure-u-md-7-24"><img src="<?php echo $value["edm_thumbnail_path2"]; ?>" width="100" height="65"></div>
					<div class="pure-u-1 pure-u-md-17-24">
						<span style="float: right;"><?php echo $value["edm_publish_date"]; ?> 出刊</span>
						<span class="volume">第<?php echo $value["edm_volume"]; ?>期</span>
						<span class="title"><?php echo $value["edm_title"]; ?></span>
						<a href="edm.php?id=<?php echo $value["edm_id"]; ?>" style="float: right;" target="_blank">閱讀內容</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="pure-u-1 pure-u-md-1-2">
				<div class="pure-g cell">
					<div class="pure-u-1 pure-u-md-7-24"><img src="" width="100" height="65"></div>
					<div class="pure-u-1 pure-u-md-17-24">
						<span style="float: right;">2014/06/25 出刊</span>
						<span class="volume">第516期</span>
						<span class="title">紅外線攝影的好幫手-STC UV-IR CUT濾鏡運用分享</span>
						<a href="#" style="float: right;">閱讀內容</a>
					</div>
				</div>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<div class="pure-g cell">
					<div class="pure-u-1 pure-u-md-7-24"><img src="" width="100" height="65"></div>
					<div class="pure-u-1 pure-u-md-17-24">
						<span style="float: right;">2014/06/25 出刊</span>
						<span class="volume">第516期</span>
						<span class="title">紅外線攝影的好幫手-STC UV-IR CUT濾鏡運用分享</span>
						<a href="#" style="float: right;">閱讀內容</a>
					</div>
				</div>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<div class="pure-g cell">
					<div class="pure-u-1 pure-u-md-7-24"><img src="" width="100" height="65"></div>
					<div class="pure-u-1 pure-u-md-17-24">
						<span style="float: right;">2014/06/25 出刊</span>
						<span class="volume">第516期</span>
						<span class="title">紅外線攝影的好幫手-STC UV-IR CUT濾鏡運用分享</span>
						<a href="#" style="float: right;">閱讀內容</a>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin: 14px 0; border: 1px dashed #d8d8d8;">
		<div class="footer">
			<div class="pure-g">
				<div class="pure-u-1 pure-u-md-1-3">
					<img src="img/logo_dcview_edm_f.gif">
				</div>
				<div class="pure-u-1 pure-u-md-2-3">
					<div class="nav">
						<a href="#">服務說明與客服中心</a>
						<a href="#">整合行銷服務</a>
						<a href="#">行銷合作</a>
						<a href="#">廣告刊登</a>
					</div>
					<div style="clear: both;"></div>
					<p>Copyright © 2002-2014 DCView All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>