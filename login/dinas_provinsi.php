<!DOCTYPE html>
<html>
<head>
 <title>Simods - Admin Dinas Provinsi</title>
</head>
<body>
   <script>
     alert('Selamat Datang, Anda Login Sebagai ADMIN');
   </script>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
    echo "<script> 
    alert('Silahkan Login Dahulu');
    document.location.href = 'http://localhost/simodis/login/index.php';
</script>
";
 }

 ?>
 <h1>Dashboard Dinas Provinsi</h1>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>