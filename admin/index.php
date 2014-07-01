<?php
require_once("common.inc.php");

if (isset($_POST["account"], $_POST["pw"], $_POST["login"])) {
	$account = "admin";
	$pw = "qwedfgvcx";

	if ($_POST["account"] == $account && $_POST["pw"] == $pw) {
		session_name("dcview");
		session_start();
		$_SESSION["logined"] = true;
		header("Location: sh_manage_report.php");
		exit();
	}
} else if (isset($_POST["logout"])) {
	logout();
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.container {
	width: 50%;
}
</style>
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<fieldset>
				<legend>DCview Second Hand Admin</legend>
				<label for="account">account:</label>
				<input type="text" name="account" autofocus>
				<label for="pw">password:</label>
				<input type="password" name="pw">
				<input type="submit" name="login" value="login">
				<input type="submit" name="logout" value="logout">
			</fieldset>
		</form>
	</div>
</body>
</html>