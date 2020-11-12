<?php
session_start();
include ("koneksi.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ilham Ramadhan - Home</title>
  <link rel="stylesheet" href="views/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================Header Menu Area =================-->
  
  <div class="center">
              
  <div><a href="login_admin.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login Admin</button></a>
    </div>
      <br>&nbsp;<br>
    <div><a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">Login Karyawan</button></a>
  </div>
</div>
</body>
</html>