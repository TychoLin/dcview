<?php
require_once("../common.inc.php");

function logout() {
	session_name("dcview");
	session_start();
	$_SESSION = array();
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	}
	session_destroy();
	header("Location: index.php");
	exit();
}

function is_logined() {
	if (isset($_SESSION["logined"]) && $_SESSION["logined"]) {
		return true;
	} else {
		return false;
	}
}
?>