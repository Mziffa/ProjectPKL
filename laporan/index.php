<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',18);
// mencetak string 

$pdf->Cell(190,7,'LAPORAN TOKO GEMILANG ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR BARANG TOKO',0,1,'C');
$pdf->SetFont('Arial','i',8);
$pdf->cell(0,3, 'Alamat : Jl.alam asri III,komp.GBI BLOK I9 kab.Bandung','0','1','C',false);
$pdf->Ln(5);
$pdf->cell(190,0.6,'','0','1','c',true);
$pdf->Ln(3);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,8,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(20,6,'KODE',1,0);
$pdf->Cell(20,6,'NAMA',1,0);
$pdf->Cell(20,6,'STOK',1,0);
$pdf->Cell(30,6,'HARGA',1,0);
$pdf->Cell(50,6,'TANGGAL MASUK',1,0);
$pdf->Cell(50,6,'TANGGAL KELUAR',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$barang = mysqli_query($connect, "select * from barang");
while ($row = mysqli_fetch_array($barang)){
    $pdf->Cell(20,5,$row['kode'],1,0);
    $pdf->Cell(20,5,$row['nama'],1,0);
    $pdf->Cell(20,5,$row['stok'],1,0);
    $pdf->Cell(30,5,$row['harga'],1,0);
    $pdf->Cell(50,5,$row['tanggal_masuk'],1,0); 
    $pdf->Cell(50,5,$row['tanggal_keluar'],1,1); 
}

$pdf->Output();
?>