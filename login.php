<?php  
	session_start();
	if (isset($_SESSION['username'])) {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LOGIN</title>
</head>
<body>
	<div id="main">
		<h1><center>Form Login Account</center></h1>
		<div id="login">
			<h2>Account</h2>
			<form action="login_proses.php" method="post">
				<label>Username :</label>
				<input type="text" name="username" id="name" placeholder="username">

				<label>Password :</label>
				<input type="Password" name="Password" id="password" placeholder="password"><br><br>

				<input type="submit" value="Login" name="login"><br>
				Belum daftar silahkan klik <b id="di sini"><a href="register.html">di sini</a></b>
			</table>
			</form>
		</div>
	</div>
</body>
</html>