<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$page_title}}</title>

    <meta name="keywords" content="Organic, Fresh Food, Farm Store">
    <meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
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
    <link rel="stylesheet" href="{{asset('css/util.css')}}">
    {{--<!-- Template CSS -->--}}
    <link rel="stylesheet" href="{{asset('css/stylefoody.css')}}">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/examples.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-stars.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="home home-4">
<div id="all">
    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="header-top">
                <div class="row align-items-center">
                    <!-- Header Left -->
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <!-- Main Menu -->
                        <div id="main-menu">
                            <ul class="menu">
                                <li class="dropdown">
                                    <a href="/foody/trang-chu" title="Trang chủ">Trang chủ</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" title="Product">Danh mục</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            @foreach($categories as $c)
                                                <li class="has-image">
                                                    <img src="/images/foody/product-category-1.png"
                                                         alt="Product Category Image">
                                                    <a href="/foody/danh-sach-nha-hang/{{'?categoryID='.$c->id}}"
                                                       title="Vegetables">{{$c->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="/foody/ve-chung-toi">Về chúng tôi</a>
                                </li>

                                <li>
                                    <a href="/foody/lien-he">Liên hệ</a>
                                </li>

                                <li>
                                    <form id="nearBy" action="{{route('nearBy')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" id="lat" name="lat">
                                        <input type="hidden" id="lng" name="lng">
                                        <input id="nearBy" type="button"  value="Gần tôi" style="border: none; background: none;text-transform: uppercase; word-spacing: 2px;
                                          font-weight: 700; font-family: 'Playfair Display', serif; color: #444">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Header Center -->
                    <div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/foody/trang-chu">
                                <img class="img-responsive" src="/images/foody/anhfoody2.png" alt="Logo">
                            </a>
                        </div>

                        <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                    </div>


                    <!-- Header Right -->
                    <div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
                        <!-- Search -->
                        <div class="form-search">
                            <form action="{{route('search')}}" method="get">
                                <input type="text" name="search" class="form-input" placeholder="Tìm kiếm">
                                <button type="submit" class="fa fa-search"></button>
                            </form>
                        </div>

                        <!-- Cart -->
                        <div class="block-cart dropdown">
                            <div class="cart-title ">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <span class="cart-count" id="cart-count">{{\App\Cart::getTotalItem()}}</span>
                            </div>

                            <div class="dropdown-content">
                                <div class="cart-content" style="overflow: scroll; height: 400px; width: 430px">
                                    <table>
                                        <tbody id="header-cart-wrapitem">
                                        @if(count(\App\Cart::getCart()->items)>0)
                                            @foreach(\App\Cart::getCart()->items as $item)
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->food->id}}">
                                                            <img src="/images/food/{{$item->food->avatar}}"
                                                                 alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->food->id}}">{{$item->food->name}}</a>
                                                        </div>
                                                        <div>
                                                            {{$item->quantity}} x <span
                                                                    class="product-price">{{$item->food->discountPriceString}}</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove"
                                                           href="/foody/xoa-san-pham/{{'?id='.$item->food->id}}">
                                                            <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="total">
                                                <td>Tổng giá:</td>
                                                <td colspan="2"
                                                    id="header-cart-total">{{\App\Cart::getCart()->getTotalMoneyString()}}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3">
                                                    <div class="cart-button">
                                                        <a class="btn btn-primary" href="/foody/xem-gio-hang"
                                                           title="View Cart">Xem đơn hàng</a>
                                                        <a class="btn btn-primary" href="/foody/nhap-thong-tin-don-hang"
                                                           title="Checkout">Gửi đơn hàng</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else

                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- My Account -->
                        <div class="my-account dropdown toggle-icon">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="dropdown-menu">
                                @if(Auth::check())
                                    <div class="item">
                                        <a href="/edit-user/{{Auth::user()->id}}"
                                           title="Log in to your customer account"><i class="fa fa-cog"></i>Tài
                                            khoản của {{Auth::user()->name}}</a>
                                    </div>
                                    <div class="item">
                                        <a href="/foody/lich-su-don-hang"
                                           title="Log in to your customer account"><i class="fa fa-cog"></i>
                                            Lịch sử đơn hàng của{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="item">
                                        <a href="{{route('dangxuat')}}" title="Log in to your customer account"><i
                                                    class="fa fa-cog"></i>Đăng xuất
                                        </a>
                                    </div>
                                @else
                                    <div class="item">
                                        <a href="/dang-nhap" title="Log in to your customer account"><i
                                                    class="fa fa-sign-in-alt"></i>Đăng nhập</a>
                                    </div>
                                    <div class="item">
                                        <a href="/dang-ki" title="Register Account"><i class="fa fa-user"></i>Đăng
                                            ký</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
@section('content')
@show
<!--End contain-->
    <!-- Footer -->
    <footer id="footer">
        <div class="footer">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block text">
                                <div class="block-content">
                                    <a href="index.html" class="logo-footer">
                                        <img src="/images/foody/anhfoody2.png" alt="Logo">
                                    </a>

                                    <div class="contact">
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="item-right">
                                                <span>Số 8A Tôn Thất Thuyết, Mỹ Đình II, Nam Từ Liêm, Hà Nội</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="item-right">
                                                <span>01634924847<br>0976892793</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <i class="fa fa-envelope-square"></i>
                                            </div>
                                            <div class="item-right">
                                                <span><a href="mailto:support@domain.com" style="color: #444;">Adminfoody@gmail.com</a><br><a
                                                            href="mailto:contact@domain.com" style="color: #444;">foodyVN@gmail.com</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block instagram">
                                <h2 class="block-title" style="color: #333">Ảnh tiêu biểu</h2>

                                <div class="block-content">
                                    <div class="row margin-0">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-1.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-2.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-3.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-4.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-5.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-6.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-7.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
                                            <a href="#">
                                                <img src="/images/foody/instagram-8.png" alt="Instagram Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block newsletter">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29792.159347848636!2d105.77726410000001!3d21.031888999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1534934074486"
                                        width="370" height="200" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="block social">
                                <h2 class="block-title" style="color: #333">Follow Us</h2>

                                <div class="block-content" style="text-align: center">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Copyright -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="copyright">Copyright © 2018 Foody VIET NAM.</div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
                        <div class="payment">
                            <img src="/images/foody/payment.png" alt="Payment">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Go Up button -->
    <div class="go-up">
        <a href="#">
            <i class="fas fa-arrow-up"></i>
        </a>
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

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/tmpl.js')}}"></script>
<script src="{{asset('js/jquery.dependClass-0.1.js')}}"></script>
<script src="{{asset('js/draggable-0.1.js')}}"></script>
<script src="{{asset('js/jquery.slider.js')}}"></script>
<script src="{{asset('js/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<!-- Template CSS -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
<script src="{{asset('js/examples.js')}}"></script>
<script src="{{asset('js/jquery.barrating.js')}}"></script>
@yield('script')
<script>
    $('#nearBy').click(function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                // alert(lat);
                $('#lat').val(lat);
                $('#lng').val(lng);
                $('#nearBy').submit();
            });
        } else {
            alert('vui lòng cho phép sử dụng vị trí của bạn.')
        }
    });

    @if(count(\App\Cart::getCart()->items)==0)
    $('.cart-content').height('auto');
    $('.else').display('none');
    @endif

</script>
</body>

</html>