<?php
    // require 'fungsi/login.php'; 
    // if(!isset($_SESSION['login'])){
    //     header('location:login.php');
    // }
    require 'fungsi/dasboardbarang.php';
    require 'fungsi/dasboardpelanggan.php';
    require 'fungsi/dasboardtransaksi.php';
    require 'fungsi_chart.php';
    


    
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
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                            <img src="assets/images/kasir.jpg" class="p-2 rounded-circle" width="75" height="75" alt="Profile Image">
                            <p class="container text-white p-3 m-t-10"  style="font-size: 20px; font-family: 'Times New Roman', sans-serif;">KELOMPOK 2</p>
                        </div>
    
                        <div class="navbar-container container-fluid">
                            <ul class="nav-left"  >
                                <li class="header-notification m-t-9 active " style="font-size: 15px; font-family: 'Times New Roman', sans-serif; text-align: center;">
                                    <span class=" m-t-9 text-c-blue" style="font-size: 15px; font-family: 'Times New Roman', sans-serif; text-align: center;">Kasir exspress</span>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="pages/notif.php">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-"></span>
                                    </a>
                                </li>
                                <li class="user-profile header-notification">
                                    <img src="assets/images/garis.png" class="img-radius " alt="User-Profile-Image">
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="set/setting.php">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="set/profil.php">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="notifikasi.html">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="db_kasir.php">
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
                                    <li class="active">
                                        <a href="index.html">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
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
                                        <a href="pages/pelanggan/pelanggan.php">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pelanggan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/transaksi/transaksi.php">
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
                                        <p><span style="font-size: 15px; font-family: 'Arial', sans-serif;">Dasboard</span> / index</p>

                                        <div class="page-body">
                                            <div class="row">
                                                <!-- card1 start -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="card widget-card-1">
                                                        <div class="card-block-small">
                                                            <i class="icofont bi bi-people-fill bg-c-blue card1-icon"></i>
                                                            <span class="text-c-blue f-w-600">Pelanggan</span>
                                                            <div style="font-size: 15px;"> <?php echo $total_pelanggan; ?></div>
                                                            <div>
                                                                <a href="pages/pelanggan/pelanggan.php">
                                                                    <span class="f-left m-t-10 text-muted">
                                                                        <i class="fs-5 bi bi-eye text-c-blue p-2" >  </i>daftar pelanggan
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card1 end -->
                                                <!-- card1 start -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="card widget-card-1">
                                                        <div class="card-block-small">
                                                            <i class="icofont bi bi-coin bg-c-pink card1-icon"></i>
                                                            <span class="text-c-pink f-w-600">Transaksi</span>
                                                            <div style="font-size: 15px;"> <?php echo $total_transaksi; ?></div>
                                                            
                                                            <div>
                                                                <a href="pages/transaksi/transaksi.php">
                                                                <span class="f-left m-t-10 text-muted">
                                                                    <i class="text-c-pink f-16 icofont bi-eye m-r-10">  </i>daftar transaksi
                                                                </span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card1 end -->
                                                <!-- card1 start -->
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="card widget-card-1">
                                                        <div class="card-block-small">
                                                             <i class="bi bi-boxes bg-c-green card1-icon"></i>
                                                            <span class="text-c-green f-w-600">Barang</span>
                                                            <div style="font-size: 15px;"> <?php echo $total_barang; ?></div>
                                                           
                                                            <div>
                                                                <a href="pages/barang/barang.php">
                                                                <span class="f-left m-t-10 text-muted">
                                                                    <i class="text-c-pink f-16 icofont bi-eye m-r-10">  </i>daftar barang
                                                                </span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card1 end -->
                                                <!-- card1 start -->
                                                <!-- card1 end -->
                                                <!-- Statestics Start -->
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <p>

                                                        </p>    
                                                            <h5>Rincian Data Transaksi</h5>
                                                            <div class="card-header-left ">
                                                            </div>
                                                            <div style="border-radius: 5px; width: 1300px">

                                                            
                                                            <canvas id="myChart" width="400" height="200"></canvas>
                                                                <script class="col-">
                                                                    // Get the canvas element
                                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                        
                                                                                // Create a new Chart
                                                                                const myChart = new Chart(ctx, {
                                                                                    type: 'line', // The type of chart
                                                                                    data: {
                                                                                        labels: ['08.00','09.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00','17.00','18.00','19.00','20.00','21.00','22.00'],
                                                                                        datasets: [{
                                                                                            label: 'Pendapatan Minggu INI',
                                                                                            data: [50,50,80,20,50,50,90,50,50,20,50,80,50,50,20],
                                                                                            backgroundColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderWidth: 1
                                                                                        }]
                                                                                    },
                                                                                    options: {
                                                                                        scales: {
                                                                                            y: {
                                                                                                beginAtZero: true
                                                                                            }
                                                                                        },
                                                                                        plugins: {
                                                                                            legend: {
                                                                                                display: true,
                                                                                                position: 'top'
                                                                                            },
                                                                                            tooltip: {
                                                                                                callbacks: {
                                                                                                    label: function(context) {
                                                                                                        let label = context.dataset.label || '';
                                                                                                        if (label) {
                                                                                                            label += ': ';
                                                                                                        }
                                                                                                        if (context.parsed.y !== null) {
                                                                                                            label += new Intl.NumberFormat().format(context.parsed.y);
                                                                                                        }
                                                                                                        return label;
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }); 
                                                                                </script>

                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                                
                                                


                                            
                                                <!-- Email Sent End -->
                                                <!-- Data widget start -->
                                                 
                                                    <!-- Data widget End -->
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div id="styleSelector">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-button">
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
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
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
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->

<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
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
