<!DOCTYPE html>
<html>
<head>
 <title>Halaman Pimpinan</title>
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Dashboard Dinas Kabupaten / kota</h1>


 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>