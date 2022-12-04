<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include '../koneksi.php';
 
// menangkap data dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
 
// menginput data ke table barang
 
mysqli_query($con,"INSERT INTO barang VALUES ('$kode', '$nama', '$jumlah', '$harga')")or die(mysqli_error($con));
 
// mengalihkan halaman kembali ke index.php
header("location:../pesanan/haha.php");
?>