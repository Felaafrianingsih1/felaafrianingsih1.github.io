<!DOCTYPE html>
<html lang="en">
<head>
<title>Tour & Travel Xfot</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylecrud.css">
	<style src="app.js" defer ></style>
	<style></style>

</head>
<body> 
    <header>
        <div class="logo">
        <nav>
            <ul>
                <p>Tour & Travel</p>
                <li><a href="dashboard.php">kembali</a></li>
            </ul>
        </nav>
    </header>

   <section>
   <br><br><br><br>
       <div class="wrapper">
           <h2>Tambah Data Tour </h2>
            <form action="" method="post">
            <table>
                <?php
                    date_default_timezone_set("Asia/Seoul");
                    echo "hari ini adalah : " . date("y/m/d 1")  . "<br>";
                    echo " jam hari ini adalah : " . date("h:i:sa") ."<br>";

                    $d=strtotime("tomorrow");
                    echo date("Y-m-d h:i:sa", $d). "<br>";

                    $d=strtotime("next saturday");
                    echo date("Y-m-d h:i:sa", $d). "<br>";

                    $d=strtotime("+3 months");
                    echo date("Y-m-d h:i:sa", $d). "<br>";

                ?>
                <tr>
                    <td width="120"> NO </td>
                    <td> <input type="text" name="id"> </td>
                </tr>
                <tr>
                    <td> Tujuan  </td>
                    <td> <input type="text" name="Tujuan"> </td>
                </tr>
                <tr>
                    <td> Harga </td>
                    <td> <input type="text" name="Harga"> </td>
                </tr>
                <tr>
                <tr>
                    <td> Paket </td>
                    <td> <input type="text" name="Paket"> </td>
                </tr>
                <tr>                  
                   <!-- <td> <form action="uploud.php" method="post" enctype="multipart/form-data"> -->
                    <td>Gambar</td>                       
                    <td> <input type="file" name="gambar" include></td></form></td>
                </tr>
                    <td></td>
                    <td><input type="submit" name="proses" value="Simpan"> </td>
                </tr>
                <!-- <a href="time.php"> pindah ke uploud gambar</a>  -->
            </table>

            </form>
            
            <?php
            include "connection.php";

            if(isset($_POST['proses'])){
                mysqli_query($connection, "insert into booking set  
                id    = '$_POST[id]',
                Tujuan = '$_POST[Tujuan]',
                Harga = '$_POST[Harga]',
                Paket = '$_POST[Paket]',
                gambar = '$_POST[gambar]'") ;

                echo "Data  baru telah tersimpan";

            }

            ?>
            

     <div class="footer">
       <!-- <p>Copyright  @2022 XFOT Tour & Travel</p> -->
    </div>
</body>
</html>

