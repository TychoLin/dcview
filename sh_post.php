<?php
require_once("common.inc.php");
function verify_article_data($data) {
	if (!in_array($data["trade_status"], array_keys($GLOBALS["trade_status_names"]))) {
		return false;
	}

	if (!in_array($data["area"], array_keys($GLOBALS["area_names"]))) {
		return false;
	}

	return true;
}

// check if login

$fields = array("sub_category", "title", "content", "trade_status", "price", "area", "email", "phone_number", "img_url1", "img_url2");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

// handle post data
if (count($post_data) == count($fields) && verify_article_data($post_data)) {
	$now = date("Y-m-d H:i:s");
	$record = array(
		"user_id" => 1,
		"sh_sub_category_id" => $post_data["sub_category"],
		"article_title" => htmlentities($post_data["title"]),
		"article_content" => htmlentities($post_data["content"]),
		"article_sh_trade_status" => $post_data["trade_status"],
		"article_sh_price" => (int)$post_data["price"],
		"article_sh_area" => $post_data["area"],
		"article_create_time" => $now,
		"article_update_time" => $now,
		"article_email" => $post_data["email"],
		"article_phone_number" => $post_data["phone_number"],
		"article_img_url1" => $post_data["img_url1"],
		"article_img_url2" => $post_data["img_url2"],
	);

	$ta = new TblArticle();
	$ta->create($record);
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
</head>

<body>
<div class="p_content">
<!--規則說明-->
<div class="rule">
<p>二手市場區張貼規則: <span>(未依規定發表之留言將一律刪除，恕不另行通知。)</span>
<br>1.	本版純屬交流，不歡迎打廣告<span>（含已經刊登於其他拍賣者）</span>，未依規定發表之刊登與留言將一律刪除，恕不另行通知。
<br>2.	本站無法稽核二手買賣商品內容之真實性，網友請自行負責承擔風險，盡可能當面交易點清，切勿貿然匯款或郵寄商品給陌生人。
<br>3.	本區謝絕任何形式廣告，包括水貨商、跑單幫者、清庫存促銷、或是任何特賣活動。
<br>4.	發起團購者，請於十二小時內將您的姓名、身分證字號、服務單位、聯絡電話、地址通知站方備查，否則將一律刪除。
<br>5.	同物品一週內若重複刊登，我們將會全數刪除，並將該會員帳號停權處理！
<br>6.	刊登物品請詳述您的物件內容，否則將予以刪除！
<br>7.	會員每次刊登僅一則為限，之後間隔30分鐘可再次刊登<span>（內容不得重複）</span>。
<br>8.	新註冊之會員，註冊成功起三天內恕無法刊登。</p>
</div>
<!--規則說明 end-->

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<!--類別-->
<div class="block01">
<ul>
<li>刊登人：m=0=m</li>
<li>刊登在數位相機二手市場</li>
</ul>
<?php require_once("templates/category.tpl.php"); ?>
</div>
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

<label for="price">$:</label>
<input type="text" id="price" name="price"><span class="color">(限數字)</span>
</div>
<!--類別 end-->

<!--刊登說明-->
<div class="title05">
<span>刊登說明(請注意)：</span>
<p>本版純屬交流，不歡迎打廣告(含已經刊登於其他拍賣者)
同物品一週內若重複刊登，我們將會全數刪除!
請詳述您的物件內容，否則將予以刪除!</p>
</div>
<!--刊登說明 end-->

<!--標題-->
<label for="title">標題:</label>
<input class="width_block" id="title" name="title" type="text">
<span class="color">(以 30個中文字或 60個英文字為限)</span>
<!-- Textarea -->
<textarea class="style02" id="content" name="content" placeholder=""></textarea>
<!--標題 end-->

<!--check box-->
<label for="email">聯絡方式:</label>
<span class="in_put">信箱</span>
<input id="email" name="email" type="text" />
<span class="in_put">手機號碼</span>
<input id="phone_number" name="phone_number" type="text" />
<span class="in_put">可擇一填寫</span>

<div class="block02">
<!-- Checkbox -->
<input type="checkbox" id="check1" />
<label for="check1" ><span>當有網友回應此刊登時，要讓系統自動發函到上列信箱通知您嗎? (之後亦可取消此功能)</span></label>
</div>
<!--check box end-->

<!--物品圖片-->
<div class="block03">
<label for="img_url1">物品圖片1:<span> (請輸入圖片本身的完整 URL 連結，圖片寬度請勿超過 600-pixel; 若無圖片請空白即可)</span></label>
<input class="width_block1" id="img_url1" name="img_url1" type="text" />
</div>

<div class="block03">
<label for="img_url2">物品圖片2:<span> (請輸入圖片本身的完整 URL 連結，圖片寬度請勿超過 600-pixel; 若無圖片請空白即可)</span></label>
<input class="width_block1" id="img_url2" name="img_url2" type="text" />
<button class="style01" type="submit">確定送出</button>
</div>
<!--物品圖片 end-->
</form>

</div>
<script type="text/javascript">
$(window).load(function () {
	$("#sub_category").append($("#sub_category_1 option").clone());
	$("#main_category").change(function () {
		var suffix = $("option:selected", this).val();
		$("#sub_category").empty().append($("#sub_category_" + suffix + " option").clone());
	});
});
</script>
</body>
</html>