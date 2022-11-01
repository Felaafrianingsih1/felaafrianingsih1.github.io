<?php

 $server = "localhost";
 $user = "root";
 $password = "";
 $db_name = "db_travel";

 $conn = mysqli_connect($server,$user,$password,$db_name);

 if (!$conn){
    die("Gagal terhubung : ".mysqli_connect_error());
 };

