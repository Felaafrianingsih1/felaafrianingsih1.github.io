<?php 
include 'connecting.php';
$tujuan = $_POST['tujuan'];
$harga = $_POST['harga'];
$paket = $_POST['paket'];


mysqli_query($connection,"INSERT INTO booking VALUES('','$tujuan','$harga','$paket')");     
   
header("location:dashboard.php");

?>