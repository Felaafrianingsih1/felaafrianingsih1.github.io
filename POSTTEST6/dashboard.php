<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XFOT</title>
    <link rel="stylesheet" href="stylecrud.css">
   
  
</head>
<body>
    <header>
        <div class="logo">
        <nav>
            <ul>
                <p> 
                <li><a href="index.html">kembali</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <br><br><br><br>
        <div class="content">
            <h2>DATA Tour Baru</h2>
            <button class="btn"><a href="tambah1.php" class="btn">Tambah</a></button><br><br>
            <table class="table">
                <thead>
                    <th>NO</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Paket</th>
                    <th>Aksi</th>
                    
            
                </thead>
                <tbody>
                    <?php 
                    include 'connection.php';
                    $no = 1;
                    $data = mysqli_query($connection, "SELECT * FROM booking");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['Tujuan']; ?></td>
                            <td><?php echo $d['Harga']; ?></td>
                            <td><?php echo $d['Paket']; ?></td>
                            
                            <td>
                                <button class="edit"><a href="edit.php?id=<?php echo $d['id']; ?>" class="edit">Ubah</a></button>
                                <button class="hapus"><a href="hapus.php?id=<?php echo $d['id']; ?>" class="hapus">Hapus</a></button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        
    </footer>
</body>
</html>

