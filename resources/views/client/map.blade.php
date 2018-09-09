{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
@extends('layout.master',['page_title'=>'Xem với map'])
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="css/style.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/map.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.min.css')}}">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"--}}
    {{--integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
@endsection
{{--</head>--}}
{{--<body>--}}

{{--@section('css')--}}
@section('content')
    <div class="container-edit container">
        <div class="row" style="margin-top: 30px">

            <input id="data" style="display: none;" value="{{$map}}">
            <div id="map"></div>
            <div class="control-left-wrapper">
                <div class="zoom-in" id="zoom-in"><i class="fa fa-plus"></i></div>
                <div class="zoom-out" id="zoom-out"><i class="fa fa-minus"></i></div>
                <div class="current-location" id="current-location"><i class="fa fa-paper-plane"></i></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY6H84yE2eLGCdVI6_lcauSxb2Tar0N6k"></script>
    <script src="{{asset('js/map.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="{{asset('js/infobox.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/markerclusterer.js')}}" type="text/javascript"></script>
@endsection
{{--</body>--}}
{{--</html>--}}