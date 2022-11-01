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
                <li><a href="landingpage.html">kembali</a></li>
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
                    <!-- <th>NO</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Paket</th>
                    <th>Gambar</th>
                    <th>Aksi</th> -->
                    <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                                <tr>
                                <th>NO</th>
                                <th>Tujuan</th>
                                <th>Harga</th>
                                <th>Paket</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                                </tr>
                                <!-- mencari data -->
                                <?php 
                                    $con = mysqli_connect("localhost","root","","db_travel");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM booking WHERE CONCAT(tujuan) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['Tujuan']; ?></td>
                                                    <td><?= $items['Harga']; ?></td>
                                                    <td><?= $items['Paket']; ?></td>
                                                    <td><?= $items['gambar']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <?php
                                        }
                                        
                                    }
                                ?>
                                
        
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
                            <td><?php echo $d['gambar']; ?></td>
                            
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

