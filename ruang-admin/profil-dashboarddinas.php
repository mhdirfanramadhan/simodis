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
  <title>Simodis - Profile</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
      } 
      .kartu:hover {
        background-color: #DF9D3B;
        border: solid 10px #FE6F01;
        border-top-left-radius: 80px;
    border-bottom-right-radius: 80px;
    border-top-right-radius: 80px;
    border-bottom-left-radius: 80px;
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
  </head>
  <body>
  <body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard-dinaskabkota.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo-simodis.png">
        </div>
        <div class="sidebar-brand-text mx-3">Simodis</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
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
        <a class="nav-link" href="">
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
                <span class="ml-2 d-none d-lg-inline text-white small">admindinasprov</span>
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
  
        <h3 class="text-center text-success mt-3">Profil Akun</h3></a>  
        <a href="edit-profil-dinasprov.php" class="btn2 third">Edit Profil</a>           
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <center><div class="foto">
        <img src="img/logo/new_logo.png" class="img-thumbnail" alt="" width="400" height="180">
      </div></center>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
              <p> Hallo! , Admin</p>
            <tr>
              <td width="25%" valign="top" class="textt" style="font-family: Cambria;">Username</td>
                <td width="2%">:</td>
                <td style="color: #e9a7f9; font-weight:bold" >admin</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Password</td>
                <td>:</td>
                <td style="font-family: Courier New;">*******</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Nama</td>
                <td>:</td>
                <td style="font-family: Courier New;">Farid Ali Gibran</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">NPSN</td>
                <td>:</td>
                <td style="font-family: Courier New;">102388279</td>
            </tr>
          <tr>
              <td class="textt" style="font-family: Cambria;">Tempat Lahir</td>
                <td>:</td>
                <td style="font-family: Courier New;">Rantau</td>
            </tr>
          <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Tanggal Lahir</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">11/10/2005</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Jenis Kelamin</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Pria</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Alamat</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Sumatera Utara , Medan , Tj. Mulia Hilir Kawat 6 , NO 40</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Agama</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">Islam</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Email</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;" >akunml12ku@gmail.com</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Telephone</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">smktritech@sch.id</td>
            </tr>
            <tr>
              <td valign="top" class="textt" style="font-family: Cambria;">Kepegawaian</td>
                <td valign="top">:</td>
                <td style="font-family: Courier New;">NON PNS</td>
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