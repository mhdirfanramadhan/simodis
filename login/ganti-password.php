
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
<body id="page-top">
<?php
 session_start();
 if($_SESSION['level']=="")
    echo "<script>document.location.href = 'http://localhost/simodis/login/index.php';</script>";
    
 include "../koneksi.php";
$username = $_SESSION['username'];
      $sql_ortu="select * from pengguna where username='". $_SESSION['username']."'";
      $sql_query=mysqli_query($koneksi,$sql_ortu);
      $row_ortu=mysqli_fetch_assoc($sql_query);
 ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="orang_tua.phporang_tua.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo-simodis.png">
        </div>
        <div class="sidebar-brand-text mx-3">Simodis</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="orang_tua.php">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="orang_tua.php" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fa-solid fa-school"></i>
          <span>SEKOLAH</span>
        </a>
      </li>

    
      <hr class="sidebar-divider">

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown no-arrow mx-1">
            
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="../assets/img/<?php echo $row_ortu['gambar']; ?>" class="img-profile rounded-circle" style="max-width: 60px">
                <?php echo $_SESSION['username']; ?></b></p>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile-dashboardOrtu.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Change Password</h4>
                                            <a href="profile-dashboardOrtu.php" class="btn2 third"> < Kembali</a>
                                            
                                            <form action=""  method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Password Lama</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="password" class="form-control" name="old_password" value='' placeholder="Masukkan password lama" style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Password Baru</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="password" class="form-control" name="new_password" value='' placeholder="Masukkan password baru" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                       
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Konfirmasi Password</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="password" class="form-control" name="confirm_password" value='' placeholder="Konfirmasi Password" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>  
                                    
                                                        
                                                        <br/>
                                                        <div class="col-sm-4 text-center" style="margin: auto;">
                                                            <input type="submit" name="change_pass" value="Simpan" class="btn btn-secondary btn-block" style="background-color: blue; border-color: #39B44a; height: 15%">
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
<?php
                                            if(isset($_POST['change_pass'])) {
                                                $oldPassword = $_POST['old_password'];
                                                $newPassword = $_POST['new_password'];
                                                $conPassword = $_POST['confirm_password'];
                                                if($oldPassword == $row_ortu['password']) {
                                                    if($newPassword == $conPassword) {
                                                        $sql_update_pass = "UPDATE `pengguna` SET `password`='".$newPassword."' WHERE username='".$row_ortu['username']."'";
                                                        if($query_update_pass = $koneksi->query($sql_update_pass))
                                                            echo '<script type="text/javascript">alert("Password Anda Telah Diganti!");window.location.href="profile-dashboardOrtu.php"</script>';
                                                        else
                                                            echo '<script type="text/javascript">alert("Password Anda Gagal Diganti!");</script>';
                                                    }
                                                    else
                                                    echo '<script type="text/javascript">alert("Password Tidak Sinkron!");</script>';
                                                }
                                                else 
                                                    echo '<script type="text/javascript">alert("Password Lama Anda Salah!");</script>';
                                            }
?>