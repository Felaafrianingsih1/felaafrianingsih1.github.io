<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <div class="indexphp"></div>
    
    <h2>Silahkan Mengisi dengan benar</h2>
    <form method="POST" action="Hasil.php">
        <table >
            <Tr>
                <Td>No antrian</Td>
                <td><input type="number" name="no" ></td>
            </Tr>
            <Tr>
                <Td>Nama</Td>
                <td><input type="text" name="nama" ></td>
            </Tr>
            <Tr>
                <Td>No Hp</Td>
                <td><input type="text" name="hp" ></td>
            </Tr>
            <Tr>
                <Td>Tanggal lahir</Td>
                <td><input type="date" name="tgl" ></td>
            </Tr>
            <Tr>
                <Td>Jenis kelamin</Td>
                <td><input type="radio" name="jk" value="laki-laki">laki-laki</td>
                <td><input type="radio" name="jk" value="perempuan">perempuan</td>
            </Tr>
            <Tr>
                <Td>Tujuan</Td>
                <td><select  name="tujuan" id="" >
                <option value="china">china</option>
                <option value="Thailand">Thailand</option>
                <option value="korea selatan">korea selatan</option>
            </select></td>
            </Tr>

        </table>
        <br>
        <button type="submit" name="submit" value="submit">kirim</button>
    </form>
</body>
</html>