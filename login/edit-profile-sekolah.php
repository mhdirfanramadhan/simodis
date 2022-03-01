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
  <title>Simodis - Edit</title>
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
              <i class="fab fa-fw fa-wpforms"></i>
            <span>Identitas Sekolah</span>
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
                  <p>Anda yakin ingin logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="http://localhost/simodis/" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
        <!-- Topbar -->
        <h3 class="text-center text-success mt-3">Edit Data Sekolah</h3></a>  
        <a href="sekolah.html" class="btn2 third"> < Kembali</a>           
        <!-- Isi Biodata Paling Keren di HTML disini -->
        <form action="identitas-sekolah.php"  method="post">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px ">NPSN</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="NPSN"  style="background-color: #F39C12; border-radius: 15px" requried>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">NSS</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nss" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Nama Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="nama_sekolah" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Alamat</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="alamat" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kelurahan</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kelurahan" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kecamatan</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kecamatan" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                  
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kabupaten</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kabupaten" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Provinsi</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="provinsi" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Kode POS</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="number" class="form-control" name="kode_pos" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div>  

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Telephone</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="number" class="form-control" name="telephone" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                            <label style="color:grey; padding:8px">Email</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="email" class="form-control" name="email" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                        </div> 

                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label style="color:grey; padding:8px">Kepala Sekolah</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" class="form-control" name="kepala_sekolah" style="background-color: #F39C12; border-radius: 15px" required>
                                                            </div>
                                                            
                                                            <div class="col-lg-12 mt-2">
                                                             <input type="file" name="gambar" id="image" onchange="showImage(this);" class="custom-file-input" required>
                                                             <label class="custom-file-label" style="margin-right: 20px">Upload Foto Sekolah</label>
                                                            </div>
                                                        </div> 
                                    
                                                        <br/>
                                                        <div class="col-sm-4 text-center" style="margin: auto;">
                                                            <input type="submit" name="daftar" id="daftar" value="Edit" class="btn btn-secondary btn-block" style="background-color: blue; border-color: #39B44a; height: 15%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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