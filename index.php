<?php  
session_start();
if (isset($_SESSION['username'])) {
	$username=$_SESSION['username'];
} else {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<div id="profile">
		<h1><b id="welcome">Selamat Datang <i><?php
			echo $username;  ?></i></b>
		<b id="logout"><a href="logout.php"
			>logout</a></b></h1>
	</div>
</body>
</html>