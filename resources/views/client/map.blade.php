<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Map API</title>
    {{--<link rel="stylesheet" type="text/css" href="css/style.css">--}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('js/map.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <style>
        #data, #allData {
            display: none;
        }
        .container{
            height: 450px;
        }
        #map{
            width: 100%;
            height: 100%;
            border: 1px solid blue;
        }

    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">Những Nhà Hàng Gần Bạn Nhất</h1>
     <?php
    echo '<div id="data">' . $map . '</div>';
   ?>

    <div id="map"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY6H84yE2eLGCdVI6_lcauSxb2Tar0N6k&callback=loadMap"
        async defer></script>
</body>
</html>