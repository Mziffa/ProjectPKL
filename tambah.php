<?php
	//proses mengambil data ke database untuk ditampilkan di form ubah berdasarkan siswa_id yg didapatkan dari GET id -> ubah.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> ubah.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("INSERT * FROM barang WHERE kode='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form ubah di bawah
	
	}
	?>
	
	<form action="tambah-proses.php" method="post">
		<center><table cellpadding="3" cellspacing="0" style="
    	width: 700px;
			">
				<td>kode</td>
				<td><input type="text" name="kode" value="<?php echo $data['kode']; ?>" required="" style="
    height: 30px;" ></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required="" style="
    height: 30px;
"></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>stok</td>
				<td><input type="text" name="stok" size="30" value="<?php echo $data['stok']; ?>" required="" style="
    height: 30px;
"></td> <!-- value diambil dari hasil query -->					
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga" size="30" value="<?php echo $data['harga']; ?>" required="" style="
    height: 30px;
"></td> <!-- value diambil dari hasil query -->	
			</tr>
			<tr>
				<td>tanggal_masuk</td>
				<td><input type="text" name="tanggal_masuk" size="30" value="<?php echo $data['tanggal_masuk']; ?>" required="" style="
    height: 30px;
"></td> <!-- value diambil dari hasil query -->	
			</tr>
			<tr>
                <td>tanggal_keluar</td>
				<td><input type="text" name="tanggal_keluar" size="30" value="<?php echo $data['tanggal_keluar']; ?>" required="" style="    		
	height: 30px;
				">
                       
		
				<td>&nbsp;</td>
				<td><input type="submit" name="tambah" value="tambah"></td>
                        </table>

			</body>
		</html>