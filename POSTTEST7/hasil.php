<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleoutput.css">
    <title>Hasil</title>
</head>
<body>
    <div class="hasil">
        <table>
                <tr>
                    <h3>Tampilan data yang telah anda isi</h3>
                    <td>No antrian</td>
                    <td>:</td>
                    <td> <?php echo $_POST['no'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td> <?php echo $_POST['nama'] ?></td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td>:</td>
                    <td> <?php echo $_POST['hp'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td> <?php echo $_POST['tgl'] ?></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td> <?php echo $_POST['jk'] ?></td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td> <?php echo $_POST['tujuan'] ?></td>
                </tr>
        </table>
        </div>
</body>
</html>