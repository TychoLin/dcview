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
$views = array("report", "article");
$view_name = "report";
if (isset($_GET["v"]) && in_array($_GET["v"], $views)) {
	$view_name = $_GET["v"];
}
define("VIEW_PATH", "$view_name.tpl.php");

$view_url = $_SERVER["PHP_SELF"]."?v=$view_name";
?>
<!DOCTYPE html>
<html>
<head>
<title>二手專區 - admin</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style type="text/css">
table {
	border-collapse: collapse;
	width: 100%;
	table-layout: fixed;
}

td, th {
	border: 1px solid black;
	padding: 0.5em;
	overflow: hidden;
}

nav {
	margin-bottom: 0.5em;
}

nav a {
	margin: 0.5em;
}

.container {
	width: 60%;
	margin: auto;
}

.title {
	width: 50%;
	overflow: hidden;
}
</style>
</head>
<body>
	<div class="container">
		<nav>
			<a href="logout.php">logout</a>
			<a href="?v=article">文章管理</a>
			<a href="?v=report">檢舉管理</a>
		</nav>
		<?php require_once(VIEW_PATH); ?>
		<span style="display: block; clear: both;"></span>
	</div>
</body>
</html>