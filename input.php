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
	<center><h2>INPUT DATA</h2>

</head>
<body>


	<form action="tambah-proses.php" method="post">
		<table cellpadding="1" cellspacing="0">
			<tr>
				<td>Kode</td>
				
				<td><input class="form-control" type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama</td>
				
				<td><input class="form-control" type="text" name="nama" size="30"></td>

			</tr>
			<tr>
				<td>Stok</td>
				
				<td><input class="form-control" type="text" name="stok" size="30"></td>
			</tr>
			<tr>
				<td>Harga</td>
				
				<td><input class="form-control" type="text" name="harga" size="30"></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				
				<td><input class="form-control" type="date" name="tanggal_masuk" size="30"></td>
            <tr>
            <td>Tanggal Keluar</td>
				
				<td><input class="form-control" type="date" name="tanggal_keluar" size="30"></td>
            </tr>

            
            
		
		</table>
		<td>&nbsp;</td></br>
	
				<td><input type="submit" name="tambah" value="Simpan"></td></center>

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
                            <a class="js-arrow" href="index.php">
                                <center><i class="fas fa-tachometer-alt"></i>Menu Utama</a></center>
                            
                                </br>
                            <a href="input.php">
                                <center><i class="fas fa-calendar-alt"></i>Tambah Data</a></center>
                        </br>

                            <a href="data_barang.php">
                                <center><i class="fas fa-map-marker-alt"></i>Cari Data</a></center>
                        
                    
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
             <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            </form>
                </div>
            </header>
			</body>
			</html>