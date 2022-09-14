<!DOCTYPE html>
<html>
<head>
<title>Hasil Login</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <?php
    $nama=$_POST["username"];
    $email=$_POST["email"];
    ?>
    <form acton="tampil.php" method="POST">
      <h2>Selamat Anda Berhasil Login</h2>
      <div class="imgcontainer">
        <img src="icon.png" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label><b>Username:<?php echo $nama;?> </b></label><br><br>
        <label><b>Password:<?php echo $email;?> </b></label></div>
      
      <div class="container" style="background-color:#f1f1f1">
      </div>
    </form>
    </body>
</html>
