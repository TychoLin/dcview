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
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>數位視野電子報</title>
	<link href="css/edm_style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header">
		<div class="top">
			<h1><a href="http://www.dcview.com/" target="_blank"><img src="img/logo.png" width="300" height="50" alt="DCView數位視野" title="DCView數位視野"></a></h1>
			<div class="nav">
				<ul>
					<li><a href="http://tw.dcview.com/forum.php" target="_blank">討論區</a></li>
					<li><a href="http://gallery.dcview.com/" target="_blank">作品發表</a></li>
					<li><a href="http://article.dcview.com/" target="_blank">文章總覽</a></li>
					<li class="last"><a href="http://tw.dcview.com/spec/" target="_blank">相機專區</a></li>
				</ul>
			</div>

		</div>
	</div>
	<div class="article">
		<?php
		$value = array_shift($edm_list);
		if (!empty($value)) {
		?>
		<div class="content">
			<div class="space"><img src="<?php echo $value["edm_thumbnail_path1"]; ?>" width="200" height="130"></div>
			<div class="right_content">
				<ul class="content_title">
					<li>第<?php echo $value["edm_volume"]; ?>期</li>
					<li class="last"><?php echo $value["edm_publish_date"]; ?> 出刊</li>
				</ul>
				<h2><a href="edm.php?id=<?php echo $value["edm_id"]; ?>" target="_blank"><?php echo $value["edm_title"]; ?></a></h2>
				<!-- <p><?php echo $value["edm_summary"]; ?></p> -->
				<span class="date">
					<span class="last"><a href="edm.php?id=<?php echo $value["edm_id"]; ?>" target="_blank">閱讀內容</a></span>
				</span>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="article01">
		<div class="content01">
			<?php foreach ($edm_list as $key => $value) { ?>
			<div class="<?php echo ($key % 2 == 0) ? "sub_content": "sub_content1"; ?>">
				<div class="space"><img src="<?php echo $value["edm_thumbnail_path1"]; ?>" width="100" height="65"></div>
				<ul>
					<li>第<?php echo $value["edm_volume"]; ?>期</li>
					<li class="last"><?php echo $value["edm_publish_date"]; ?> 出刊</li>
				</ul>
				<h3><a href="edm.php?id=<?php echo $value["edm_id"]; ?>" target="_blank"><?php echo $value["edm_title"]; ?></a></h3>
				<span class="date">
					<span class="last"><a href="edm.php?id=<?php echo $value["edm_id"]; ?>" target="_blank">閱讀內容</a></span>
				</span>
			</div>
			<?php if ($key > 0 && ($key % 2 == 1)) { ?>
			<p class="border"></p>
			<?php } ?>
			<?php } ?>
			<span style="clear: both;"><span>
		</div>
	</div>
	<div class="footer">
		<div class="content02">
			<a href="http://www.dcview.com/" target="_blank"><img src="img/logo_footer.png" width="207" height="80" alt="DCView數位視野" title="DCView數位視野"></a>
			<div class="nav01">
				<ul>
					<li><a href="http://service.dcview.com/">服務說明與客戶中心</a></li>
					<li><a href="http://service.dcview.com/sales/">整合行銷服務</a></li>
					<li><a href="http://service.dcview.com/qa_list.php?classid=6">行銷合作</a></li>
					<li class="last"><a href="http://service.dcview.com/sales/advertisement.php">廣告刊登</a></li>
				</ul>
				<span>Copyright © 2002-2014 DCView All Rights Reserved.</span>
			</div>
		</div>
	</div>
</body>
</html>