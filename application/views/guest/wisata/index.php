<div ng-controller="wisataController">
    <div id="wisata" class="cards-2" style="padding-top: 0rem !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">WISATA SORONG</div>
                </div>
            </div> <!-- end of row -->
        </div>
        <div class="col-sm-12" style="height: 600px; padding: 0px !important;">
            <div style="position: relative; width:100%; height: 600px;">
                <div id="mapp"></div>
                <div class="mapboxgl-ctrl-top-right" style="top: 32px;">
                    <div class="mapboxgl-ctrl  mapboxgl-ctrl-group">
                        <input type="checkbox" class="mapboxgl-ctrl-geolocate" style="margin: 8px;" ng-model="cekdirection" ng-change="setDirection()">
                    </div>
                </div>
            </div>
            <!-- <div id="geocoder" class="geocoder"></div> -->
        </div>
    </div>

    <div id="wisata" class="cards-2"  style="height: 500px; padding: 0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <?php for ($i = 0; $i < count($wisatas); $i++): ?>
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="<?=base_url('public/img/galeri/') . $wisatas[$i]['foto']?>"
                                alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?=$wisatas[$i]['nama']?></h3>
                            <!-- <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Environment and competition</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Designing the marketing plan</div>
                                    </li>
                                </ul>
                                <p class="price">Starting at <span>$199</span></p> -->
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="<?=base_url('wisata/detail/') . $wisatas[$i]['id']?>">DETAILS</a>
                        </div>
                    </div>
                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div>
</div>