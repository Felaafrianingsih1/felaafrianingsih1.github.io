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
                <li><a href="index.html">kembali</a></li>
            </ul>
        </nav>
    </header>

   <section>
   <br><br><br><br>
       <div class="wrapper">
           <h2>Tambah Data Tour </h2>
           <br>

            <form action="input.php" method="POST">
                <div class="form-group">
                    <label for="">Tujuan</label>
                    <input type="text" name="tujuan">
                </div>
                <div class="form-group">
                    <label for="">Harga. </label>
                    <input type="text" name="harga">
                </div>
                <div class="form-group">
                    <label for="">Paket.</label>
                    <input type="text" name="paket">
                </div>
                <div class="form-group">
                    <label for="">Rating</label>
                    <input type="text" name="rating">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn">Tambah</button>
                </div>
            </form>
       </div>
   </section>

     <div class="footer">
       <!-- <p>Copyright  @2022 XFOT Tour & Travel</p> -->
    </div>
</body>
</html>

