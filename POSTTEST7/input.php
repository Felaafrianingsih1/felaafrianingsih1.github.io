<?php 
include 'connecting.php';
$tujuan = $_POST['tujuan'];
$harga = $_POST['harga'];
$paket = $_POST['paket'];
$gambar = $_POST['gambar'];


mysqli_query($connection,"INSERT INTO booking VALUES('','$tujuan','$harga','$paket','$gambar')");     
   
header("location:dashboard.php");

?>