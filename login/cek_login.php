<?php
session_start();


include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 if($data['level']=="admin_dinProv"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin_dinProv";
  header("location:dinas_provinsi.php");


 }else if($data['level']=="dinas_kabKota"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "dinas_kabKota";
  header("location:dinas_kab_kota.php");

}else if($data['level']=="ortu"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "ortu";
    header("location:orang_tua.php");

 }else{

  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>