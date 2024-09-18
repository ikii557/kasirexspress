<?php
    require '../../fungsi/fungsibarang.php';

 $barang = getbarang();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kasirexspress</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo bg-dark  ">
                        <img src="../../assets/images/kasir.jpg" class="rounded-circle" width="50" alt="">
                        <p class="text-white p-2 m-t-10" style="font-size: 20px; font-family: 'Times New Roman', sans-serif;">KELOMPOK 2</p>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left" >
                        <li class="header-notification m-t-9 active" style="font-size: 15px;">
                                <span class=" m-t-9 text-c-blue" style="font-size: 15px; font-family: 'Times New Roman', sans-serif;">Kasir exspress</span>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="../notif.php">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-"></span>
                                </a>
                            </li>
                            <li class="user-profile header-notification">
                                    <img src="../../assets/images/garis.png" class="img-radius " alt="User-Profile-Image">
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          
                            <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="../../index.php">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="pages/barang/barang.php">
                                            <span class="pcoded-micon"><i class="bi bi-bounding-box-circles"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main"> Barang</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <!-- <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="produk/barang.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alat</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="produk/buku.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Buku</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="produk/pakaian.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Pakaian</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul> -->
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                        <a href="../pelanggan/pelanggan.php">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pelanggan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../transaksi/transaksi.php">
                                            <span class="pcoded-micon"><i class="bi bi-receipt-cutoff"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Transaksi</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    
                                </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <p>Daftar Barang</p>
                                            <!-- Data widget start -->

                                             <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-layout bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Daftar Barang</h4>
                                                        <span>silahkan cari barang yang anda butuhkan</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="daftar_barang.html">Daftar Barang</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Tabel Barang   </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <div class="bg-white">
                                        <table class="table table">
                                            <thead class="bg-white">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah Stok</th>
                                                     <th>Aksi</th>
                                                    </tr>
                                                    <div>
                                                        <br>
                                                </thead>
                                                <tbody>
                                                        <div class="p-3">
                                                            <button type="submit" class="p-2 btn btn-success float-right mr-finish " style="border-radius: 5px;">
                                                                <a href="add_barang.php" class="text-white mr-finish" >Tambah Barang</a>
                                                            </button>
                                                            <p class="d-inline">DAFTAR BARANG<br>List Barang Ada Disini</p>
                                                       </div>

                                                    <?php foreach($barang as $no => $item) {
                                                        
                                                        ?>
                                                        <tr>
                                                            <td><?=htmlspecialchars($no +1) ?></td>
                                                            <td><?=htmlspecialchars($item['nama_barang']) ?></td>
                                                            <td><?=htmlspecialchars($item['harga']) ?></td>
                                                            <td><?=htmlspecialchars($item['jml_stock']) ?></td>
                                                            <td > 
                                                                <a href="edit_barang.php?id=<?=$item['id']?>" class="btn btn-primary btn-sm" style="border-radius: 5px;">Edit</a>
                                                                <a onclick="return confirm('yakin anda inin menghapus data barang')" href="delete.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm" style="border-radius: 5px;">Hapus</a>
                                                             </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tr>
                                             </tbody>
                                         </table>
                                     </div>

                                                <!-- Data widget End -->
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                    </div>
                </div>
                <div class="fixed-button">
                    \
                    </a>
                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../../assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../../assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../../assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../../assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../../assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../../assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../../assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="../../assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="../../assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="../../assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="../../assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../../assets/js/script.js"></script>
<script type="text/javascript " src="../../assets/js/SmoothScroll.js"></script>
<script src="../../assets/js/pcoded.min.js"></script>
<script src="../../assets/js/demo-12.js"></script>
<script src="
/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
