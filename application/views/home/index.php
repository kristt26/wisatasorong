<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/mapbox-gl/dist/mapbox-gl.css')?>">
    <style>
        #map { top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <div id='map'></div>
    <script src="<?= base_url('node_modules/mapbox-gl/dist/mapbox-gl.js')?>"></script>
    <!-- <script src="<?= base_url('public/js/maps.js')?>"></script> -->
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoia3Jpc3R0MjYiLCJhIjoiY2txcWt6dHgyMTcxMzMwc3RydGFzYnM1cyJ9.FJYE8uVi-eVl_mH_DLLEmw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
    </script>
</body>
</html>