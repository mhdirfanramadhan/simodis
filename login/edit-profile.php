
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
      $username=$_GET['username'];
      include '../koneksi.php';

      $sql_ortu="select * from pengguna where username='$username'";
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
                <span class="ml-2 d-none d-lg-inline text-white small">User</span>
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
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Edit Profile</h4>
                                            <a href="profile-dashboardOrtu.php" class="btn2 third"> < Kembali</a> 
                                            <form action=""  method="post" enctype="multipart/form-data">
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
                                                                <input type="text" class="form-control" name="username" value='<?php echo $row_ortu["username"]; ?>' placeholder="Username" style="background-color: #F39C12; border-radius: 15px" readonly>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Nama</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nama" value='<?php echo $row_ortu["nama"]; ?>' placeholder="Nama Lengkap Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">NPSN</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="npsn" value='<?php echo $row_ortu["npsn"]; ?>'placeholder="NPSN Lengkap Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Tempat Lahir </label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="tempat_lahir" value='<?php echo $row_ortu["tempat_lahir"]; ?>' placeholder="Masukkan tempat lahir Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Tanggal Lahir</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="date" class="form-control" name="tanggal_lahir" value='<?php echo $row_ortu["tanggal_lahir"]; ?>' placeholder="Masukkan Tanggal Lahir Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Jenis Kelamin</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="radio" name="jenis_kelamin" value="1" <?php if($row_ortu['jenis_kelamin']=="1") echo "checked"; ?>><label style="color:black; padding:4px">Pria</label></input>
                                                                <input type="radio" name="jenis_kelamin" value="2" <?php if($row_ortu['jenis_kelamin']=="2") echo "checked"; ?>><label style="color:black; padding:4px">Wanita</label></input>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="alamat" value='<?php echo $row_ortu["alamat"]; ?>'placeholder="Silahkan Isi Alamat Lengkap Anda" style="background-color: #F39C12; border-radius: 15px required">
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Agama</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="agama" value='<?php echo $row_ortu["agama"]; ?>'style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <option value="" required>Silahkan dipilih</option>
                                                                    <?php
                                                                      $sql_agama = "SELECT * FROM agama";
                                                                      $query_agama = mysqli_query($koneksi, $sql_agama);
                                                                      $i = 1;
                                                                      while($row_agama = mysqli_fetch_assoc($query_agama)) { ?>
                                                                        <option value="<?php echo $i; ?>" <?php if($row_ortu['agama']==$i) echo "selected"; ?>><?php echo $row_agama['nama_agama']; ?></option>
                                                                        <?php $i++;
                                                                      }
                                                                    ?>
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Email</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="email" class="form-control" name="email" value='<?php echo $row_ortu["email"]; ?>'placeholder="Masukkan email Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">No Handphone</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="tel" class="form-control" name="telephone" value='<?php echo $row_ortu["telephone"]; ?>'placeholder="Masukkan No Handphone Anda" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Status Kepegawaian</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="kepegawaian" style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <option>Pilih Status Kepegawaian</option>
                                                                    <option value="1" <?php if($row_ortu['kepegawaian']=="1") echo "selected"; ?>>PNS</option>
                                                                    <option value="2" <?php if($row_ortu['kepegawaian']=="2") echo "selected"; ?>>Non PNS</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 mt-2" style="margin: 1px; margin-left: 10px;">
                                                            <input type="hidden" name="gambarLama" value="<?php echo $row_ortu['gambar']; ?>" class="custom-file-input">
                                                             <input type="file" name="gambar" class="custom-file-input">
                                                             <label class="custom-file-label">Foto Profile</label>
                                                            </div>
                                                        </div> 
                                    
                                                        
                                                        <br/>
                                                        <div class="col-sm-4 text-center" style="margin: auto;">
                                                            <input type="submit" name="daftar" value="Update" class="btn btn-secondary btn-block" style="background-color: blue; border-color: #39B44a; height: 15%">
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
      if (isset($_POST['daftar'])){
        function fail($username){
          $nama=$_FILES['gambar']['name'];
          $ext = explode('.', $nama);

          $nama=$username.".".$ext[sizeof($ext)-1];
          $temp=$_FILES['gambar']['tmp_name'];
          if (move_uploaded_file($temp,'../assets/img/'.$nama)){
              return $nama;
          }
          else
            return "404";
      }
      // $password = $_POST["password"];
      $nama = $_POST["nama"];
      $npsn = $_POST["npsn"];
      $tempat_lahir = $_POST["tempat_lahir"];
      $tanggal_lahir = $_POST["tanggal_lahir"];
      $jenis_kelamin = $_POST["jenis_kelamin"];
      $alamat = $_POST["alamat"];
      $agama = $_POST["agama"];
      $email = $_POST["email"];
      $telephone = $_POST["telephone"];
      $kepegawaian = $_POST["kepegawaian"];
      $gambar = fail($_GET['username']);
      if($gambar == "404") $gambar = $_POST['gambarLama']; //gambar lama
      //$level = $_POST["level"];
      $sql_update="UPDATE `pengguna` SET `nama`='$nama',`npsn`='$npsn',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`jenis_kelamin`='$jenis_kelamin',`alamat`='$alamat',`agama`='$agama',`email`='$email',`telephone`='$telephone',`kepegawaian`='$kepegawaian',`gambar`='$gambar' WHERE username='$username'";
      
      if (mysqli_query($koneksi, $sql_update))
      echo "<script> alert('Profil Berhasil diperbarui');window.location.href='profile-dashboardOrtu.php'</script>";
      else
      echo "<script> alert('Profil Gagal Diperbarui');window.location.href='profile-dashboardOrtu.php'</script>";
      }
?>