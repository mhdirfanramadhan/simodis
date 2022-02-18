<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo-simodis.png">
    <link rel="icon" type="image/png" href="img/logo-simodis.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>SIMODIS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dashb.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Simodis APP</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/logo-simodis.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Orang Tua Siswa</strong></span><br>
      <a href="profile-dashboardOrtu.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      <a href="http://localhost/simodisApp-noDB/login.php" class="w3-bar-item w3-button"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="dashboard-ortu.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-house"></i>  Beranda</a>
    <a href="identitas-sekolah.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-school"></i>  Identitas Sekolah</a>
    <a href="absensi.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-diagram-predecessor"></i>  Absensi Siswa</a>
    <a href="spp-sekolah/datasiswa.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-money-bill"></i>  SPP Sekolah</a>
    <a href="nilai-evaluasi.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-pager"></i>  Nilai Evaluasi</a>
    <a href="menu-news.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="menu-settings.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">