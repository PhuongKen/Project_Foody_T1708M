$(document).ready(function() {
    'user strick'
    var map, marker, infowindow, markerCluster;
    var infowindow3 = new google.maps.InfoWindow();
    var markers_created = [];
    var myDiv = document.getElementById('map');
    var myLatLng = new google.maps.LatLng(21.0287616,105.7817144);
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var directionDistance = new google.maps.DistanceMatrixService;

    function initMap() {
        map = new google.maps.Map(myDiv, {
            center: myLatLng,
            zoom: 13,
            zoomControl: false,
            streetViewControl: false,
            scrollwheel: true,
        });
        marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'hello word!',
            icon: '/images/map/icon.png',
            draggable: true
        });

        var contentString = '<div id="container">' +
            '<h4>Vị trí của tôi</h4>' +
            '</div>';

        infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxwidth: 300,
        });

        marker.addListener('click', function(){
            infowindow.open(map, marker);
        });

        map.addListener('click', function(){
            infowindow.close();
        });
        google.maps.event.addDomListener(marker, 'dragstart', function(event){
            // console.log('bat dau di chuyen marker', event);
        });

        google.maps.event.addDomListener(marker, 'dragend', function(event){
            // console.log('da dat marker o vi tri moi', event, event.latLng.lat(), event.latLng.lng());
            var newMyLatLng = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng());
            getNewMarker();
            map.setCenter(newMyLatLng);
            map.setZoom(15);

        });

        var customMapType = new google.maps.StyledMapType([
            { styler: [{hanoi: '#D2E4C8'}]},
            {
                featureType: 'water',
                styler: [{color: '#599459'}]
            }
        ]);
        var customMapTypeId = "custom_style";
        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);
        geolocate();
    };

    function ZoomControl(){
        var zoomInButton = document.getElementById('zoom-in');
        var zoomOutButton = document.getElementById('zoom-out');
        google.maps.event.addDomListener(zoomInButton, 'click', function(){
            map.setZoom(map.getZoom() + 1);
        });
        google.maps.event.addDomListener(zoomOutButton, 'click', function(){
            map.setZoom(map.getZoom() - 1);
        });
    }
    function GeolocationControl(){
        var geoButton = document.getElementById('current-location');
        google.maps.event.addDomListener(geoButton, 'click', geolocate);
    };
    function geolocate(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position);
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
                marker.setPosition(pos);
                map.setZoom(15);
            });
        } else {
            alert('vui lòng cho phép sử dụng vị trí của bạn.')
        }
    };

    function getNewMarker(){
        var markers = JSON.parse(document.getElementById('data').getAttribute('value'));
        console.log(markers);
        for(var i = markers.length -1; i >= 0; i--){
            var item = createMarkers(markers[i]);
            markers_created.push(item);
            // console.log(markers_created);
        }
        createClusterer(markers_created);
    };

    function createClusterer(markers_created){

        var clusterStyles = [
            {
                textColor: 'white',
                url: '/images/map/m1.png',
                height: 55,
                width: 55
            },
            {
                textColor: 'white',
                url: '/images/map/m2.png',
                height: 55,
                width: 55
            },
            {
                textColor: 'white',
                url: '/images/map/m3.png',
                height: 65,
                width: 65
            }
        ];

        var mcOptions = {gridSize: 50, maxZoom: 20, textColor: 'white', zoomOnClick: false, styles: clusterStyles};

        markerCluster = new MarkerClusterer(map, markers_created, mcOptions);
        google.maps.event.addDomListener(markerCluster, 'click', function(cluster){
            var mk = cluster.getMarkers(); console.log(mk);
        });
        // google.maps.event.addListener(markerCluster, 'click', function(cluster){
        //   var mk = cluster.getMarkers(); console.log(mk);
        //   // if(map.getZoom() < 17){
        //   //   map.setZoom(map.getZoom() + 1);
        //   //   map.setCenter(cluster.getCenter());
        //   // }
        // })
    }

    function createMarkers(pos){

        var icon = {
            url: '/images/restaurant/' +pos.avartar,
            scaledSize: new google.maps.Size(40, 40), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0), // anchor
        };
        $('.iconMaker').css('border','3px solid black');
        var newMarker = new google.maps.Marker({
            position: pos,
            map: map,
            icon: icon,
            animation: google.maps.Animation.DROP
        });


        var contentString2 = '<div id="container-infobox">' +
            '<h6><a  href="/foody/chi-tiet-nha-hang/?id='+pos.id+'">' +pos.name+ '</a></h6>' +
            '<a href="/foody/chi-tiet-nha-hang/?id='+pos.id+'"><div style="background: url('+"/images/restaurant/"+ pos.avartar + ') no-repeat center; width:180px; height: 130px">'+
            '</div></a>'+ '<h5 style="text-align: center;"><a href="#" class="direction" style="color: #dd3333;">Chỉ đường</a></h5>' +
            '</div>';
        var options = {
            content: contentString2
            ,disableAutoPan: false
            ,maxWidth: 0
            ,pixelOffset: new google.maps.Size(-160, -260)
            ,zIndex: null
            ,boxStyle: {
                width: "200px"
            }
            ,closeBoxMargin: "10px 2px 2px 2px"
            ,closeBoxURL: "https://www.google.com/intl/en_us/mapfiles/close.gif"
            ,infoBoxClearance: new google.maps.Size(1, 1)
            ,isHidden: false
            ,pane: "floatPane"
            ,enableEventPropagation: false
        };

        var ib = new InfoBox(options);

        ib.addListener('domready',function(){
            $('.direction').on('click', function() {
                calculateAndDisplayRoute(newMarker);
            });
        });

        lastWindow=null;

        newMarker.addListener('click', function(){
            if (lastWindow) lastWindow.close();
            ib.open(map, newMarker);
            lastWindow=ib;
        });
        google.maps.event.addListener(map, 'click', function() {
            if(ib){
                ib.close();
            }
        });
        return newMarker;
    };

    function calculateAndDisplayRoute(newMarker) {
        var middle;
        directionsDisplay.setMap(map);
        directionsDisplay.setOptions({suppressMarkers: true});
        directionsService.route({
            origin: marker.getPosition(),
            destination: newMarker.getPosition(),
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
                var m = Math.ceil((response.routes[0].overview_path.length)/2);
                middle = response.routes[0].overview_path[m];
                directionDistance.getDistanceMatrix({
                    origins: [marker.getPosition()],
                    destinations: [newMarker.getPosition()],
                    travelMode: 'DRIVING'
                }, function(response, status) {
                    if (status === 'OK') {
                        // console.log(response);
                        var originList = response.originAddresses;
                        var destinationList = response.originAddresses;
                        for (var i = 0; i < originList.length; i++) {
                            var results = response.rows[i].elements;
                            for (var j = 0; j < results.length; j++) {
                                var element = results[j];
                                var dt = element.distance.text;
                                var dr = element.duration.text;
                            };
                        };

                        var content = '<div>' + dt +
                            '<br>' +dr+'</div>';

                        infowindow3.setContent(content);
                        infowindow3.setPosition(middle);
                        infowindow3.open(map);
                        return middle;
                    };
                });
            } else {
                window.alert('Không thể lấy ra quãng đường và thời gian.' + status);
            }
        });
    }
    initMap();
    ZoomControl();
    GeolocationControl();
    getNewMarker();
    // loadMarker();
});