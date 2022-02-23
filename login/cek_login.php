<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
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

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>