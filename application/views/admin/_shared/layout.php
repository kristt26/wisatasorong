<!DOCTYPE html>
<html ng-app="apps" ng-controller="pageController">

<head>
    <meta charset="utf-8">
    <title>Display driving directions</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="<?=base_url('public/js/boxmap/dist/mapbox-gl.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/js/boxmap/dist/mapbox-gl-directions.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/fontawesome-all.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/swiper.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/magnific-popup.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/styles.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('public/guest/images/favicon.png')?>">
    <style>
    #map {
        top: 0;
        bottom: 0;
        width: 100%;
        height: 40rem
    }

    .mapbox-directions-origin,
    .mapbox-directions-destination,
    .mapbox-directions-inputs button {
        /* display: none; */
    }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">
<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top top-nav-collapsee">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.html#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">MASTER DATA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Visi Misi</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Kecamatan</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#intro">WISATA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#services">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#callMe">KECAMATAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#projects">PROJECTS</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.html#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
            <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
            </span>
            <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
            <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
            </span>
            </span>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top: 4rem !important; padding-bottom: 0rem !important; padding-right:2rem">
        <div class="d-flex justify-content-end">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div style="background-color: #f4f6f9;">
        <?= $content?>
    </div>

    <!-- Copyright -->
    <div class="copyright fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?=base_url('public/guest/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/popper.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/jquery.easing.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/swiper.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/jquery.magnific-popup.js')?>"></script>
    <script src="<?=base_url('public/guest/js/morphext.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/isotope.pkgd.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/validator.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/scripts.js')?>"></script>
    <!-- Custom scripts -->
    <script src="<?=base_url()?>public/libs/angular/angular.min.js"></script>
    <script src="<?=base_url()?>public/js/apps.js"></script>
    <script src="<?=base_url()?>public/js/services/helper.services.js"></script>
    <script src="<?=base_url()?>public/js/controllers/admin.controllers.js"></script>
    <script src="<?=base_url('public/js/boxmap/dist/mapbox-gl.js')?>"></script>
    <script src="<?=base_url('public/js/boxmap/dist/mapbox-gl-directions.js')?>"></script>
    <!-- <script src="<?=base_url('public/js/maps.js')?>"></script> -->
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v0.10.1/mapbox-gl-language.js'></script> -->
</body>

</html>