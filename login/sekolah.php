<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo-simodis.png" rel="icon">
  <title>Simodis - Sekolah</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
    <style>
      html,body,h1,h2,h3,h4,h5 {}
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
        margin-top: 30px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
           background-color: #D9860A;
    border: solid 8px #B04E03;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    
      } 
      .kartu:hover {
        background-color: #DF9D3B;
        border: solid 10px #FE6F01;
        border-top-left-radius: 30px;
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
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
    margin: 30px;
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
  .button{
    width: 100%;
    height: 70px;
  }
  .button2{
    width: 100%;
    height: 70px;
  }
  .left{
    float: left;
    display: block;
    margin: 40px;
    
  }
  .right{
    float: right;
    display: block;
    margin: 35px;
  }
  .right2{
    position: absolute;
width: 500px;
left: 650px;
top: 215px;
  }
.button ul a{
  padding: 10px;
  background: rgb(235, 143, 6);
  color: rgb(0, 0, 0);
}
.btn2 {
  position: absolute;
width: 412px;
height: 51px;
left: 545px;
top: 760px;

background: rgba(25, 73, 243, 0.95);
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}
.fourth {
  border-color: #f1c40f;
  color: rgb(0, 0, 0);
  background-image: linear-gradient(45deg, #f1c40f 50%, transparent 50%);
  background-position: 100%;
  background-size: 400%;
  transition: background 300ms ease-in-out;
}
.fourth:hover {
  background-position: 0;
}
    </style>
    <body class="w3-light-grey">
  </head>

  <body id="page-top">
  <?php
 session_start();
 if($_SESSION['level']=="")
    echo "<script>document.location.href = 'http://localhost/simodis/login/index.php';</script>";
    
 include "../koneksi.php";
$username = $_SESSION['username'];
$sql_pengguna ="select * from pengguna where username='". $_SESSION['username']."'";
$query_pengguna=mysqli_query($koneksi, $sql_pengguna);
$row_pengguna=mysqli_fetch_assoc($query_pengguna);
$username = $row_pengguna['username'];
 ?>
 <?php 
            $sql_sekolah="select * from sekolah";
            $query_sekolah=mysqli_query($koneksi, $sql_sekolah);
            $row_sekolah=mysqli_fetch_assoc($query_sekolah);
?>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="orang_tua.php">
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
      
        <li class="nav-item active">
          <a class="nav-link collapsed" href="orang_tua.php" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fa-solid fa-school"></i>
            <span>SEKOLAH</span>
          </a>
        </li>
  
      
        <hr class="sidebar-divider">
  
      </ul>
      <?php 
            $sql_ortu="select * from pengguna where username='". $_SESSION['username']."'";
            $query_ortu=mysqli_query($koneksi, $sql_ortu);
            $row_ortu=mysqli_fetch_assoc($query_ortu);
        ?>
        
    <!-- Sidebar -->
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
            </div>
          </ul>
        </nav>

        <!-- Modal Logout -->
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
        <table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>
        <a href="edit-profile-sekolah.php">Edit Profil Sekolah</a>
        <table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>
        <h3 class="text-center text-success mt-3">Informasi Sekolah</h3></a>
        

        <div class="button">
            <ul class="left" active>
              <a href="sekolah.php">Informasi Sekolah</a>
            </ul>
            
            <ul class="right">
              <a href="informasi-kelas.php">Informasi Kelas</a>
            </ul>
        </div>
        <div class="button">
            <ul class="right2">
                <a href="informasi-murid.php">Informasi Murid</a>
            </ul>
        </div>
        <table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>

         </table>
        <!-- DATA -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <center><div class="foto">
      <img src="../assets/img/<?php echo $row_sekolah['gambar']; ?>" class="img-thumbnail" alt="" width="500" height="180">
      </div></center>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
          
          <tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">NPSN</td>
                <td>:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['npsn'] ?></td>
            </tr>
          <tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">NSS</td>
                <td>:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['nss'] ?></td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Nama Sekolah</td>
                <td>:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['nama_sekolah'] ?></td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Alamat</td>
                <td>:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['alamat'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kecamatan</td>
                <td valign="top">:</td>
                <?php 
                $sql_camat='select * from kecamatan where id_kecamatan="'.$row_sekolah["kecamatan"].'"';
                $query_camat=mysqli_query($koneksi,$sql_camat);
                $row_camat=mysqli_fetch_assoc($query_camat);
                ?>
                <td style="font-family: Courier New;"><?php echo $row_camat['nama_kecamatan'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kelurahan</td>
                <td valign="top">:</td>
                <?php 
                $sql_lurah='select * from kelurahan where id_kelurahan="'.$row_sekolah["kelurahan"].'"';
                $query_lurah=mysqli_query($koneksi,$sql_lurah);
                $row_lurah=mysqli_fetch_assoc($query_lurah);
                ?>
                <td style="font-family: Courier New;"><?php echo $row_lurah['nama_kelurahan'] ?></td>
            </tr>
          
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kabupaten</td>
                <td valign="top">:</td>
                <?php 
                $sql_kab='select * from kabupaten where id_kabupaten="'.$row_sekolah["kabupaten"].'"';
                $query_kab=mysqli_query($koneksi,$sql_kab);
                $row_kab=mysqli_fetch_assoc($query_kab);
                ?>
                <td style="font-family: Courier New;"><?php echo $row_kab['nama_kabupaten'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Provinsi</td>
                <td valign="top">:</td>
                <?php 
                $sql_prov='select * from provinsi where id_provinsi="'.$row_sekolah["provinsi"].'"';
                $query_prov=mysqli_query($koneksi,$sql_prov);
                $row_prov=mysqli_fetch_assoc($query_prov);
                ?>
                <td style="font-family: Courier New;"><?php echo $row_prov['nama_provinsi'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kode Pos</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['kode_pos'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Telephone</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;" ><?php echo $row_sekolah['telephone'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Email</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['email'] ?></td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kep. Sekolah</td>
                <td valign="top"></td>
                <td style="font-family: Courier New;"><?php echo $row_sekolah['kepala_sekolah'] ?></td>
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
<table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>
         <table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>
    <script src="js/bootstrap.min.js"></script>
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
  </body>
</html>