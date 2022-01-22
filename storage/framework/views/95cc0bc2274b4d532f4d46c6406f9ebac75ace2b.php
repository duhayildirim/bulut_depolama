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
                    <h3 class="mb-0"> KLASÖR ADI
                    </h3>
                    <button style="float: right" type="button" class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModalCenter"> + Yeni </button>
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger" >
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Yeni Veri</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo e(route('fad.data.create')); ?>" method="post" role="form" enctype="multipart/form-data">
                                <?php echo method_field('POST'); ?>
                                <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <input type="hidden" class="form-control-file" value="<?php echo e($folder->id); ?>" name="folder_id" id="exampleFormControlFile1">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Yükle/Sürükle Bırak</label>
                                    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Dosya Adı:</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="deneme text" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</a>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Klasör Adı</h4>
                            <p class="card-description">Bu klasörde bulunan tüm verileriniz.</p>
                            <div class="row">
                                <?php if(isset($datas)): ?>
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card" style="width: 11rem;margin: 4rem;border: none !important;">
                                        <img class="card-img-top"
                                             <?php if($data -> type === 'pdf'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/pdf.png"
                                             <?php elseif($data -> type === 'xls' || $data -> type === 'xlsx'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/excel.png"
                                             <?php elseif($data -> type === 'doc' || $data -> type === 'docx'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/text.png"
                                             <?php elseif($data -> type === 'mpeg' || $data -> type === 'mpga' || $data -> type === 'mp3' || $data -> type === 'wav'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/mp3.png"
                                             <?php elseif($data -> type === 'mp4' || $data -> type === 'mov' || $data -> type === 'ogg'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/video.png"
                                             <?php elseif($data -> type === 'jpg' || $data -> type === 'png' || $data -> type === 'jpeg'): ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/text.png"
                                             <?php else: ?>
                                             src="<?php echo e(asset('panel')); ?>/assets/images/faces/dosya.png"
                                             <?php endif; ?>
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($data -> url); ?></h5>
                                            <a target="_blank" href="<?php echo e(URL::to('')); ?><?php echo e($data -> url); ?>" type="button" class="btn btn-success"> Aç</a>
                                            <a type="button" class="btn btn-danger"> Sil</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>




























































                            </div>

                        </div>
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
<script>
    $('.exampleModalCenter').on('shown.bs.modal', function () {
        $('.exampleModalCenter').trigger('focus')
    })
</script>
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

<?php /**PATH C:\Users\PC\Documents\Github\bulut_depolama\resources\views/fad/data/index.blade.php ENDPATH**/ ?>