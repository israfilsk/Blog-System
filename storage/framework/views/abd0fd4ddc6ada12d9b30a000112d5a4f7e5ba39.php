<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    
 <!-- Bootstrap Core Css -->
 <link href="<?php echo e(asset('assets/backend/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="<?php echo e(asset('assets/backend/plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

<!-- Animation Css -->
<link href="<?php echo e(asset('assets/backend/plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="<?php echo e(asset('assets/backend/plugins/morrisjs/morris.css')); ?>" rel="stylesheet" />

 <!-- Sweet Alert Css -->
<link href="<?php echo e(asset('assets/backend/plugins/sweetalert/sweetalert.css')); ?>" rel="stylesheet" />

<!-- Custom Css -->
<link href="<?php echo e(asset('assets/backend/css/style.css')); ?>" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo e(asset('assets/backend/css/themes/all-themes.css')); ?>" rel="stylesheet" />
<?php echo $__env->yieldPushContent('css'); ?>
</head>

<body class="theme-red">
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Blogging</a>
            </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo e(asset('assets/backend/images/user.png')); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Session::get('user')); ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="post">
                            <i class="material-icons">library_books</i>
                            <span>Posts</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                    </li>

                   
                   
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div> -->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </section>

  <!-- Jquery Core Js -->
<!-- <script src="<?php echo e(asset('assets/backend/plugins/jquery/jquery.min.js')); ?>"></script> -->

<!-- Bootstrap Core Js -->
<script src="<?php echo e(asset('assets/backend/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

<!-- Select Plugin Js -->
<!-- <script src="<?php echo e(asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script> -->

<!-- Slimscroll Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/node-waves/waves.js')); ?>"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/jquery-countto/jquery.countTo.js')); ?>"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/plugins/morrisjs/morris.js')); ?>"></script>

<!-- ChartJs -->
<script src="<?php echo e(asset('assets/backend/plugins/chartjs/Chart.bundle.js')); ?>"></script>

<!-- Flot Charts Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/plugins/flot-charts/jquery.flot.time.js')); ?>"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo e(asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js')); ?>"></script>

<!-- Custom Js -->
<script src="<?php echo e(asset('assets/backend/js/admin.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/pages/index.js')); ?>"></script>

<!-- Demo Js -->
<script src="<?php echo e(asset('assets/backend/js/demo.js')); ?>"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
