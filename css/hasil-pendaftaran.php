<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>SIMPKL-WGS</title>

  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-icon.css" rel="stylesheet">

  <!-- CSS DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/rowReorder.dataTables.min.css" > -->
  <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.material.min.css" > -->

  <!-- custom css -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
 
  <!--  JQUERY-->
  <script src="js/jquery-2.1.1.min.js"></script>

</head>
<body>

  <!-- MENU HEADER -->
  <nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><B>SIMPKL</B></a>
      <ul class="right hide-on-med-and-down navigasi">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="form.php">Pendaftaran</a></li>
        <li><a href="hasil-pendaftaran.php">Persetujuan</a></li>
        <li><a href="jadwal.php">Penjadwalan</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <!-- MINI MENU -->
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="form.php">Pendaftaran</a></li>
        <li><a href="hasil-pendaftaran.php">Persetujuan</a></li>
        <li><a href="jadwal.php">Penjadwalan</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- DAFTAR PESERTA PKL-->
  <div class="container">
    <div class="row">
      <div class="data-table">
        <div class="row center">
          <h5 class="">HASIL REGISTRASI PENGAJUAN PKL</h5><hr>
        </div><!-- end row center -->
          <table id="example" class="display nowrap highlight striped" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="text-align:center">NO</th>
                <th style="text-align:center">PHOTO</th>
                <th style="text-align:center">NIP</th>
                <th style="text-align:center">NAMA</th>
                <th style="text-align:center">DARI</th>
                <th style="text-align:center">STATUS</th>
              </tr>
            </thead>
            <tbody>

              <?php
                // panggil koneksi db
                include 'koneksi.php';
              
                // eksekusi perintah sql cari semua data pendaftaran
                $sql  = mysql_query("SELECT * FROM pendaftaran order by nama_pendaftar asc");

                  $no = 1;
                while ($dp = mysql_fetch_array($sql)) {

                  //tampilkan data pendaftaran
                  echo "<tr>
                          <td style='text-align:center'>$no</td>
                          <td style='text-align:center'><img src='$dp[photo]' height='200px'></td>
                          <td style='text-align:center'>$dp[nip]</td>
                          <td style='text-align:center'>$dp[nama_pendaftar]</td>
                          <td style='text-align:center'>$dp[asal_sekolah]</td>
                          <td style='text-align:center'>$dp[status_pendaftaran]</td>
                        </tr>";
                  $no++;
                }
              ?>
              
            </tbody>
          </table>
          <hr>
          <div class="card-panel teal lighten-2">
            <span class="white-text text-darken-2">Note : Bagi peserta yang sudah dinyatakan <b>ACC</b> dan belum menyerahkan Surat Resmi Pengajuan PKL, silahkan untuk memberikan surat tersebut sebagai tanda bukti resmi pengajuan PKL kepada Kami. Terima Kasih.</span>
          </div>
      </div><!-- end .data-table -->
    </div><!-- end .row -->
  </div><!-- end .container -->
  
  <!-- FOOTER -->
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HQ Office</h5>
          <p class="grey-text text-lighten-4">
            Jln. Soekarno Hatta No. 104
            Bandung, Indonesia, 40222<br> 
            P : +62 22 603 4882
          </p>
        </div>

        <div class="col l6 s12">
          <h5 class="white-text">Sales Office BSD </h5>
             <p class="grey-text text-lighten-4">
                WGS Hub - The Breeze BSD City
                Jln. Grand Boulevard<br>
                Tangerang Selatan, 15345 
                P : +62 21 2939 1185
              </p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="white-text text-lighten-3" href="http://www.wgs.co.id">COPYRIGHT ©2017 WGS. ALL RIGHTS RESERVED</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!-- jquery data table -->
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.rowReorder.min.js"></script>
  <script src="js/dataTables.responsive.min.js"></script>
  <script src="js/dataTables.material.min.js" type="text/javascript"></script>

  <!-- SCRIPT DATA TABLE RESPONSIV -->
   <script type="text/javascript">
   
    // responsive-table jadwal
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

  </script>

  </body>
</html>
