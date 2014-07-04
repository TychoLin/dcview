<?php
require_once("common.inc.php");

// check if admin
session_name("dcview");
session_start();
if (!is_logined()) {
	header("Location: index.php");
	exit();
}

// controller
$views = array("report", "article");var_dump($_GET);
if (isset($_GET["v"]) && in_array($_GET["v"], $views)) {
	define("VIEW_PATH", $_GET["v"].".tpl.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>二手專區 - 檢舉文章列表</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style type="text/css">
table {
	border-collapse: collapse;
}

table, td, th {
	border: 1px solid black;
	padding: 0.5em;
}

.container {
	width: 50%;
	margin: auto;
}

.list {
	float: left;
	width: 80%;
}

#page {
	float: left;
}
</style>
</head>
<body>
	<div class="container">
		<div><a href="logout.php">logout</a></div>
		<?php require_once(VIEW_PATH); ?>
		<span style="display: block; clear: both;"></span>
	</div>
</body>
</html>