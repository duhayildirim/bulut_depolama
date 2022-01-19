<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Panel</title>
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('panel')); ?>/assets/css/style.css" />
    <link rel="shortcut icon" href="<?php echo e(asset('panel')); ?>/assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
            <h2 style="color: #37517e !important;margin: auto;font-family: fantasy;">Veri Deposu</h2>
        </div>
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="<?php echo e(asset('panel')); ?>/assets/images/faces/face1.jpg" alt="profile" />
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column pr-3">
                        <span class="font-weight-medium mb-2"><?php echo e(Auth::user()->name); ?></span>
                        <span class="font-weight-normal">Demo Paket</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Anasayfa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('fad.folder.index')); ?>">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Veriler</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-contacts menu-icon"></i>
                    <span class="menu-title">Erişim</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">İstatistiklerim</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-table-large menu-icon"></i>
                    <span class="menu-title">Tablolar</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles light"></div>
                <div class="tiles dark"></div>
            </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="<?php echo e(asset('panel')); ?>/assets/images/logo-mini.svg" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                    <i class="mdi mdi-menu"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count count-varient1">7</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="<?php echo e(asset('panel')); ?>/assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="<?php echo e(asset('panel')); ?>/assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="<?php echo e(asset('panel')); ?>/assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                                </div>
                                <div class="preview-item-content">
                                    <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0">View all activities</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-sm-flex">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count count-varient2">5</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <a class="dropdown-item preview-item">
                                <div class="preview-item-content flex-grow">
                                    <span class="badge badge-pill badge-success">Request</span>
                                    <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                                </div>
                                <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-item-content flex-grow">
                                    <span class="badge badge-pill badge-warning">Invoices</span>
                                    <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                                </div>
                                <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-item-content flex-grow">
                                    <span class="badge badge-pill badge-danger">Projects</span>
                                    <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                                </div>
                                <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                            </a>
                            <h6 class="p-3 mb-0">See all activity</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                        <form class="nav-link form-inline mt-2 mt-md-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Arama Yap..." />
                                <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                    <li class="nav-item dropdown d-none d-xl-flex border-0">
                        <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-earth"></i> Türkçe </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="#"> İngilizce </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown border-0">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                            <img class="nav-profile-img mr-2" alt="" src="<?php echo e(asset('panel')); ?>/assets/images/faces/face1.jpg" />
                            <span class="profile-name"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>">
                                <i class="mdi mdi-cached mr-2 text-success"></i> Profil </a>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" >
                                <?php echo csrf_field(); ?>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Çıkış Yap </a>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="page-header flex-wrap">
                    <h3 class="mb-0"> Hoşgeldin, <?php echo e(Auth::user()->name); ?> <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Verilerin bizimle güvende; dilediğin zaman, dilediğin yerden erişim sağlayabilirsin.</span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                        <div class="row">
                            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                <div class="card bg-warning">
                                    <div class="card-body px-3 py-4">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="color-card">
                                                <p class="mb-0 color-card-head">Toplam Verileriniz:</p>
                                                <h2 class="text-white"> 502 <span class="h5">megabayt</span>
                                                </h2>
                                            </div>
                                            <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                        </div>
                                        <h6 class="text-white">113 adet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                <div class="card bg-danger">
                                    <div class="card-body px-3 py-4">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="color-card">
                                                <p class="mb-0 color-card-head">Text, csv, pdf vb. uzatılı</p>
                                                <h2 class="text-white"> 40 <span class="h5">megabayt</span>
                                                </h2>
                                            </div>
                                            <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                        </div>
                                        <h6 class="text-white">34 adet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                                <div class="card bg-primary">
                                    <div class="card-body px-3 py-4">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="color-card">
                                                <p class="mb-0 color-card-head">Resim</p>
                                                <h2 class="text-white"> 194 <span class="h5">megabayt</span>
                                                </h2>
                                            </div>
                                            <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                        </div>
                                        <h6 class="text-white">67 adet</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                                <div class="card bg-success">
                                    <div class="card-body px-3 py-4">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="color-card">
                                                <p class="mb-0 color-card-head">Diğer</p>
                                                <h2 class="text-white">326 <span class="h5">megabayt</span></h2>
                                            </div>
                                            <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                                        </div>
                                        <h6 class="text-white">12 adet</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h5>İstatistikler</h5>
                                        <p class="text-muted"> 01/05/2021 - 31/12/2021 verileri göstermektedir.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card mb-3 mb-sm-0">
                                            <div class="card-body py-3 px-4">
                                                <p class="m-0 survey-head">Erişim İzni</p>
                                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                                    <div>
                                                        <h3 class="m-0 survey-value">2 kişi</h3>
                                                        <p class="text-success m-0">paylaşım</p>
                                                    </div>
                                                    <div id="earningChart" class="flot-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card mb-3 mb-sm-0">
                                            <div class="card-body py-3 px-4">
                                                <p class="m-0 survey-head">Kalan Alanım</p>
                                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                                    <div>
                                                        <h3 class="m-0 survey-value">14 GB</h3>
                                                        <p class="text-danger m-0">yaklaşık</p>
                                                    </div>
                                                    <div id="productChart" class="flot-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-12">
                                        <div class="flot-chart-wrapper">
                                            <div id="flotChart" class="flot-chart">
                                                <canvas class="flot-base"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="text-muted mb-0"> Bu tabloda elde edilen veriler sadece veri deposunda gerçekleştirdiğiniz faaliyetleri yansıtmaktadır.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6 grid-margin stretch-card">
                        <!--datepicker-->
                        <div class="card">
                            <div class="card-body">
                                <div id="inline-datepicker" class="datepicker table-responsive"></div>
                            </div>
                        </div>
                        <!--datepicker ends-->
                    </div>
                    <div class="col-xl-6 col-md-6 stretch-card grid-margin stretch-card">
                        <!--browser stats-->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">En Çok Erişim Sağladığınız Tarayıcılar</h4>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between pb-3 border-bottom">
                                            <div>
                                                <img class="mr-2" src="<?php echo e(asset('panel')); ?>/assets/images/browser-logo/opera-logo.png" alt="" />
                                                <span class="p">opera mini</span>
                                            </div>
                                            <p class="mb-0">23%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between pb-3 border-bottom">
                                            <div>
                                                <img class="mr-2" src="<?php echo e(asset('panel')); ?>/assets/images/browser-logo/safari-logo.png" alt="" />
                                                <span class="p">Safari</span>
                                            </div>
                                            <p class="mb-0">07%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between pb-3 border-bottom">
                                            <div>
                                                <img class="mr-2" src="<?php echo e(asset('panel')); ?>/assets/images/browser-logo/chrome-logo.png" alt="" />
                                                <span class="p">Chrome</span>
                                            </div>
                                            <p class="mb-0">33%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between pb-3 border-bottom">
                                            <div>
                                                <img class="mr-2" src="<?php echo e(asset('panel')); ?>/assets/images/browser-logo/firefox-logo.png" alt="" />
                                                <span class="p">Firefox</span>
                                            </div>
                                            <p class="mb-0">17%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <img class="mr-2" src="<?php echo e(asset('panel')); ?>/assets/images/browser-logo/explorer-logo.png" alt="" />
                                                <span class="p">Explorer</span>
                                            </div>
                                            <p class="mb-0">05%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--browser stats ends-->
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Veri Deposu © 2021 </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Designer and coder by <a target="_blank">Duha</a> </span>
                </div>
            </footer>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.resize.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.categories.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.stack.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/vendors/flot/jquery.flot.pie.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo e(asset('panel')); ?>/assets/js/off-canvas.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/js/hoverable-collapse.js"></script>
<script src="<?php echo e(asset('panel')); ?>/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo e(asset('panel')); ?>/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
<?php /**PATH C:\Users\PC\Documents\Github\bulut_depolama\resources\views/dashboard.blade.php ENDPATH**/ ?>