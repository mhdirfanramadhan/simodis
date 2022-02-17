
<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi Simodis</title>
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
	<link rel="stylesheet" href="assets/css/registrasi.css">
</head>
<body>
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
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Register</h4>
                                            <form action="login.php"  method="post">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Username</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="username" placeholder="Username" style="background-color: #F39C12; border-radius: 15px" requried>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Password</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="password" class="form-control" name="password" placeholder="Password" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Nama Lengkap</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">NPSN</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="npsn"  placeholder="NPSN Lengkap Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Tempat Lahir </label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Tanggal Lahir</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Jenis Kelamin</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="radio" name="id_jk" value="1" required><label style="color:black; padding:4px">Pria</label></input>
                                                                <input type="radio" name="id_jk" value="2" required><label style="color:black; padding:4px">Wanita</label></input>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="alamat" placeholder="Silahkan Isi Alamat Lengkap Anda" style="background-color: #F39C12; border-radius: 15px required">
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Agama</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="id_agama" style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <option value="" required>Silahkan dipilih</option> 
                                                                                                                                                                                                                            <option value="1">Islam</option> 
                                                                                                                                                    <option value="2">Kristen Protestan</option> 
                                                                                                                                                    <option value="3">Kristen Katolik</option> 
                                                                                                                                                    <option value="4">Hindu</option> 
                                                                                                                                                    <option value="5">Buddha</option> 
                                                                                                                                                    <option value="6">Konghucu</option> 
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Email</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">No Handphone</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="tel" class="form-control" name="no_hp" placeholder="Masukkan No Handphone Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Status Kepegawaian</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="status_kepegawaian" style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <option>Pilih Status Kepegawaian</option>
                                                                    <option value="PNS">PNS</option>
                                                                    <option value="Non PNS">Non PNS</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 mt-2">
                                                             <input type="file" name="gambar" id="image" onchange="showImage(this);" class="custom-file-input" required>
                                                             <label class="custom-file-label">Upload Foto Diri</label>
                                                            </div>
                                                        </div> 
                                    
                                                        <div class="new-account mt-3">
                                                            <p style="color:black;">Already Have an Account?  <a style="color:black;" class="text-primary" href="login.php" >Sign in</a></p>
                                                        </div>
                                                        <br/>
                                                        <div class="col-sm-4 text-center" style="margin: auto;">
                                                            <input type="submit" name="daftar" id="daftar" value="Daftar" class="btn btn-secondary btn-block" style="background-color: blue; border-color: #39B44a; height: 15%">
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