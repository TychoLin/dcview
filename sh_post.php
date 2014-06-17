<?php
require_once("shdb.inc.php");

// check if login

$fields = array("category", "area", "trade_status", "title", "price", "content");
$post_data = array_intersect_key($_POST, array_fill_keys($fields, null));

if (count($post_data) == count($fields)) {
	$now = date("Y-m-d H:i:s");
	$record = array(
		"user_id" => 1,
		"category_id" => $post_data["category"],
		"article_title" => $post_data["title"],
		"article_content" => $post_data["content"],
		"article_sh_trade_status" => $post_data["trade_status"],
		"article_sh_price" => $post_data["price"],
		"article_sh_area" => $post_data["area"],
		"article_create_time" => $now,
		"article_update_time" => $now,
	);

	// $ta = new TblArticle();
	// $ta->create($record);
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<select name="category">
			<option value="1">category</option>
			<option value="2">category</option>
			<option value="3">category</option>
		</select>
		<select name="area">
			<option value="0">不限</option>
			<option value="1">北部</option>
			<option value="2">中部</option>
			<option value="3">南部</option>
			<option value="4">花東</option>
			<option value="5">離島</option>
			<option value="9">其他</option>
		</select>
		<select name="trade_status">
			<option value="1">售</option>
			<option value="2">徵</option>
			<option value="3">交換</option>
			<option value="4">團購</option>
		</select>
		<p>title: <input type="text" name="title"></p>
		<p>price: <input type="text" name="price"></p>
		<p>content: <textarea name="content" rows="10" cols="50"></textarea></p>
		<button type="submit">post</button>
	</form>
</body>
</html>