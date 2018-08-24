@extends('layout.master',['page_title'=>'Chi tiết nhà hàng'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/restaurantClient.css')}}">
@endsection
@section('content')
    <!-- Product - New Arrivals -->
    <div class="home-1">
        <div class="container container-edit">
            <!-- Intro -->
            <div class="section intro">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="intro-header">
                                <h3>Chào mừng tới {{$restaurant->name}}</h3>
                                <p>{{$restaurant->shortDescription}}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-left">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-1.png" alt="Intro Image"></p>
                                    <h4>Luôn tươi</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>

                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-3.png" alt="Intro Image"></p>
                                    <h4>Super Healthy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="effect">
                                <a href="#">
                                    <img class="img-responsive" src="/images/foody/intro-1.png" alt="Intro Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-2.png" alt="Intro Image"></p>
                                    <h4>100% Tự nhiên</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>

                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-4.png" alt="Intro Image"></p>
                                    <h4>Premium Quality</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product - New Arrivals -->
            <div class="section products-block new-arrivals layout-3">
                <div class="block-title">
                    <h2 class="title">Thực đơn <span>Nhà hàng</span></h2>
                    <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
                </div>

                <div class="block-content">
                    <div class="container">
                        <div class="products owl-theme owl-carousel">
                            <div class="item">
                                @foreach($list_food as $item)
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="/images/food/{{$item->avatar}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    {{$item->name}}
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                {{--<span class="sale-price">$35.00</span>--}}
                                                <span class="base-price">{{$item->price}}</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#" style="line-height: 100px">
                                                    <span>Đặt món</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="item">
                                @foreach($list_food as $item)
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="/images/food/{{$item->avatar}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    {{$item->name}}
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                {{--<span class="sale-price">$35.00</span>--}}
                                                <span class="base-price">{{$item->price}}</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="{{route('themvaogiohang',$item->id)}}" style="line-height: 100px">
                                                    <span>Đặt món</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/7.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$72.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/8.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$50.00</span>
                                            <span class="base-price">$60.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/9.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$80.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/10.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$35.00</span>
                                            <span class="base-price">$55.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/11.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$53.00</span>
                                            <span class="base-price">$70.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="/images/foody/12.jpg" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-info">
                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$42.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection