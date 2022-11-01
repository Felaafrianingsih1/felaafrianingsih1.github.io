
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XFOT</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="stylecrud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li>booking</li>
                <li><a href="landingpage.html">Kembali</a></li>
            </ul>
        </nav>
    </header>

   <section>
   <br><br><br><br>
       <div class="wrapper">
           <h2>Ubah  pesanan</h2>
           <?php
           include 'connection.php';
           $id = $_GET['id'];
           $query_mysql = mysqli_query($connection, "SELECT * FROM booking WHERE id='$id'");
           $nomor = 1;
           while($data = mysqli_fetch_array($query_mysql)){
           ?>
            <form action="update.php" method="POST">
                <tr>
                    <td width="120"> NO </td>
                    <td> <input type="text" name="id" value="<?php echo $data['id'] ?>"></td>
                </tr>
                <br>
                <tr>
                    <td> Tujuan </td>
                    <td> <input type="text" name="Tujuan" value="<?php echo $data['Tujuan'] ?>"> </td>
                </tr>
                <br>
                <tr>
                    <td> Harga </td>
                    <td> <input type="text" name="Harga" value="<?php echo $data['Harga'] ?>"> </td>
                </tr>
                <br>
                <tr>
                    <td> Paket </td>
                    <td> <input type="text" name="Paket" value="<?php echo $data['Paket'] ?>"> </td>
                </tr>
                <br>
                <br>
                    <td><input type="submit" name="proses" value="ubah"> </td>
                </tr>
            </form>
            <?php } ?>
       </div>
   </section>

 
</body>
</html>

