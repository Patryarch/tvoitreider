<?php
header("Content-Type:text/html;charset=utf-8");

include 'config.php';
include 'functions.php';


$res = get_pass();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="stylesheet" href="style.css">
<title></title>
</head>
<body>
	<form method="post">
		Логин: <br />
		<input type="text" name="login">
		<br />
		Ваш пароль: <br />
		<input type="text" name="password" value="<?=$res;?>">
	</form>
</body>
</html>