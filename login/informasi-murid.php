<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo-simodis.png" rel="icon">
  <title>Simodis - Murid</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>


.btn2 {
    bottom: 50px;
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
    margin: 40px;
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
top: 1000px;

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
</head>

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
      
        <li class="nav-item">
          <a class="nav-link collapsed" href="orang_tua.php" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fa-solid fa-school"></i>
            <span>SEKOLAH</span>
          </a>
        </li>
        
  
      
        <hr class="sidebar-divider">
  
      </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            
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
        <!-- Topbar -->
        <a href="#">Edit Profil Murid</a>
        <h3 class="text-center text-success mt-3">Informasi Murid</h3></a>

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
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">


          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>NISN/NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>                       
                        <th>Tahun Ajaran</th>
                        <th>Class</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 
                      $sql_murid="select * from murid";
                      $query_murid=mysqli_query($koneksi, $sql_murid);
                      $no=1;
                      while ($row=mysqli_fetch_assoc($query_murid)){
                        echo '<tr>';
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['nisn']."/".$row['nis']."</td>";
                        echo "<td>".$row['nama']."</td>";
                        

                        $kelas=$row['kelas'];
                        if ($kelas=='1') $kelas_rmw='I';
                        else if ($kelas=='2') $kelas_rmw='II';
                        else if ($kelas=='3') $kelas_rmw='III';
                        else if ($kelas=='4') $kelas_rmw='IV';
                        else if ($kelas=='5') $kelas_rmw='V';
                        else if ($kelas=='6') $kelas_rmw='VI';
                        else if ($kelas=='7') $kelas_rmw='VII';
                        else if ($kelas=='8') $kelas_rmw='VIII';
                        else if ($kelas=='9') $kelas_rmw='IX';
                        else if ($kelas=='10') $kelas_rmw='X';
                        else if ($kelas=='11') $kelas_rmw='XI';
                        else if ($kelas=='12') $kelas_rmw='XII';
                        echo "<td>".$kelas_rmw.'-'.$row['sub_kelas']."</td>";
                        echo "<td>".$row['jurusan']."</td>";
                        echo "<td>".$row['tahun_ajaran']."</td>";
                        echo "<td>".$row['class']."</td>";
                        echo '</tr>';

                      }
                    ?>
                      

                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
          <!--Row-->


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

        </div>
        <!---Container Fluid-->
      </div>

      <!-- Footer -->
      
      <!-- Footer -->
    </div>
  </div>
  <a href="orang_tua.php" class="btn2 fourth">Kembali</a>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>