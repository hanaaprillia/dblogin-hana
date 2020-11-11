<?php  
session_start();
$con = mysqli_connect("localhost", "root", "", "dblogin");

$username = $_POST['username'];
$password = md5($_POST['Password']);
$login = $_POST['login'];

if (isset($login)) {
	
	if (empty($username) or empty($password)) {
		echo "<script>allert('Form tidak boleh kosong!!! Silahkan Input Kembali'); </script>";
	} else {
		$query = mysqli_query($con, "SELECT * FROM login WHERE user_login = '$username' and pass_login = '$password'");
		if (mysqli_num_rows($query)> 0) {
			echo "Selamat datang admin";

			$r = mysqli_fetch_array($query);
			$_SESSION['username']=$r['user_login'];

			header("location:index.php");
		} else {
			header("location:login.php");
		}
	}
}
?>