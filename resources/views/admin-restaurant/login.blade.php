<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylefoody1.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jslider.css')}}">

    {{--<!-- Template CSS -->--}}
    <link rel="stylesheet" href="{{asset('css/stylefoody.css')}}">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
<div class="container">
    @if(Session::has('thatbai'))
        <div class="alert alert-danger">{{Session::get('thatbai')}}</div>
    @endif
    <div class="login-page">
        <div class="login-form form">
            <div class="block-title">
                <h2 class="title"><span>Đăng nhập</span></h2>
            </div>

            <form action="{{route('dangnhapadminrestaurant')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="" name="email">
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" value="" name="password">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>