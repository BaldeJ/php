<?php
	session_start();
	if(!isset($_SESSION['user_name']))
		header('Location: login.php');
	$n=$_POST['name'];
	$nn=$_POST['sname'];
	$_SESSION['namee']=$n;
	$_SESSION['snamee']=$nn;
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="forma.php" method="post">
		<input type="text" name="name" placeholder="имя">
		<input type="text" name="sname" placeholder="фамилия">
		<input type="submit">
		<p><a href="index.php" style="text-decoration: none;color:red;">back</a></p>
	</form>
</body>
</html>