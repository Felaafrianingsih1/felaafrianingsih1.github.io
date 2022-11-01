<?php
    require 'koneksilogin.php';
    if (isset($_POST['reg'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirm_password'];
        $nama = $_POST['nama'];
        if($password === $cpassword){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "SELECT * FROM user where username= '$username'");
            if (mysqli_fetch_assoc($result)){
                echo"
                    <script>
                    alert ('USername telah digunakan');
                    </script>
                ";

            }else{
                $sql = "INSERT INTO user (`username`,`password`,`nama`) VALUES ('$username','$password','$nama')";
                $result = mysqli_query($conn, $sql);
                if(mysqli_affected_rows($conn) > 0){
                    echo"
                        <script>
                        alert ('BERHASIL REGISTRASI');
                        </script>
                    ";
                }else{
                    echo"
                        <script>
                        alert ('REGISTRASI GAGAL');
                        </script>
                    ";
                }
            }
        }else{
            echo"
            <script>
                alert('Password Berbeda');.document.location.href = 'reg.php';
            </script>
            ";
        }   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylecrud.css">
    <title>Registrasi</title>
</head>
<body>
<header>
        <div class="logo">
        <nav>
            <ul>
                <p>Tour & Travel</p>
                <li><a href="index.html">kembali</a></li>
            </ul>
        </nav>
    </header>

    <section>
   <br><br><br><br>
       <div class="wrapper">
    <h1>Registrasi</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="" class="inputan" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="" class="inputan" placeholder="Password" required></td>
            </tr>               
            <tr>
                <td><label for="confirm_password">Konfirmasi Password</label></td>
                <td><input type="password" name="confirm_password" id="" class="inputan" placeholder="Konfirmasi Password" required></td>
            </tr>               
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="" class="inputan" placeholder="Nama" required></td>
            </tr>      
            <tr>
                <td>
                    <button name="reg" type="submit">Registrasi</button>
                </td>
            </tr>         
                
        </table>
    </form>
</body>
</html>