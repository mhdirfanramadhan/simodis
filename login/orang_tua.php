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
  <title>Simodis - Orang Tua</title>
  <style> 
input[type=text] {
    width: 250  px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<?php
 session_start();
 if($_SESSION['level']=="")
    echo "<script>document.location.href = 'http://localhost/simodis/login/index.php';</script>";
    
 include "../koneksi.php";
$username = $_SESSION['username'];
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
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
        <center><h1 class="h3 mb-0 text-gray-800">SIMODIS</h1></center>
           <center><h1 class="h3 mb-0 text-gray-800"> ( Sistem Monitoring Dinas )</h1></center>

           <center><h4>Informasi Sekolah</h4></center>
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">

                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <center><div class="">
                    <h3>Pilih Sekolah</h3>
                    <form method="POST" action="">
	               <select id="inputState" class="form-control" name="makan" style="background-color: #F39C12; border-radius: 15px" onChange="document.location.href=this.options[this.selectedIndex].value; ">
	                    	<option value="">Pilih Sekolah</option>
	                     	<option value="sekolah.php?sekolah">TRITECH INFORMATIKA</option>
	                    	<option value="select.php?halaman2">SMA NEGRI 1</option>
             	</select>
              </form>
 
<?php
	
	if (isset($_GET["halaman1"])) { header ("location:sekolah.html");}
		
	elseif(isset($_GET["halaman2"])){ header ("location:halaman2.php");}
	
 ?>           
                                                        
                    </div></center>
                    <table rules="rows">
                    <tr>
                    <th></th>
                   </tr>
                   <tr>

                   </tr>

                   </table>
                    <center><div class="col-lg-6 mb-4">
                      <div class="card bg-warning text-white">
                        <div class="card-body">
                          Cari sekolah anda
                          <div><img src="img/screenshot/f1.png" width="150" height="85" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div></center>
                  <center><div class="col-lg-6 mb-4">
                      <div class="card bg-warning text-white">
                        <div class="card-body">
                          Informasi
                          <div><img src="img/screenshot/f2.png" width="150" height="85" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div></center>
                  <center><div class="col-lg-6 mb-4">
                      <div class="card bg-warning text-white">
                        <div class="card-body">
                          Secara Detail
                          <div><img src="img/screenshot/f3.png" width="150" height="85" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div></center>
                  <table rules="rows">
    <tr>
        <th></th>
    </tr>
    <tr>

    </tr>

</table>
                  </table>
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
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      </div>
  </div>
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
 <br/>
 <br/>
</body>
</html>