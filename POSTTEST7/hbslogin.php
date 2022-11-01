<?php 
session_start();
require('koneksilogin.php');
if(!isset($_SESSION['login'])){
    echo"<script>window.location='login.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1
        {
            text-align: center;
            padding-top: 30vh;
            font-size: 100px;
        }
    </style>
</head>
<body>
    <h1>
        SELAMAT DATANG <br><?php echo $_SESSION['login']['username'];?>
    </h1>
</body>
</html>