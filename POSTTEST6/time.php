

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleoutput.css">
    <title>Uploud gambar</title>
</head>
<body>
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
<br>
<br>
    <h1> Uploud Gambar</h1>
    <form action="uploud.php" method="post" enctype="multipart/form-data">
        <label for="">Nama</label>
        <input type="text" name="nama" include> <br><br>

        <label for="">Gambar</label>
        <input type="file" name="gambar" include> <br><br>


        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
