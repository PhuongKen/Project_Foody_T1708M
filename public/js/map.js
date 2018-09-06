var map;
// var geocoder;

function loadMap() {
    var pune = {
        lat: 21.0278,
        lng: 105.8342
    };

    // Create a map object and specify the DOM element
    // for display.
    map = new google.maps.Map(document.getElementById('map'), {
        center: pune,
        zoom: 15
    });
    var marker = new google.maps.Marker({
        map: map,
        position: pune,
        title: "Khai"
    });
    loadMarker();
    // var allData =JSON.parse(document.getElementById('allData').innerHTML);
    // showAllColleges(allData);
}

function loadMarker() {
    // get marker data.
    var jsonData = JSON.parse(document.getElementById('data').innerHTML);
    console.log(jsonData);
    showLocationArray(jsonData);
}

function showLocationArray(arrayLocation) {
    for (var i = 0; i < arrayLocation.length; i++) {
        new google.maps.Marker({
            map: map,
            position: {
                lat: Number(arrayLocation[i].lat),
                lng: Number(arrayLocation[i].lng)
            },
            title: arrayLocation[i].name
        });
    }
}

$('#btn-show').click(function(){
    $.ajax({
        url: 'https://maps.googleapis.com/maps/api/geocode/json?address=' + $('#address').val() + '&key=AIzaSyAY6H84yE2eLGCdVI6_lcauSxb2Tar0N6k',
        method: 'GET',
        success:function(resp){
            $('#result-text').text(resp.results[0].geometry.location.lat + ' - ' + resp.results[0].geometry.location.lng);
        },
        error: function(){

        }
    });
});