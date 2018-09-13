{{--@extends('layout.master',['page_title'=>'404 Không tìm thấy.'])--}}
{{--@section('css')--}}
        <!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Không tìm thấy.</title>
    <link rel="stylesheet" href="{{asset('error/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/jslider.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('error/css/app.css')}}">
</head>
<body>
<div id="all">
    <!-- Main Content -->
    <div id="content" class="site-content page-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 page-left">
                    <div class="image">
                        <img class="img-responsive" src="/error/img/404-left.png" alt="Image 404">
                    </div>
                    <div class="title">Chúng tôi rất tiếc khi xảy ra sự cố</div>
                    <div class="content">Nếu sự cố vẫn tiếp diễn, vui lòng ấn vào trở lại để quay về</div>
                    <a class="btn btn-primary" href="{{\Illuminate\Support\Facades\URL::previous()}}"><i
                                class="fa fa-home"
                                aria-hidden="true"></i><span>Trở lại.</span></a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 page-right">
                    <div class="image">
                        <img class="img-responsive" src="/error/img/404-right.jpg" alt="Image 404">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
<!-- Vendor JS -->
<script src="{{asset('error/js404/jquery.js')}}"></script>
<script src="{{asset('error/js404/bootstrap.js')}}"></script>
<script src="{{asset('error/js404/jquery.countdown.js')}}"></script>
<script src="{{asset('error/js404/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('error/js404/owl.carousel.min.js')}}"></script>
<script src="{{asset('error/js404/tmpl.js')}}"></script>
<script src="{{asset('error/js404/jquery.dependClass-0.1.js')}}"></script>
<script src="{{asset('error/js404/draggable-0.1.js')}}"></script>
<script src="{{asset('error/js404/jquery.slider.js')}}"></script>
<script src="{{asset('error/js404/jquery.elevatezoom.js')}}"></script>

<!-- Template CSS -->
<script src="{{asset('error/js404/main.js')}}"></script>
{{--<script>--}}
{{--window.setTimeout(function () {--}}
{{--window.location.href = "/admin/user";--}}
{{--}, 5000);--}}
{{--</script>--}}
</body>
</html>