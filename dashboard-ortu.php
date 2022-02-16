<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo-simodis.png">
    <link rel="icon" type="image/png" href="assets/img/logo-simodis.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>SIMODIS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <img src="assets/img/logo-simodis.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Orang Tua Siswa</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa-solid fa-house"></i>  Beranda</a>
    <a href="identitas-sekolah.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-school"></i>  Identitas Sekolah</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-diagram-predecessor"></i>  Absensi Siswa</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-money-bill"></i>  SPP Sekolah</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-pager"></i>  Nilai Evaluasi</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Dashboard Monitoring Orang Tua</b></h5>
  </header>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-twothird">
        <h5>Mata Pelajaran</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Matematika</td> 
          </tr>
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Bahasa Indonesia</td>
          </tr>
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Pendidikan Jasmani & Kesehatan</td>
          </tr>
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Bahasa Inggris</td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Pendidikan Pancasila Dan Kewarganegaraan</td>
          </tr>
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Pendidikan Agama Islam</td>
          </tr>
          <tr>
          <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Kewirausahaan</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Keaktifan Anak</h5>
    <p>Kehadiran</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>Kegiatan Ekstrakulikuler</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Kegiatan Pramuka</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">PT Laras Adhi Praya</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
