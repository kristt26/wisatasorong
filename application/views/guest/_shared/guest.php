<!DOCTYPE html>
<html ng-app="apps" ng-controller="indexController">

<head>
    <meta charset="utf-8">
    <title>Display driving directions</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?=base_url('public/js/boxmap/dist/mapbox-gl-directions.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="<?=base_url('public/guest/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/fontawesome-all.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/swiper.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/magnific-popup.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/styles.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?=base_url('public/guest/images/favicon.png')?>">
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
        type="text/css">
    <link href="<?=base_url('public/js/boxmap/dist/mapbox-gl.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/js/boxmap/dist/mapbox-gl-directions.css')?>" type="text/css">
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
        type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.min.css">
    <style>
    #map {
        top: 0;
        bottom: 0;
        width: 100%;
    }

    #mapp {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }

    .mapboxgl-ctrl-geocoder input[type='text'] {
        width: 100%;
        height: 40px;
        padding: 6px 51px;
    }

    .geocoder {
        display: flex;
        justify-content: center;
    }

    .marker {
        background-image: url('mapbox-icon.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
    }


    .mapbox-directions-origin,
    .mapbox-directions-destination,
    .mapbox-directions-inputs button {
        /* display: none; */
    }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">
<?php
if (!$this->session->userdata('is_login')) {
    redirect('authentication');
}
?>
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
        <a class="navbar-brand logo-image" href="index.html"><img src="<?=base_url('public/guest/images/logo.png')?>"
                alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url()?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('visimisi')?>">VISI MISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('wisata')?>">WISATA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('umkm')?>">UMKM</a>
                </li>
                <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= base_url(!$this->session->userdata('is_login') ? 'authentication' : 'authentication/logout') ?>"> <?= !$this->session->userdata('is_login') ? 'LOGIN': 'LOGOUT'?></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1" style="padding-top: 5rem !important; padding-bottom: 0rem !important; padding-right:2rem">
        <div class="d-flex justify-content-end">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="<?=base_url()?>">Home</a><i class="fa fa-angle-double-right"></i><span><?=$breadcrumbs?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <!-- <div class="modal fade" id="addLatLong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true"> -->

    <!-- </div> -->
    <div style="background-color: #f4f6f9;">
        <?= $content?>
    </div>

    <!-- Copyright -->
    <div class="copyright fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">Template by Inovatik</a></p>
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
    <script src="<?=base_url()?>public/plugins/angular/angular.min.js"></script>
    <script src="<?=base_url('public/guest/js/popper.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/jquery.easing.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/swiper.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/jquery.magnific-popup.js')?>"></script>
    <script src="<?=base_url('public/guest/js/morphext.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/isotope.pkgd.min.js')?>"></script>
    <script src="<?=base_url('public/guest/js/validator.min.js')?>"></script>
    <script src="<?=base_url()?>public/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?=base_url('public/guest/js/scripts.js')?>"></script>
    <!-- Custom scripts -->
    <script src="<?=base_url()?>public/js/guest.js"></script>
    <script src="<?=base_url()?>public/js/services/helper.services.js"></script>
    <script src="<?=base_url()?>public/js/services/auth.services.js"></script>
    <script src="<?=base_url()?>public/js/services/admin.services.js"></script>
    <script src="<?=base_url()?>public/js/services/message.services.js"></script>
    <script src="<?=base_url()?>public/js/controllers/guest.controllers.js"></script>

    <script src="<?=base_url('public/js/boxmap/dist/mapbox-gl.js')?>"></script>
    <script src="<?=base_url('public/js/boxmap/dist/mapbox-gl-directions.js')?>"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js">
    </script>
    <script src="https://unpkg.com/@esri/arcgis-rest-request@3.0.0/dist/umd/request.umd.js"></script>
    <script src="https://unpkg.com/@esri/arcgis-rest-geocoding@3.0.0/dist/umd/geocoding.umd.js"></script>
    <script src="https://unpkg.com/@esri/arcgis-rest-auth@3.0.0/dist/umd/auth.umd.js"></script>

    <script src="<?=base_url()?>public/plugins/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="<?=base_url()?>public/libs/swangular/swangular.js"></script>
    <script src="<?=base_url()?>public/libs/angular-locale_id-id.js"></script>
    <script src="<?=base_url()?>public/libs/input-mask/angular-input-masks-standalone.min.js"></script>
    <script src="<?=base_url()?>public/libs/angular-base64-upload.js"></script>
    <script src="<?=base_url()?>public/libs/jquery.PrintArea.js"></script>
    <script src="<?=base_url()?>public/libs/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
    <!-- <script src="<?=base_url('public/js/maps.js')?>"></script> -->
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v0.10.1/mapbox-gl-language.js'></script> -->
</body>

</html>