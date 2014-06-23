<?php
require_once("common.inc.php");

if (isset($_GET["article_id"])) {
	$article_id = (int)$_GET["article_id"];
	$ta = new TblArticle();
	$fields = array("*");
	$where_cond = array("article_id = ?" => $article_id);
	$ta->initReadSQL($fields, $where_cond);
	$article_record = $ta->read();
	if (count($article_record) == 1) {
		$article_record = $article_record[0];
	} else {
		exit();
	}
} else {
	exit();
}
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
<link rel="stylesheet" href="css/magnific-popup.css"> <!-- magnific-popup -->
<style type="text/css">
.white-popup {
	position: relative;
	background: #FFF;
	padding: 20px;
	width: auto;
	max-width: 500px;
	margin: 20px auto;
}
</style>
</head>

<body>
<!--button bar-->
<div class="button_style">
<!-- Button Bar w/icons -->
<ul class="button-bar">
<li><a href="<?php echo (isset($_SERVER["HTTP_REFERER"])) ? $_SERVER["HTTP_REFERER"]: "sh_list.php"; ?>"><i class="icon-reply"></i>回前頁</a></li>
<li><a href=""><i class="icon-comment"></i>回應</a></li>
<li><a href=""><i class="icon-pencil"></i>編輯文章</a></li>
<li><a href=""><i class=" icon-minus-sign"></i>檢舉文章</a></li>
<li class="last"><a href="sh_post.php"><i class="icon-plus-sign"></i>刊登物品</a></li>
</ul>
</div>
<!--button bar end-->


<!--刊登內容-->
<div class="p_content">
<h3><span><?php echo $trade_status_names[$article_record["article_sh_trade_status"]]; ?></span><?php echo $article_record["article_title"]; ?></h3>
<ul class="title">
<li>售$<?php echo number_format($article_record["article_sh_price"]); ?><span class="symbo2">│</span></li>
<li>地點：<?php echo $area_names[$article_record["article_sh_area"]]; ?></li>
</ul>

<div class="title01">
<ul>
<li class="po">刊登人</li>
<li>天空貓<span class="symbol">│</span></li>
<li>skycat1221@gmail.com<span class="symbol">│</span></li>
<li>tel: 0920262499</li>
</ul>
</div>

<div class="title01_1">
<ul>
<li class="po">刊登時間</li>
<li><?php echo $article_record["article_create_time"]; ?></li>
</ul>
</div>

<div class="title02">
<p><?php echo nl2br($article_record["article_content"]); ?></p>
</div>
<!--刊登內容 end-->


<!--button bar-->
<div class="button_style">
<!-- Button Bar w/icons -->
<ul class="button-bar">
<li><a href="<?php echo (isset($_SERVER["HTTP_REFERER"])) ? $_SERVER["HTTP_REFERER"]: "sh_list.php"; ?>"><i class="icon-reply"></i>回前頁</a></li>
<li><a href=""><i class="icon-comment"></i>回應</a></li>
<li><a href=""><i class="icon-pencil"></i>編輯文章</a></li>
<li><a href=""><i class=" icon-minus-sign"></i>檢舉文章</a></li>
<li class="last"><a href="sh_post.php"><i class="icon-plus-sign"></i>刊登物品</a></li>
</ul>
</div>
<!--button bar end-->


<!--notice-->
<div class="title03">
<p>網友請注意:
本版僅提供網頁平台供網友張貼拍賣訊息。因此本版無法保證所有訊息資料之可靠性。
建議網友進行交易之前，務必確實比對貨品之規格是否符合，並留下對方之真實姓名(最好記下身分證字號)、聯絡 方式，強烈建議網友，務必當場點清貨品規格後再行付款，以免事後產生糾紛。
建議勿用郵局代收貨款, 或匯款方式進行交易(這些都容易產生糾紛)，建議一手交錢、一手交貨。</p>
</div>
<!--notice end-->


<!--回應-->
<div class="title04">
<span>對這個拍賣的回應：</span>
<?php
$tr = new TblReply();
$fields = array("user_id", "reply_content", "reply_create_time");
$where_cond = array("article_id = ?" => $article_id);
$tr->initReadSQL($fields, $where_cond);
$reply_list = $tr->read();
foreach ($reply_list as $value) {
?>
<ul>
<li class="first"><?php echo $value["reply_content"]; ?></li>
<li>小夫唷<span>[<?php echo nl2br($value["reply_create_time"]); ?>]</span></li>
</ul>
<?php
}
?>
<!--回應 end-->

</div>
<div id="test-popup" class="white-popup mfp-hide">
hello world
</div>
<a href="#test-popup" class="open-popup-link">Show inline popup</a>
<script type="text/javascript">
$(window).load(function () {
	$(".button-bar li:nth-last-child(2)").click(function () {
		// var test = window.open("sh_test.php", "_blank", "width=400,height=300");
	});

	$.getScript("js/jquery.magnific-popup.js", function () {
		$(".open-popup-link").magnificPopup({
			type: "inline",
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});
	});
});
</script>
</body>
</html>