
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
 <?php 
            $sql_sekolah="select * from sekolah";
            $query_sekolah=mysqli_query($koneksi, $sql_sekolah);
            $row_sekolah=mysqli_fetch_assoc($query_sekolah);
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
                                            <h4 class="text-center mb-4" style="margin-top:-50px";>Edit Data Sekolah</h4>
                                            <a href="sekolah.php?sekolah" class="btn2 third"> < Kembali</a> 
                                            <form action=""  method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">NSS</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nss" value='<?php echo $row_sekolah["nss"]; ?>' style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Nama Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nama_sekolah" value='<?php echo $row_sekolah["nama_sekolah"]; ?>' placeholder="Isi Nama Sekolah" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="alamat" value='<?php echo $row_sekolah["alamat"]; ?>'placeholder="Isi alamat sekolah" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Kecamatan</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="kecamatan" value='<?php echo $row_sekolah["kecamatan"]; ?>'style="background-color: #F39C12; border-radius: 15px" required>

                                                                    <?php
                                                                      $sql_camat = "SELECT * FROM kecamatan";
                                                                      $query_camat = mysqli_query($koneksi, $sql_camat);
                                                                      $i = 1;
                                                                      while($row_camat = mysqli_fetch_assoc($query_camat)) { ?>
                                                                        <option value="<?php echo $i; ?>" <?php if($row_sekolah['kecamatan']==$i) echo "selected"; ?>><?php echo $row_camat['nama_kecamatan']; ?></option>
                                                                        <?php $i++;
                                                                      }
                                                                    ?>
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Kelurahan</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="kelurahan" value='<?php echo $row_sekolah["kelurahan"]; ?>'style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <?php
                                                                      $sql_lurah = "SELECT * FROM kelurahan";
                                                                      $query_lurah = mysqli_query($koneksi, $sql_lurah);
                                                                      $i = 1;
                                                                      while($row_lurah = mysqli_fetch_assoc($query_lurah)) { ?>
                                                                        <option value="<?php echo $i; ?>" <?php if($row_sekolah['kelurahan']==$i) echo "selected"; ?>><?php echo $row_lurah['nama_kelurahan']; ?></option>
                                                                        <?php $i++;
                                                                      }
                                                                    ?>
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Kabupaten</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="kabupaten" value='<?php echo $row_sekolah["kabupaten"]; ?>'style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <?php
                                                                      $sql_kab = "SELECT * FROM kabupaten";
                                                                      $query_kab = mysqli_query($koneksi, $sql_kab);
                                                                      $i = 1;
                                                                      while($row_kab = mysqli_fetch_assoc($query_kab)) { ?>
                                                                        <option value="<?php echo $i; ?>" <?php if($row_sekolah['kabupaten']==$i) echo "selected"; ?>><?php echo $row_kab['nama_kabupaten']; ?></option>
                                                                        <?php $i++;
                                                                      }
                                                                    ?>
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Provinsi</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select id="inputState" class="form-control" name="provinsi" value='<?php echo $row_sekolah["provinsi"]; ?>'style="background-color: #F39C12; border-radius: 15px" required>
                                                                    <?php
                                                                      $sql_prov = "SELECT * FROM provinsi";
                                                                      $query_prov = mysqli_query($koneksi, $sql_prov);
                                                                      $i = 1;
                                                                      while($row_prov = mysqli_fetch_assoc($query_prov)) { ?>
                                                                        <option value="<?php echo $i; ?>" <?php if($row_sekolah['provinsi']==$i) echo "selected"; ?>><?php echo $row_prov['nama_provinsi']; ?></option>
                                                                        <?php $i++;
                                                                      }
                                                                    ?>
                                                                          
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Kode Pos</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kode_pos" value='<?php echo $row_sekolah["kode_pos"]; ?>' style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Telephone</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="telephone" value='<?php echo $row_sekolah["telephone"]; ?>' style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Email</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="email" value='<?php echo $row_sekolah["email"]; ?>' style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">Kepala Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kepala_sekolah" value='<?php echo $row_sekolah["kepala_sekolah"]; ?>' style="background-color: #F39C12; border-radius: 15px">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-2" style="margin: 1px; margin-left: 10px;">
                                                            <input type="hidden" name="gambarLama" value="../assets/img/<?php echo $row_sekolah['gambar']; ?>" class="custom-file-input">
                                                             <input type="file" name="gambar" class="custom-file-input">
                                                             <label class="custom-file-label">Foto Profile</label>
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
          $nss=$_FILES['gambar']['name'];
          $ext = explode('.', $nss);

          $nss=$username.".".$ext[sizeof($ext)-1];
          $temp=$_FILES['gambar']['tmp_name'];
          if (move_uploaded_file($temp,'../assets/img/'.$nss)){
              return $nss;
          }
          else
            return "404";
      }
      $gambar = fail($_GET['username']);
      if($gambar == "404") $gambar = $_POST['gambarLama']; //gambar lama
      $nss = $_POST["nss"];
      $nama_sekolah = $_POST["nama_sekolah"];
      $alamat = $_POST["alamat"];
      $kecamatan = $_POST["kecamatan"];
      $kelurahan = $_POST["kelurahan"];
      $kabupaten = $_POST["kabupaten"];
      $provinsi = $_POST["provinsi"];
      $kode_pos = $_POST["kode_pos"];
      $telephone = $_POST["telephone"];
      $email = $_POST["email"];
      $kepala_sekolah = $_POST["kepala_sekolah"];
      $sql_update="UPDATE `sekolah` SET `gambar`='$gambar',`nss`='$nss',`nama_sekolah`='$nama_sekolah',`alamat`='$alamat',`kecamatan`='$kecamatan',`kelurahan`='$kelurahan',`kabupaten`='$kabupaten',`provinsi`='$provinsi',`kode_pos`='$kode_pos',`telephone`='$telephone',`email`='$email',`kepala_sekolah`='$kepala_sekolah' WHERE 1";
      
      if (mysqli_query($koneksi, $sql_update))
      echo "<script> alert('Profil Berhasil diperbarui');window.location.href='sekolah.php'</script>";
      else
      echo "<script> alert('Profil Gagal Diperbarui');window.location.href='sekolah.php'</script>";
      }
?>