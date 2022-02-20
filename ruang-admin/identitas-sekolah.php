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
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
           background-color: #D9860A;
    border: solid 8px #B04E03;
    border-top-right-radius: 80px;
    border-bottom-left-radius: 80px;
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
    <body class="w3-light-grey">
  </head>
  <body>
  <body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo-simodis.png">
        </div>
        <div class="sidebar-brand-text mx-3">Simodis</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fa-solid fa-house"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Identitas Sekolah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Absensi Sekolah</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="absensi-siswa.html">Siswa</a>
            <a class="collapse-item" href="absensi-guru.php">Guru</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Nilai Evaluasi</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">UTS</a>
            <a class="collapse-item" href="register.html">UAS</a>
          </div>
        </div>
      </li>
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
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
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
                <span class="ml-2 d-none d-lg-inline text-white small">User</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile-dashboardOrtu.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
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

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
        <!-- Topbar -->
        <h3 class="text-center text-success mt-3">Informasi Sekolah</h3></a>  
        <a href="edit-profile-sekolah.php" class="btn2 third">Edit Profil Sekolah</a>           
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <center><div class="foto">
        <img src="img/screenshot/tritech2.jpg" class="img-thumbnail" alt="" width="500" height="180">
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
              <td width="25%" valign="top" class="textt" style="font-family: Cambria;">NPSN</td>
                <td width="2%">:</td>
                <td style="color: #e9a7f9; font-weight:bold" >412898749</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">NSS</td>
                <td>:</td>
                <td style="font-family: Courier New;">42104021</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Nama Sekolah</td>
                <td>:</td>
                <td style="font-family: Courier New;">TRITECH INFORMATIKA</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Alamat</td>
                <td>:</td>
                <td style="font-family: Courier New;">Medan</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Kelurahan</td>
                <td>:</td>
                <td style="font-family: Courier New;">Medan Deli</td>
            </tr>
          <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kecamatan</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Medan</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kabupaten</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Medan kota</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Provinsi</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Sumatera Utara</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kode Pos</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">-</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Telephone</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;" >-</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Email</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">smktritech@sch.id</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kep. Sekolah</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">-</td>
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