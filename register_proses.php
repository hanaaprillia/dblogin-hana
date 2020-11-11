<?php  
// membuat koneksi
$con = mysqli_connect("localhost", "root", "", "dblogin");

// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$submit = $_POST['submit'];

if (isset($submit)) {
	
	if (empty($username) or empty($password)) {
		
		echo "<script>alert('Form tidak boleh kosong!!! Silahkan ulangi lagi'); window.location=('register.html')</script>";
	} else {
		$pass = md5($_POST['password']);
		$ins = mysqli_query($con, "INSERT INTO login(user_login,pass_login) values ('$username', '$pass')");
		echo "<script>alert('Data berhasil di tambah'); window.location=('login.php');</script>";
	}
}
?>