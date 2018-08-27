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
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-left">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-1.png" alt="Intro Image"></p>
                                    <h4>Về nhà hàng</h4>
                                    <p>{{$restaurant->shortDescription}}</p>
                                    <p>{{$restaurant->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="effect">
                                <a href="#">
                                    <img class="img-responsive" src="/images/restaurant/{{$restaurant->avartar}}"
                                         alt="Intro Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-2.png" alt="Intro Image"></p>
                                    <h4>Liên hệ</h4>
                                    <p>Số điện thoại: {{$restaurant->phone}}</p>
                                    <div class="food-address">
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->wardName}}</span></a>,
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->districtName}}</span></a>,
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->provindName}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-2.png" alt="Intro Image"></p>
                                    <h4>Thời gian hoạt động</h4>
                                    <span style="color: #4cae4c">Giờ mở cửa: {{$restaurant->openTime}}</span><br>
                                    <span style="color: #d33">Giờ đóng cửa: {{$restaurant->closeTime}}</span>
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
                </div>
                <div class="block-content">
                    <div class="container">
                        <div class="products owl-theme owl-carousel">
                            @foreach($chunk_list as $chunk_lists)
                                <div class="item">
                                    @foreach($chunk_lists as $item)
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
                                                <div class="product-price">
                                                    @if($item->discount==0)
                                                        <span class="sale-price">{{number_format($item->price)}} vnd</span>
                                                    @else
                                                        <span class="sale-price">{{number_format($item->discount)}} vnd</span>
                                                        <span class="base-price">{{number_format($item->price)}} vnd</span>
                                                    @endif
                                                </div>

                                                <div class="product-rating">
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star on "></div>
                                                    <div class="star on"></div>
                                                    <div class="star"></div>
                                                </div>

                                                <div class="product-buttons">
                                                    <button class="btn-card" id="add-cart-{{$item->id}}">
                                                        Đặt món
                                                    </button>
                                                    {{--<a href="/foody/them-gio-hang?id={{$item->id}}&quantity=1">--}}
                                                    {{--Thêm vào giỏ hàng--}}
                                                    {{--</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection