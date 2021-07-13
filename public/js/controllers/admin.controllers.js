angular.module('adminctrl', [])
    .controller('pageController', pageController)
    .controller('homeController', homeController)
    .controller('wisataController', wisataController)
    .controller('tambahWisataController', tambahWisataController)
    .controller('umkmController', umkmController)
    .controller('tambahUmkmController', tambahUmkmController)
    .controller('usersController', usersController);

function pageController($scope, helperServices) {
    $scope.Title = "Page Header";
}

function homeController($scope, $http, helperServices) {
    $scope.tampilinput = false;
    mapboxgl.accessToken = 'pk.eyJ1Ijoia3Jpc3R0MjYiLCJhIjoiY2txcWt6dHgyMTcxMzMwc3RydGFzYnM1cyJ9.FJYE8uVi-eVl_mH_DLLEmw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [131.25478, -0.86210],
        zoom: 10
    });
    var userLocation = new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true
    });
    map.addControl(userLocation);
    let directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
        unit: 'metric',
        profile: 'mapbox/cycling',
        interactive: true,
        steps: true,
        instructions: true,
        language: 'id',
        controls: {
            inputs: false,
            instructions: true,
            profileSwitcher: false
        }


    });

    map.addControl(directions, 'top-left');
    // directions.setOrigin([cord.coords.longitude, cord.coords.latitude]);
    userLocation.on('geolocate', function(a) {
        directions.setOrigin([a.coords.longitude, a.coords.latitude]);
        console.log(a)
    });

    var marker = new mapboxgl.Marker({
            color: "maroon",
            draggable: true
        }).setLngLat([131.25478, -0.86210])
        .addTo(map);

    map.on('load', function() {
        map.addSource('maine', {
            'type': 'geojson',
            'data': helperServices.url + 'public/js/sorong.geojson'
        });

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': 'maine',
            'layout': {},
            'paint': {
                'fill-color': '#0080ff',
                'fill-opacity': 0.2
            }
        });
        map.addLayer({
            'id': 'outline',
            'type': 'line',
            'source': 'maine',
            'layout': {},
            'paint': {
                'line-color': 'red',
                'line-width': 1,
                'line-opacity': 0.25
            }
        });
    });
    // navigator.geolocation.getCurrentPosition((cord) => {


    // }, err => {

    // }, {})
}

function wisataController($scope, $http, helperServices, wisataServices) {
    $scope.datas = [];
    wisataServices.get().then(res => {
        $scope.datas = res;
    })

}

function tambahWisataController($scope, $http, helperServices, wilayahServices, message, wisataServices) {
    $scope.model = {};
    $scope.tampilinput = false;
    $scope.kecamatans = [];
    $scope.kecamatan = {};
    const apiKey = "AAPKe04c23b9e1e14827a485e3c06a91369a44TROFRCnx1O_wzKtYcV81b7ApPKaBQwXH064LgF6Y-BxD_3-5yyVhpmIrVi1V19";

    const basemapEnum = "ArcGIS:Navigation";
    mapboxgl.accessToken = 'pk.eyJ1Ijoia3Jpc3R0MjYiLCJhIjoiY2txcWt6dHgyMTcxMzMwc3RydGFzYnM1cyJ9.FJYE8uVi-eVl_mH_DLLEmw';
    var map = new mapboxgl.Map({
        container: 'mapp',
        style: 'mapbox://styles/mapbox/streets-v11',
        // style: `https://basemaps-api.arcgis.com/arcgis/rest/services/styles/${basemapEnum}?type=style&token=${apiKey}`,
        center: [131.25478, -0.86210],
        zoom: 10
    });

    // var marker = new mapboxgl.Marker({
    //     color: "maroon",                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    //     draggable: true
    // }).setLngLat([131.25478, -0.86210])
    //     .addTo(map);
    map.on('click', (e) => {
        const coords = e.lngLat.toArray();

        const authentication = new arcgisRest.ApiKey({
            key: apiKey
        });

        arcgisRest
            .reverseGeocode(coords, {
                authentication
            })
            .then((result) => {

                const lngLat = [result.location.x, result.location.y];
                // const label = `${result.address.LongLabel}<br>${lngLat[0].toLocaleString()}, ${lngLat[1].toLocaleString()}`;
                // new mapboxgl.Popup().setLngLat(lngLat).setHTML(label).addTo(map);
                $scope.$applyAsync(() => {
                    $scope.model.alamat = result.address.LongLabel;
                    $scope.model.longitude = lngLat[1];
                    $scope.model.latitude = lngLat[0];
                })
                console.log(result.address);
                $("#addLatLong").modal('hide');
            }).catch((error) => {
                alert("There was a problem using the reverse geocode service. See the console for details.");
                console.error(error);
            });
    })

    map.on('load', function() {
        map.addSource('maine', {
            'type': 'geojson',
            'data': helperServices.url + 'public/js/sorong.geojson'
        });

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': 'maine',
            'layout': {},
            'paint': {
                'fill-color': '#0080ff',
                'fill-opacity': 0.2
            }
        });
        map.addLayer({
            'id': 'outline',
            'type': 'line',
            'source': 'maine',
            'layout': {},
            'paint': {
                'line-color': 'red',
                'line-width': 1,
                'line-opacity': 0.25
            }
        });
    });

    $scope.showMap = () => {
        $("#addLatLong").modal('show');
        setTimeout(() => {
            map.resize();
        }, 300);
    }
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });
    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    wilayahServices.get().then(res => {
        res.kecamatans.forEach(element => {
            element.kelurahans = res.kelurahans.filter(x => x.kecamatanid == element.id);
        });
        $scope.kecamatans = res.kecamatans;
        console.log($scope.kecamatans);
    })
    $scope.save = (item) => {
        item.type = "Wisata";
        message.dialogmessage('Anda Yakin?', 'Ya', 'Tidak').then(x => {
            wisataServices.post(item).then(x => {
                message.confirm("Berhasil Menyimpan Data", true).then(x => {
                    document.location.href = helperServices.url + "admin/wisata";
                });
            })
        })
    }
}

function umkmController($scope, $http, helperServices, umkmServices) {
    $scope.datas = [];
    umkmServices.get().then(res => {
        $scope.datas = res;
    })

}

function tambahUmkmController($scope, $http, helperServices, wilayahServices, message, umkmServices) {
    $scope.model = {};
    $scope.tampilinput = false;
    $scope.kecamatans = [];
    $scope.kecamatan = {};
    const apiKey = "AAPKe04c23b9e1e14827a485e3c06a91369a44TROFRCnx1O_wzKtYcV81b7ApPKaBQwXH064LgF6Y-BxD_3-5yyVhpmIrVi1V19";

    const basemapEnum = "ArcGIS:Navigation";
    mapboxgl.accessToken = 'pk.eyJ1Ijoia3Jpc3R0MjYiLCJhIjoiY2txcWt6dHgyMTcxMzMwc3RydGFzYnM1cyJ9.FJYE8uVi-eVl_mH_DLLEmw';
    var map = new mapboxgl.Map({
        container: 'mapp',
        style: 'mapbox://styles/mapbox/streets-v11',
        // style: `https://basemaps-api.arcgis.com/arcgis/rest/services/styles/${basemapEnum}?type=style&token=${apiKey}`,
        center: [131.25478, -0.86210],
        zoom: 10
    });

    // var marker = new mapboxgl.Marker({
    //     color: "maroon",                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    //     draggable: true
    // }).setLngLat([131.25478, -0.86210])
    //     .addTo(map);
    map.on('click', (e) => {
        const coords = e.lngLat.toArray();

        const authentication = new arcgisRest.ApiKey({
            key: apiKey
        });

        arcgisRest
            .reverseGeocode(coords, {
                authentication
            })
            .then((result) => {

                const lngLat = [result.location.x, result.location.y];
                // const label = `${result.address.LongLabel}<br>${lngLat[0].toLocaleString()}, ${lngLat[1].toLocaleString()}`;
                // new mapboxgl.Popup().setLngLat(lngLat).setHTML(label).addTo(map);
                $scope.$applyAsync(() => {
                    $scope.model.alamat = result.address.LongLabel;
                    $scope.model.longitude = lngLat[1];
                    $scope.model.latitude = lngLat[0];
                })
                console.log(result.address);
                $("#addLatLong").modal('hide');
            }).catch((error) => {
                alert("There was a problem using the reverse geocode service. See the console for details.");
                console.error(error);
            });
    })

    map.on('load', function() {
        map.addSource('maine', {
            'type': 'geojson',
            'data': helperServices.url + 'public/js/sorong.geojson'
        });

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': 'maine',
            'layout': {},
            'paint': {
                'fill-color': '#0080ff',
                'fill-opacity': 0.2
            }
        });
        map.addLayer({
            'id': 'outline',
            'type': 'line',
            'source': 'maine',
            'layout': {},
            'paint': {
                'line-color': 'red',
                'line-width': 1,
                'line-opacity': 0.25
            }
        });
    });

    $scope.showMap = () => {
        $("#addLatLong").modal('show');
        setTimeout(() => {
            map.resize();
        }, 300);
    }
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });
    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    wilayahServices.get().then(res => {
        res.kecamatans.forEach(element => {
            element.kelurahans = res.kelurahans.filter(x => x.kecamatanid == element.id);
        });
        $scope.kecamatans = res.kecamatans;
        console.log($scope.kecamatans);
    })
    $scope.save = (item) => {
        item.type = "UMKM";
        message.dialogmessage('Anda Yakin?', 'Ya', 'Tidak').then(x => {
            umkmServices.post(item).then(x => {
                message.confirm("Berhasil Menyimpan Data", true).then(x => {
                    document.location.href = helperServices.url + "admin/umkm";
                });
            })
        })
    }
}

function usersController($scope, $http, helperServices, usersServices) {
    $scope.datas = [];
    usersServices.get().then(res => {
        $scope.datas = res;
    })

}