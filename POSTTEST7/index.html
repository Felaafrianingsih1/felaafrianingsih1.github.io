<?php
    session_start();
    require 'koneksilogin.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user where username= '$username'");
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = $row;
                header("location:landingpage.html");
                exit;
            }
            else{
                $error_pass = true;
            }
       
        }else{
            $error_user = true;
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
    <title>Login</title> 

    <header>
        <div class="logo">
        <nav>
            <ul>
                <p>Tour & Travel</p>
                <!-- <li><a href="index.html">kembali</a></li> -->
            </ul>
        </nav>
    </header>

   <section>
   <br><br><br><br>
       <div class="wrapper">
           <h2>Login</h2>
            <form action="" method="post">
            <table>
            <tr><br>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="" class="inputan" placeholder="Masukan Username Anda" required></td>
            </tr>
    
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="" class="inputan" placeholder="Masukan Password Anda" required></td>
            </tr> 
                             
            <tr>
                <td>
                    <button name="login" type="submit">Registrasi</button>
                </td>
            </tr>     
               
            <Tr>    
                <td>
                     <a href="reg.php">Belum Punya akun</a>
                </td>
            </Tr>
        </table>
        <?php 
            if (isset($error_pass)){
                echo"<p>Password Salah</p>";
            } 
            else if(isset($error_user)){
                echo"<p>Username Salah</p>";
            } 
        ?>
    </form>

       



 
 

     
</body>
</html>