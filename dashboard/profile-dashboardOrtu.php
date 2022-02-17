<!doctype html>
<html lang="en">
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo-simodis.png">
    <link rel="icon" type="image/png" href="img/logo-simodis.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>SIMODIS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SIMODIS</title>
    <style>
      html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
      body {
        background-color: #e8e8e8;
        background-position: absolute;    
        background-size: cover;          
        margin:0;
      }

      h3 {
          text-align: center;
      }
      
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
           background-color: #D9860A;
    border: solid 8px #B04E03;
      } 
      .kartu:hover {
        background-color: #DF9D3B;
        border: solid 10px #FE6F01;
        border-top-left-radius: 80px;
    border-bottom-right-radius: 80px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
      }
      .foto {
            padding: 50px;
    margin-left: 1px;
    margin-top: 10px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
    color:white;
}
.biodata {
    margin-top: 10px;
}

.btn2 {
    margin: 10px;
    border-radius: 0.6em;
    color: #e74c3c;
    font-size: 1rem;
    font-weight: 400;
    padding: 1.2em 2.8em;
    text-decoration: none;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
  }

.third {
    color: #fff;
    box-shadow: 0 0 40px 40px #e8900c inset, 0 0 0 0 #daa70b;
    transition: all 10ms ease-in-out;
  }

  .third:hover {
    box-shadow: 0 0 10px 0 #fe9718 inset, 0 0 10px 4px #f7a643;
  }
    </style>
  </head>
  <body>
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Simodis APP</span>
</div>

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/logo-simodis.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Orang Tua Siswa</strong></span><br>
      <a href="profile-dashboardOrtu.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
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
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-diagram-predecessor"></i>  Absensi Siswa</a>
    <a href="spp-sekolah/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-money-bill"></i>  SPP Sekolah</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-pager"></i>  Nilai Evaluasi</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <h3 class="text-center text-success mt-3">Profil Akun</h3></a>  
        <a href="edit-profile.php" class="btn2 third">Edit Profil</a>           
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <center><div class="foto">
        <img src="img/madara.jpg" class="img-thumbnail" alt="" width="400" height="180">
      </div></center>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
              <p> Hallo! , Admin</p>
            <tr>
              <td width="25%" valign="top" class="textt" style="font-family: Cambria;">Username</td>
                <td width="2%">:</td>
                <td style="color: #e9a7f9; font-weight:bold" >admin</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Password</td>
                <td>:</td>
                <td style="font-family: Courier New;">*******</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Nama</td>
                <td>:</td>
                <td style="font-family: Courier New;">M Irfan Ramadhan</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">NPSN</td>
                <td>:</td>
                <td style="font-family: Courier New;">102388279</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Tempat Lahir</td>
                <td>:</td>
                <td style="font-family: Courier New;">Rantau</td>
            </tr>
          <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Tanggal Lahir</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">11/10/2005</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Jenis Kelamin</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Pria</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Alamat</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Sumatera Utara , Medan , Tj. Mulia Hilir Kawat 6 , NO 40</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Agama</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Islam</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Email</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;" >akunml12ku@gmail.com</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Telephone</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">smktritech@sch.id</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kepegawaian</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">NON PNS</td>
            </tr>
            
        </tbody></table>
        </td>
        
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>