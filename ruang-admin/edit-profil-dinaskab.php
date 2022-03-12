
<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="en">
<style>
html,body,h1,h2,h3,h4,h5 {}
</style>  
<head>
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo-simodis.png" rel="icon">
  <title>Simodis - Edit</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

	
</head>
<style>
    .btn2 {
    margin: -140px;
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
<body>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard-dinasprov.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo-simodis.png">
        </div>
        <div class="sidebar-brand-text mx-3">Simodis</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="dashboard-dinaskabkota.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa-solid fa-list-ul"></i>
          <span>Jlh sekolah(KotaMedan)</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="sklhsmakab.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="sklhsmpkab.html">SMP/Sederajat</a>
            <a class="collapse-item" href="sklhsdkab.html">SD/Sederajat</a>
            <a class="collapse-item" href="sklhtkkab.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fa-solid fa-list-ul"></i>
          <span>Jlh Siswa(KotaMedan)</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="siswasmakab.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="siswasmpkab.html">SMP/Sederajat</a>
            <a class="collapse-item" href="siswasdkab.html">SD/Sederajat</a>
            <a class="collapse-item" href="siswatkkab.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fa-solid fa-list-ul"></i>
          <span>Jlh Guru(KotaMedan)</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="gurusmakab.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="gurusmpkab.html">SMP/Sederajat</a>
            <a class="collapse-item" href="gurusdkab.html">SD/Sederajat</a>
            <a class="collapse-item" href="gurutkkab.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="importkab.php">
          <i class="fa-solid fa-file-import"></i>
          <span>Import</span></a>
      </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Apa yang anda cari?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            <li class="nav-item dropdown no-arrow mx-1">
            
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admindinaskab</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="" href="">
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">:(</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Anda Yakin ingin logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="http://localhost/simodis/" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
        <!-- Topbar -->
  

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
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Edit Profile</h4>
                                            <a href="profil-dashboarddinaskab.php" class="btn2 third"> < Kembali</a> 
                                            <form action="profil-dashboarddinas.php"  method="post">
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
                                                            <label style="color:grey; padding:8px">Nama</label>
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
                                                            <div class="col-lg-12 mt-2" style="margin: 1px; margin-left: 10px;">
                                                             <input type="file" name="gambar" id="image" onchange="showImage(this);" class="custom-file-input" required>
                                                             <label class="custom-file-label">Foto Profile</label>
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
    <!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</body>
</html>