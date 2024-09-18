<?php
    require '../../fungsi/fungsitransaksi.php';

    // Mengambil data transaksi berdasarkan ID dari URL
    $id = $_GET['id'];

    if ($id) {
            $queryTransaksi ="SELECT transaksi.*, pelanggan.nama AS nama_pelanggan, barang.nama_barang AS nama_barang
                                FROM transaksi
                                JOIN pelanggan ON transaksi.pelanggan_id = pelanggan.id
                                JOIN barang ON transaksi.barang_id = barang.id
                                WHERE transaksi.id = '$id'";
            $query          = mysqli_query($conn, $queryTransaksi);
            $transaksi      = mysqli_fetch_assoc($query);
    }

        

    if (isset($_POST['edit'])) {
        if (edittransaksi($_POST, $id) > 0) {
            echo "<script>
                    alert('transaksi berhasil diedit');
                    document.location.href='transaksi.php';
                </script>";
        } else {
            echo "<script>
                    alert('transaksi gagal diedit');
                    document.location.href='edit_transaksi.php?id=$id';
                </script>";
        }
    }
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
                        <img src="../../assets/images/kasir.jpg" class="p-2 rounded-circle" width="75" height="75" alt="Profile Image">
                        <p class="container text-white p-3 m-t-10"  style="font-size: 20px; font-family: 'Times New Roman', sans-serif;">KELOMPOK 2</p>
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
                                        <a href="login.php">
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
                                <li class=" ">
                                    <a href="../../index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../barang/barang.php">
                                        <span class="pcoded-micon"><i class="bi-bounding-box-circles"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main"> Barang</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <!-- <ul class="pcoded-submenu">
                                        <li class=" ">
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
                                <li class="active">
                                    <a href="transaksi.php">
                                        <span class="pcoded-micon"><i class="bi-receipt-cutoff"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Transaksi</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <span class="container" style="font-size: 20px; font-family: 'Times New Roman', sans-serif;">edit transaksi</span>
                    
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="bi bi-cash-coin bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4 style="font-size: 20px; font-family: 'Arial', sans-serif;">Edit data Transaksi</h4>
                                                        <span>Edit data yang berkaitan dengan Nama,Email,No henphone</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title" style="font-size: 20px; font-family: 'Helvetica','Arial', sans-serif;">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="transaksi.html">Data Transaksi</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="add_transaksi.html">Tambah Transaksi</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                    
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card p-5">
                                                    <div class="card-header">
                                                        <h1 class="text-center" style="font-size: 50px; font-family: 'Serif', sans-serif;">Edit Data Transaksi</h1>
                                                    </div>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="id" value="<?= htmlspecialchars($transaksi['id']) ?>">

                                                        <div class="form-group">
                                                            <h6 class="p-2"><em>Nama pelanggan</em></h6>
                                                            <div class="input-group">
                                                                <input type="text" name="nama_pelanggan" class="form-control" value="<?= htmlspecialchars($transaksi['nama_pelanggan']) ?>" 
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <h6 class="p-2"><em>Nama barang</em></h6>
                                                            <div class="input-group">
                                                                <input type="text" name="nama_barang" class="form-control" value="<?= htmlspecialchars($transaksi['nama_barang']) ?>" 
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <h6 class="p-2"><em>Jumlah Barang Dibeli</em></h6>
                                                            <div class="input-group">
                                                                <input type="number" name="jml_barangdibeli" class="form-control" value="<?= htmlspecialchars($transaksi['jml_barangdibeli']) ?>" required min="1">
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <h6 class="p-2"><em>Total Harga</em></h6>
                                                            <div class="input-group">
                                                                <input type="text" name="total_harga" class="form-control" value="<?= htmlspecialchars($transaksi['total_harga']) ?>" required min="0" step="0.01">
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <h6 class="p-2"><em>Metode Pembayaran</em></h6>
                                                            <div class="input-group">
                                                                <input type="text" name="metode_pembayaran" class="form-control" value="<?= htmlspecialchars($transaksi['metode_pembayaran']) ?>" 
                                                                <span class="md-line"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <button type="submit" name="edit" class="btn btn-success float-right" style="border-radius: 10px;">Edit</button>
                                                    </form>

                                                    
                                                    <div class="card-block">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="styleSelector">
                    
                            </div>
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
<script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
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
