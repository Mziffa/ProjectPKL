<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "toko";

$koneksi = mysql_connect($host, $user, $pass) or die ("koneksi gagal!");
mysql_select_db($name, $koneksi) or die ("tidak ada database yang dipilih!");

?>