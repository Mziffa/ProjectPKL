 <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


<!-- CSS DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/rowReorder.dataTables.min.css" > -->
  <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.material.min.css" > -->

<!--  JQUERY-->
  <script src="js/jquery-2.1.1.min.js"></script>

<!-- DAFTAR PESERTA PKL-->
  <div class="container">
    <div class="row">
      <div class="data-table">
        <div class="row center">
          <h5 class="">HASIL DATA BARANG TOKO GEMILANG</h5><hr>
        </div><!-- end row center -->
          <table id="example" class="display nowrap highlight striped" cellspacing="0" width="100%">
            <thead>
            	<tr>
                <th style="text-align:center">kode</th>
                <th style="text-align:center">nama</th>
                <th style="text-align:center">stok</th>
                <th style="text-align:center">harga</th>
                <th style="text-align:center">tanggal_masuk</th>
                <th style="text-align:center">tanggal_keluar</th>
              </tr>
            </thead>
            <tbody>
            	<?php
                // panggil koneksi db
                include 'koneksi.php';
              
                // eksekusi perintah sql cari semua data pendaftaran
                $sql  = mysql_query("SELECT * FROM barang order by nama asc");

                  $no = 1;
                while ($dp = mysql_fetch_array($sql)) {

                  //tampilkan data pendaftaran
                  echo "<tr>
                          <td style='text-align:center'>$dp[kode]</td>
                          <td style='text-align:center'>$dp[nama]</td>
                          <td style='text-align:center'>$dp[stok]</td>
                          <td style='text-align:center'>$dp[harga]</td>
                          <td style='text-align:center'>$dp[tanggal_masuk]</td>
                          <td style='text-align:center'>$dp[tanggal_keluar]</td>
                        </tr>";
                  $no++;
                }
              ?>
              	<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" style="width:50px;" />
                </a>

                 </aside>



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
