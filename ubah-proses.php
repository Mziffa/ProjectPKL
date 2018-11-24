<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol INPUT di klik
if(isset($_POST['edit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$Kode		        = $_POST['kode'];	//membuat variabel $Kode dan datanya dari inputan Kode
	$Nama		        = $_POST['nama'];	//membuat variabel $Nama dan datanya dari inputan Nama
	$Stok		        = $_POST['stok'];	//membuat variabel $Stok dan datanya dari inputan dropdown Stok
	$harga	            = $_POST['harga'];	//membuat variabel $Harga dan datanya dari inputan dropdown Harga
	$Tanggalmasuk	    = $_POST['tanggal_masuk'];	//membuat variabel $Tanggal masuk dan datanya dari inputan dropdown Tanggal masuk
	$Tanggalkeluar	    = $_POST['tanggal_keluar'];	//membuat variabel $Tanggal masuk dan datanya dari inputan dropdown Tanggal keluar
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("UPDATE barang SET nama='$Nama', stok='$Stok', Harga='$harga', tanggal_masuk='$Tanggalmasuk', tanggal_keluar='$Tanggalkeluar'  WHERE kode ='$Kode'") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di ubah! ';		//Pesan jika proses tambah sukses
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman login
		
	}else{
		
		echo 'Gagal ubah data! ';		//Pesan jika proses tambah gagal
		echo '<a href="edit.php">Kembali</a>';	//membuat Link untuk kembali ke halaman login
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
