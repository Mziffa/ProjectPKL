<?php
include"koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ceklogin = mysql_query("select * from pelanggan where username='$username' && password= '$password'");
$data = mysql_fetch_array($ceklogin);
$cekuser = $data['username'];
if($cekuser==$username)
{
	session_start();
	$_SESSION['username'] = $username;
	
	header("location:tabel_pelanggam.php");
}
else
{
	echo"maaf anda gagal login!";
	header("location:login_user.php?pesan=gagal");
}
?>