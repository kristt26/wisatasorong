<!DOCTYPE html>
<html ng-app="apps" ng-controller="pageController">

<head>
    <meta charset="utf-8">
    <title>Display driving directions</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="<?= base_url('public/js/boxmap/dist/mapbox-gl.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/js/boxmap/dist/mapbox-gl-directions.css')?>" type="text/css">
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }

    .mapbox-directions-origin,
    .mapbox-directions-destination,
    .mapbox-directions-inputs button {
        /* display: none; */
    }
    </style>
</head>

<body>


    <?= $content?>


    <script src="<?=base_url()?>public/libs/angular/angular.min.js"></script>
    <script src="<?=base_url()?>public/js/apps.js"></script>
    <script src="<?=base_url()?>public/js/services/helper.services.js"></script>
    <script src="<?=base_url()?>public/js/controllers/admin.controllers.js"></script>
    <script src="<?= base_url('public/js/boxmap/dist/mapbox-gl.js')?>"></script>
    <script src="<?= base_url('public/js/boxmap/dist/mapbox-gl-directions.js')?>"></script>
    <!-- <script src="<?= base_url('public/js/maps.js')?>"></script> -->
    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v0.10.1/mapbox-gl-language.js'></script> -->
</body>

</html>