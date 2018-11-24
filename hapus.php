<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])) {
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$kode = $_GET['id'];

	// var_dump($kode);

	// print_r($kode);
	
		
	//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
	$del = mysql_query("DELETE FROM barang WHERE kode ='$kode'");
	
	//jika query DELETE berhasil
	if($del){
		
		echo 'Data barang berhasil di hapus! ';		//Pesan jika proses hapus berhasil
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
	}else{
		
		echo 'Gagal menghapus data, Coba ulang kembali ! ';		//Pesan jika proses hapus gagal
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
	
	}
}

?>