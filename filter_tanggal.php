</br></br></br>
 <body>
 </br></br>
    <center><h2>Cari Data Barang</h2></center>
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
     <?php
    if(isset($_GET['search'])){
        $conn = mysql_connect("localhost", "root", "");
        mysql_select_db("toko");
        $kode = $_GET['kode'];
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