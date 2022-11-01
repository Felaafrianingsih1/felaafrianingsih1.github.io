<?php

include("connection.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES["gambar"]["tmp_name"];

    if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
        $result = mysqli_query($connection, "INSERT INTO gambar VALUES
        ('$gambar_baru')");
        if($result){
            echo "BERHASIL";
        } else{
            echo "GAGAL";
        }
    }
}