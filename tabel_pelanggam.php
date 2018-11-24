<!DOCTYPE html>
<html>
<head>
	<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</br></br></br></br>
</head>

</br></br></br></br>
</head>
	<center><h2>INPUT DATA</h2>
<CENTER><h3>Data Barang</h3></CENTER>
	
	<center><table cellpadding="6" cellspacing="0" border="4">
		<tr bgcolor="#BCC">
			<th>kode</th>
			<th>nama</th>
			<th>stok</th>
			<th>harga</th>
			<th>tanggal masuk</th>
			<th>tanggal keluar</th>
		</tr>

		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM barang ORDER BY Kode DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$data['kode'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['stok'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['harga'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['tanggal_masuk'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['tanggal_keluar'].'</td>';
					
				
				//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
		<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" style="width:60px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="tabel_pelanggam.php">
                                <center><i class="fas fa-tachometer-alt"></i>Menu Utama</a></center>
                             </br>

                            <a href="data_barang.php">
                                <center><i class="fas fa-map-marker-alt"></i>Cari Data</a></center>

     </div>
        </aside>
        <!-- END MENU SIDEBAR-->
	</table></center>