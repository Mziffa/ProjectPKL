<?php
			$Open = mysql_connect("localhost","root","");
				if (!$Open){
				die ("Koneksi ke Engine MySQL Gagal !");
				}
			$Koneksi = mysql_select_db("toko");
				if (!$Koneksi){
				die ("Koneksi ke Database Gagal !");
				}
?>
	<form action="between.php" method="post">

	<input type="date" name="tanggal_masuk" > 
	<input type="date" name="tanggal_keluar" > 
	<p>
		<input type="submit" name="cari">

<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['cari'])){
			//menangkap nilai form
			$tanggal_masuk=$_POST['tanggal_masuk'];
			$tanggal_keluar=$_POST['tanggal_keluar'];
			if(empty($tanggal_masuk) || empty($tanggal_keluar)){
			//jika data tanggal kosong
			?>
			?>
			<script language="JavaScript">
				alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
				document.location='index.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_masuk']?></b> s/d <b><?php echo $_POST['tanggal_keluar']?></b></i>
			<?php
			$query=mysql_query("select * from barang where tanggal_masuk between '$tanggal_masuk' and '$tanggal_keluar'");
			}
			?>
			<center><table cellpadding="2" cellspacing="0" border="5">
		<tr bgcolor="#BCC">
			<th>No.</th>
			<th>kode</th>
			<th>Nama Lengkap</th>
			<th>stok</th>
			<th>harga</th>
			<th>tanggal_masuk</th>
			<th>tanggal_keluar</th>
			
			
		</tr></br></br>
		<?php

			for ($no= 1; $no <= 200; $no++)
				while($row=mysql_fetch_array($query)){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td align="center"><?php echo $row['kode']; ?></td>
				<td align="center"><?php echo $row['nama'];?></td>
				<td align="center"><?php echo $row['stok'];?></td>
				<td align="center"><?php echo $row['harga'];?></td>
				<td align="center"><?php echo $row['tanggal_masuk'];?></td>
				<td align="center"><?php echo $row['tanggal_keluar'];?></td>
			</tr>
			<?php
			}
			?> 
			  
			
				<?php
				//jika pencarian data tidak ditemukan
				if(mysql_num_rows($query)==0){
					echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
				}
				?>
				</td>
			</tr> 
		</table>
		<?php
		}
		else{
			unset($_POST['search']);
		}
		?>   
	</table>
</center>


</body>
</html>