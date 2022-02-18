<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/3cd968700c.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo-simodis.png">
    <link rel="icon" type="image/png" href="img/logo-simodis.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>SIMODIS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dash.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Simodis APP</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/logo-simodis.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Orang Tua Siswa</strong></span><br>
      <a href="profile-dashboardOrtu.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="http://localhost/simodisApp-noDB/login.php" class="w3-bar-item w3-button"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="dashboard-ortu.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-house"></i>  Beranda</a>
    <a href="identitas-sekolah.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-school"></i>  Identitas Sekolah</a>
    <a href="absensi.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-diagram-predecessor"></i>  Absensi Siswa</a>
    <a href="spp-sekolah/datasiswa.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-money-bill"></i>  SPP Sekolah</a>
    <a href="nilai-evaluasi.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa-solid fa-pager"></i>  Nilai Evaluasi</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 980px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Guru Mapel</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td>1</td>
                                    <td>B.Indonesia</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Dapot Hasoloan Bakkara</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1001&jurusan=10212010mia&nip=005&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>2</td>
                                    <td>B.Indonesia</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Dapot Hasoloan Bakkara</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1001&jurusan=10212010mia&nip=005&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>3</td>
                                    <td>B.Indonesia</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Holong Marsaut Marbun</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1003&jurusan=10212010mia&nip=011&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>4</td>
                                    <td>B.Indonesia</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Holong Marsaut Marbun</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1003&jurusan=10212010mia&nip=011&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>5</td>
                                    <td>B.Indonesia</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Holong Marsaut Marbun</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1004&jurusan=10212010mia&nip=011&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>6</td>
                                    <td>B.Indonesia</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Holong Marsaut Marbun</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.indonesia&kelas=1004&jurusan=10212010mia&nip=011&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>7</td>
                                    <td>B.Inggris</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Riama Butar-butar</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1002&jurusan=10212010mia&nip=023&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>8</td>
                                    <td>B.Inggris</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Riama Butar-butar</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1002&jurusan=10212010mia&nip=023&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>9</td>
                                    <td>B.Inggris</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Riama Butar-butar</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1002&jurusan=10212010mia&nip=023&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>10</td>
                                    <td>B.Inggris</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Sondang Simbolon</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1003&jurusan=10212010mia&nip=027&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>11</td>
                                    <td>B.Inggris</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Sondang Simbolon</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1003&jurusan=10212010mia&nip=027&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>12</td>
                                    <td>B.Inggris</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Sondang Simbolon</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1004&jurusan=10212010mia&nip=027&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>13</td>
                                    <td>B.Inggris</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Sondang Simbolon</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10b.inggris&kelas=1004&jurusan=10212010mia&nip=027&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>14</td>
                                    <td>Biologi</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1001&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>15</td>
                                    <td>Biologi</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1001&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>16</td>
                                    <td>Biologi</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1002&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>17</td>
                                    <td>Biologi</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1002&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>18</td>
                                    <td>Biologi</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1003&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>19</td>
                                    <td>Biologi</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1003&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>20</td>
                                    <td>Biologi</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1004&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>21</td>
                                    <td>Biologi</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Sri Nurhayati Lubis</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10biologi&kelas=1004&jurusan=10212010mia&nip=028&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>22</td>
                                    <td>Ekonomi</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1001&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>23</td>
                                    <td>Ekonomi</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1001&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>24</td>
                                    <td>Ekonomi</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1002&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>25</td>
                                    <td>Ekonomi</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1002&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>26</td>
                                    <td>Ekonomi</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1003&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>27</td>
                                    <td>Ekonomi</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1003&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>28</td>
                                    <td>Ekonomi</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1004&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>29</td>
                                    <td>Ekonomi</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Erna Oktafrida</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10ekonomi&kelas=1004&jurusan=10212010mia&nip=009&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>30</td>
                                    <td>Fisika</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Heriawan Sabda Sitepu</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1001&jurusan=10212010mia&nip=010&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>31</td>
                                    <td>Fisika</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Heriawan Sabda Sitepu</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1001&jurusan=10212010mia&nip=010&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>32</td>
                                    <td>Fisika</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Heriawan Sabda Sitepu</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1002&jurusan=10212010mia&nip=010&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>33</td>
                                    <td>Fisika</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Heriawan Sabda Sitepu</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1002&jurusan=10212010mia&nip=010&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>34</td>
                                    <td>Fisika</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Syafrida Hafni</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1003&jurusan=10212010mia&nip=030&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>35</td>
                                    <td>Fisika</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>Syafrida Hafni</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1003&jurusan=10212010mia&nip=030&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>36</td>
                                    <td>Fisika</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Syafrida Hafni</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1004&jurusan=10212010mia&nip=030&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>37</td>
                                    <td>Fisika</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>Mas Ayu</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10fisika&kelas=1004&jurusan=10212010mia&nip=018&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>38</td>
                                    <td>Kewirausahaan</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>KHOIROTUN NISWAH</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kewirausahaan&kelas=1001&jurusan=10212010mia&nip=015&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>39</td>
                                    <td>Kewirausahaan</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>KHOIROTUN NISWAH</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kewirausahaan&kelas=1002&jurusan=10212010mia&nip=015&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>40</td>
                                    <td>Kewirausahaan</td>
                                    <td>X-03</td>
                                    <td>MIA</td>
                                    <td>KHOIROTUN NISWAH</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kewirausahaan&kelas=1003&jurusan=10212010mia&nip=015&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>41</td>
                                    <td>Kewirausahaan</td>
                                    <td>X-04</td>
                                    <td>MIA</td>
                                    <td>KHOIROTUN NISWAH</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kewirausahaan&kelas=1004&jurusan=10212010mia&nip=015&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>42</td>
                                    <td>Kimia</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Manongon Sidauruk</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kimia&kelas=1001&jurusan=10212010mia&nip=017&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>43</td>
                                    <td>Kimia</td>
                                    <td>X-01</td>
                                    <td>MIA</td>
                                    <td>Manongon Sidauruk</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kimia&kelas=1001&jurusan=10212010mia&nip=017&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>44</td>
                                    <td>Kimia</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Manongon Sidauruk</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kimia&kelas=1002&jurusan=10212010mia&nip=017&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>45</td>
                                    <td>Kimia</td>
                                    <td>X-02</td>
                                    <td>MIA</td>
                                    <td>Manongon Sidauruk</td>
                                    <td>2021/2022</td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="NilaiUASDetail.php?mapel=10212010mia10kimia&kelas=1002&jurusan=10212010mia&nip=017&tahun_akademik=2021/2022&semester=" data-toggle="tooltip"data-placement="top" title="Edit">Detail</a>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="footer">
            <div class="copyright">
                
                <p>© 2022 <a href="https://themewagon.com/" target="_blank">SiPren</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="../vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>
  
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

  
</body>

</html>