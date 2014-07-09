<?php
require_once("common.inc.php");

// check if login

$fields = array("article_id", "content", "submit");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

if (isset($_GET["article_id"])) {
	$article_id = (int)$_GET["article_id"];
	$ta = new TblArticle();
	$sql_params = array(
		"fields" => array("*"),
		"where_cond" => array("article_id = ?" => $article_id),
	);
	$article_record = $ta->read($ta->generateReadSQL($sql_params));
	if (count($article_record) == 1) {
		$article_record = $article_record[0];
	} else {
		exit();
	}
} else if (count($post_data) == count($fields)) {
	$article_id = (int)$post_data["article_id"];
	$now = date("Y-m-d H:i:s");

	if ($post_data["submit"] == "reply") {
		$record = array(
			"article_id" => $article_id,
			"user_id" => 1,
			"reply_content" => htmlentities(str_replace("<br>", "\n", $post_data["content"])),
			"reply_create_time" => $now,
			"reply_update_time" => $now,
		);

		$tr = new TblReply();
		$tr->create($record);
	} else if ($post_data["submit"] == "edit") {
		$record = array(
			"article_content" => htmlentities(str_replace("<br>", "\n", $post_data["content"])),
			"article_update_time" => $now,
		);

		$where_cond = array("article_id = ?" => $article_id);
		$ta = new TblArticle();
		$ta->update($record, $where_cond);
	} else if ($post_data["submit"] == "report") {
		$record = array(
			"article_id" => $article_id,
			"user_id" => 1,
			"report_comment" => htmlentities($post_data["content"]),
			"report_create_time" => $now,
		);

		$duplicate_clause = array("report_comment = ?" => htmlentities($post_data["content"]));

		$tr = new TblReport();
		$result = $tr->create($record, $duplicate_clause);
	} else {
		// ...
	}

	header("Location: {$_SERVER["PHP_SELF"]}?article_id=$article_id");
	exit();
} else {
	exit();
}
?>
<style type="text/css">
.white-popup {
	position: relative;
	background: #FFF;
	padding: 20px;
	width: auto;
	max-width: 700px;
	margin: 20px auto;
}
</style>
<!--button bar-->
<div class="button_style">
<!-- Button Bar w/icons -->
<ul class="button-bar">
<li><a href="<?php echo (isset($_SERVER["HTTP_REFERER"])) ? $_SERVER["HTTP_REFERER"]: "sh_list.php"; ?>"><i class="icon-reply"></i>回前頁</a></li>
<li><a href="#reply-popup" class="open-reply-popup-link"><i class="icon-comment"></i>回應</a></li>
<li><a href="#edit-popup" class="open-edit-popup-link"><i class="icon-pencil"></i>編輯文章</a></li>
<li><a href="#report-popup" class="open-report-popup-link"><i class=" icon-minus-sign"></i>檢舉文章</a></li>
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
<p><?php echo str_replace("\n", "<br>", $article_record["article_content"]); ?></p>
</div>
<!--刊登內容 end-->

<!--button bar-->
<div class="button_style">
<!-- Button Bar w/icons -->
<ul class="button-bar">
<li><a href="<?php echo (isset($_SERVER["HTTP_REFERER"])) ? $_SERVER["HTTP_REFERER"]: "sh_list.php"; ?>"><i class="icon-reply"></i>回前頁</a></li>
<li><a href="#reply-popup" class="open-reply-popup-link"><i class="icon-comment"></i>回應</a></li>
<li><a href="#edit-popup" class="open-edit-popup-link"><i class="icon-pencil"></i>編輯文章</a></li>
<li><a href="#report-popup" class="open-report-popup-link"><i class=" icon-minus-sign"></i>檢舉文章</a></li>
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
$sql_params = array(
	"fields" => array("user_id", "reply_content", "reply_create_time"),
	"where_cond" => array("article_id = ?" => $article_id),
);
$reply_list = $tr->read($tr->generateReadSQL($sql_params));
foreach ($reply_list as $value) {
?>
<ul>
<li class="first"><?php echo str_replace("\n", "<br>", $value["reply_content"]); ?></li>
<li>小夫唷<span>[<?php echo $value["reply_create_time"]; ?>]</span></li>
</ul>
<?php
}
?>
<!--回應 end-->

</div>
</div>

<div id="reply-popup" class="white-popup mfp-hide">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
標題：Re：<?php echo $article_record["article_title"]; ?>
<textarea class="style02" name="content" placeholder=""></textarea>
<input type="hidden" id="article_id" name="article_id" value="<?php echo $article_id; ?>">
<button type="submit" name="submit" value="reply">送出</button>
</form>
</div>

<div id="edit-popup" class="white-popup mfp-hide">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
標題：<?php echo $article_record["article_title"]; ?>
<textarea class="style02" name="content" placeholder=""></textarea>
<input type="hidden" id="article_id" name="article_id" value="<?php echo $article_id; ?>">
<button type="submit" name="submit" value="edit">送出</button>
</form>
</div>

<div id="report-popup" class="white-popup mfp-hide">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<p>請簡單填寫您檢舉此篇的理由，以方便我們處理, thanks a lot!</p>
<input type="text" name="content"><br>
<input type="hidden" id="article_id" name="article_id" value="<?php echo $article_id; ?>">
(請勿超過 40字) <button type="submit" name="submit" value="report">送出</button>
</form>
</div>

<script type="text/javascript">
$(window).load(function () {
	$(".button-bar li:nth-last-child(2)").click(function () {
		// var test = window.open("sh_test.php", "_blank", "width=400,height=300");
	});

	$("#edit-popup textarea").empty().append($(".title02 p").contents().clone());

	$.getScript("js/jquery.magnific-popup.js", function () {
		$(".open-reply-popup-link,.open-edit-popup-link,.open-report-popup-link").magnificPopup({
			type: "inline",
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});
	});
});
</script>