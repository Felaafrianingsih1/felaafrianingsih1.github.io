<?php 
include 'connection.php';
$id    = $_POST['id'];
$Tujuan = $_POST['Tujuan'];
$Harga = $_POST['Harga'];
$Paket = $_POST['Paket'] ;
mysqli_query($connection, "UPDATE booking SET Tujuan='$Tujuan', Harga='$Harga', Paket='$Paket' WHERE id='$id'");
header("location:dashboard.php");
 
?>