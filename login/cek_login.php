<?php
session_start();


include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 if($data['level']=="1"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "1";
  header("location:welcome-provinsi.php");


 }else if($data['level']=="2"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "2";
  header("location:welcomekabkot.php");

}else if($data['level']=="3"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "3";
    header("location:welcome-ortu.php");

  }else if($data['level']=="4"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "4";
    header("location:welcome-murid.php");

 }else{

  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>