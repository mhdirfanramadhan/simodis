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
  <title>Simodis - import</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
    <style>
.container_{margin:10px;padding:5px;border:solid 1px #eee;}
  .image_upload > input{display:none;}
  input[type=text]{width:220px;height:auto;}
    </style>
    <body class="w3-light-grey">
  </head>
  <body>
  <body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
          <div class="sidebar-brand-icon">
            <img src="img/logo/logo-simodis.png">
          </div>
          <div class="sidebar-brand-text mx-3">Simodis</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
          <a class="nav-link" href="dashboard-dinasprov.html">
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
          <span>Jumlah sekolah</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="nilaisma.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="nilaismp.html">SMP/Sederajat</a>
            <a class="collapse-item" href="nilaisd.html">SD/Sederajat</a>
            <a class="collapse-item" href="nilaitk.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fa-solid fa-list-ul"></i>
          <span>Jumlah Siswa</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="jlhsiswasma.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="jlhsiswasmp.html">SMP/Sederajat</a>
            <a class="collapse-item" href="jlhsiswasd.html">SD/Sederajat</a>
            <a class="collapse-item" href="jlhmuridtk.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fa-solid fa-list-ul"></i>
          <span>Jumlah Guru</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih</h6>
            <a class="collapse-item" href="jlhgurupns.html">SMK/SMA/Sederajat</a>
            <a class="collapse-item" href="jlhgurusmp.html">SMP/Sederajat</a>
            <a class="collapse-item" href="jlhgurusd.html">SD/Sederajat</a>
            <a class="collapse-item" href="jlhgurutk.html">TK/Sederajat</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-file-import"></i>
          <span>Import</span></a>
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
                <span class="ml-2 d-none d-lg-inline text-white small">Admindinasprov</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profil-dashboarddinas.php">
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
        <h3 class="text-center text-success mt-3">Import Data</h3></a>
        <table rules="rows">
        <tr>
        <th></th>
        </tr>
        <tr>

         </tr>

         </table>
        <center><div class="container_">
            <p>
             Import Sekolah
            </p>
          <p class="image_upload">
            <label for="userImage">
            <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>Pilih File</a>
            </label>
            <input type="file" name="userImage" id="userImage">
            <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>Import</a>
            </label>
            <input type="submit" name="userImage" id="userImage">
          </p>
        </div></center> 

        <center><div class="container_">
          <p>
            Import Jumlah Siswa
          </p>
          <p class="image_upload">
            <label for="userImage">
              <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Pilih File</a>
            </label>
           <input type="file" name="userImage" id="userImage">
           <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>Import</a>
            </label>
            <input type="submit" name="userImage" id="userImage">
          </p>
        </div></center>

        <center><div class="container_">
          <p>
            Import Jumlah Guru
          </p>
          <p class="image_upload">
              <label for="userImage">
               <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>Pilih File</a>
              </label>
              
              <input type="file" name="userImage" id="userImage">
              <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span>Import</a>
            </label>
            <input type="submit" name="userImage" id="userImage">
          </p>
        </div></center>
        <div class="container_">
          <p>
          </p>
          <p class="image_upload">
              <label for="userImage">
               
              </label>
              <input type="file" name="userImage" id="userImage">

            </label>
            <input type="submit" name="userImage" id="userImage">
          </p>
        </div>
        <div class="container_">
          <p>

          </p>
          <p class="image_upload">
              <label for="userImage">
               
              </label>
              <input type="file" name="userImage" id="userImage">
              
            </label>
            <input type="submit" name="userImage" id="userImage">
          </p>
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