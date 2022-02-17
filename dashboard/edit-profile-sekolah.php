
<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
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
<head>
	<meta charset="UTF-8">
	<title>Simodis APP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css2/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css2/owl.carousel.css">
	<link rel="stylesheet" href="css2/owl.theme.default.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css2/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/registrasi.css">
    <style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
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
      <a href="profile-dashboardOrtu.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
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
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa-solid fa-school"></i>  Identitas Sekolah</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-diagram-predecessor"></i>  Absensi Siswa</a>
    <a href="spp-sekolah/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-money-bill"></i>  SPP Sekolah</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-pager"></i>  Nilai Evaluasi</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div id="page-wrap">


        <div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s" align="center">
            <!-- <small>Drag and Drop</small> -->
            <div class="container fh5co-slider-inner">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="img/phone_dashboard_orangtua.png" alt=""></div>
                    <div class="item"><img src="img/phone_guru.png" alt=""></div>
                    <div class="item"><img src="img/phone_siswa.png" alt=""></div>
                    <div class="item"><img src="img/phone_hitam.png" alt=""></div>
                </div>
            </div>
        </div>

		<div class="curved-bg-div wow animated fadeIn" > </div>
            <div class="authincation" >
                <div class="container-fluid">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-8">
                            <div class="authincation-content" style="background-color:transparent;">
                                <div class="row no-gutters">
                                    <div class="col-xl-12">
                                        <div class="auth-form">
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Edit Data Sekolah</h4>
                                            <form action="identitas-sekolah.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">NPSN</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="username" style="background-color: #ECE4E0; border-radius: 15px" requried>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">NSS</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="password" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Nama Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nama" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="npsn" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kelurahan </label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tempat_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kecamatan</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kabupaten</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Provinsi</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kode Pos</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Telephone</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Email</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="email" class="form-control" name="email" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Website</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tanggal_lahir" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Kepala Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="status_kepegawaian" style="background-color: #ECE4E0; border-radius: 15px" required>
                                                                    <option>Silahkan Dipilih</option>
                                                                    <option value="PNS">Nama Kepala Sekolah</option>
                                                                    <option value="Non PNS">Nama Kepala Sekolah</option>
                                                                </select>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-lg-4">
                                                        </div>
                                                        
                                                        <div class="col-lg-12 mt-2" style="margin: 1000px; margin-left: 52px;">
                                                             <input type="file" name="gambar" id="image" onchange="showImage(this);" class="custom-file-input" required>
                                                             <label class="custom-file-label">Upload Foto Sekolah</label>
                                                            </div>
                                                        </div> 
                                    
                                                       
                                                        <br/>
                                                        <div class="col-sm-4 text-center" style="margin: auto;">
                                                            <input type="submit" name="daftar" id="daftar" value="Edit" class="btn btn-secondary btn-block" style="background-color: blue; border-color: #39B44a; height: 15%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div> <!-- main page wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>