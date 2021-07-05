angular.module('adminctrl', [])
    .controller('pageController', pageController)
    .controller('homeController', homeController)
    ;
function pageController($scope) {
    $scope.Title = "Page Header";
}
function homeController($scope) {
    $scope.tampilinput = false;
    mapboxgl.accessToken = 'pk.eyJ1Ijoia3Jpc3R0MjYiLCJhIjoiY2txcWt6dHgyMTcxMzMwc3RydGFzYnM1cyJ9.FJYE8uVi-eVl_mH_DLLEmw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [131.25478, -0.86210],
        zoom: 13
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
    userLocation.on('geolocate', function (a) {
        directions.setOrigin([a.coords.longitude, a.coords.latitude]);
        console.log(a)
    });

    var marker = new mapboxgl.Marker({
        color: "maroon",
        draggable: true
    }).setLngLat([131.25478, -0.86210])
        .addTo(map);

}