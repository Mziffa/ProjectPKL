<?php
include"koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ceklogin = mysql_query("select * from admin where username='$username' && password= '$password'");
$data = mysql_fetch_array($ceklogin);
$cekuser = $data['username'];
if($cekuser==$username)
{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
	header("location:index.php");
}
else
{
	echo"maaf anda gagal login!";
	header("location:login.php?pesan=gagal");
}
?>