
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
</head>
    
</br></br></br>
 <body>
 </br></br>
    <center><h2>Cari Data Barang</h2></center>

<nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><B></B></a>
      <ul class="right hide-on-med-and-down navigasi">
        
      </ul>
  </nav></br></br>
  <!-- form advanced search -->
    <form name="form1" method="get" action="">

    <center><table cellpadding="1" cellspacing="0">
            <tr>
                <td style="
                     width: 140px;
                    ">Kode</td>
                
                <td><input class="form-control" type="text" name="kode" id="kode" placeholder="Cari berdasarkan Kode" style="
    height: 30px;
"></td>
           </tr>
            <tr>
            	<td>Nama</td>
               <td><input class="form-control" type="text" name="nama" id="nama" size="30" placeholder="Cari berdasarkan Nama" style="
    height: 30px;
"></td>
           </tr>
            <tr>
            	<td>Tanggal masuk</td>
               <td><input class="form-control" type="date" name="tanggal_masuk" id="tanggal_masuk" size="30" placeholder="Cari berdasarkan tanggal_masuk" style="
    height: 30px;
"></td>
           </tr>
            <tr>
            	<td>Tanggal keluar</td>
               <td><input class="form-control" type="date" name="tanggal_keluar" id="tanggal_keluar" size="30" placeholder="Cari berdasarkan tanggal_keluar" style="
    height: 30px;
    ">

             
        </table>
         <br/><input classs="btn btn-s waves-effect waves-light red accent-4" type="submit" value="Search" name="search"/>
</br></br></center>
    </form>
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['search'])){
        $conn = mysql_connect("localhost", "root", "");
        mysql_select_db("toko");
        $kode = $_GET['kode'];
        $nama = $_GET['nama'];
        $tanggalmasuk = $_GET['tanggal_masuk'];
        $tanggalkeluar = $_GET['tanggal_keluar'];
        $sql = "select * from barang where kode like '%$kode%' and 
        nama like '%$nama%' and tanggal_masuk like '%$tanggalmasuk%' and tanggal_keluar like '%$tanggalkeluar%'";
        $result = mysql_query($sql);
        if(mysql_num_rows($result) > 0){
     ?>
     <center><table cellpadding="2" cellspacing="0" border="5">
        <tr bgcolor="#BCC">
                    <td>No</td>
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Stok</td>
                    <td>Harga</td>
                    <td>Tanggal_masuk</td>
                    <td>Tanggal_keluar</td>
                </tr>
            
                <?php

                for ($no= 1; $no <= 200; $no++)
                    
                while($toko = mysql_fetch_array($result)){?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $toko['kode'];?></td>
                    <td><?php echo $toko['nama'];?></td>
                    <td><?php echo $toko['stok'];?></td>
                    <td><?php echo $toko['harga'];?></td>                    
                    <td><?php echo $toko['tanggal_masuk'];?></td>
                    <td><?php echo $toko['tanggal_keluar'];?></td>
            
                </tr>

                <?php }?>
            </center>
            </table>

            <?php
        }else{
            echo 'Data not found!'; 
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
                            <a class="js-arrow" href="index.php">
                                <center><i class="fas fa-tachometer-alt"></i>Menu Utama</a></center>
                            
                                </br>
                            <a href="input.php">
                                <center><i class="fas fa-calendar-alt"></i>Tambah Data</a></center>
                        </br>

                            <a href="tabel_cari.php">
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