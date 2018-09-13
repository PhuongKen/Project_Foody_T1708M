@extends('layout.master',['page_title'=>'Nhà hàng gần tôi'])
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/map.css')}}">
@endsection
@section('content')
    <div class="container container-edit">
        <div class="row" style="margin-top: 30px">
            <!-- Page Content -->
            @if($list_restaurant -> isNotEmpty())
                <div id="center-column" class="col-lg-12 col-md-12">
                    <div class="product-category-page">
                        <!-- Nav Bar -->
                        <div class="products-bar">
                            <div class="row">
                                <div class="col-md-9 col-xs-9">
                                    <div class="gridlist-toggle" role="tablist">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#products-grid" data-toggle="tab"
                                                                  aria-expanded="true"><i
                                                            class="fa fa-th-large"></i></a>
                                            </li>
                                            <li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i
                                                            class="fa fa-bars"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="total-products">Gồm {{count($list_restaurant)}} nhà hàng</div>
                                </div>

                                <div class="col-md-3 col-xs-3">
                                    <div class="filter-bar">
                                        <form action="{{route('gantoi')}}" method="get">
                                            <div class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" name="categoryID">
                                                        <option value="0">Tất cả danh mục</option>
                                                        @foreach($categories as $c)
                                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="lat" value="{{$lat}}">
                                            <input type="hidden" name="lng" value="{{$lng}}">
                                            <input type="submit" value="Lọc" style="padding: 4px;">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content">
                            <!-- Products Grid -->
                            <div class="tab-pane active" id="products-grid">
                                <div class="products-block">
                                    <div class="row">
                                        @foreach($list_restaurant as $value)
                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$value->id}}">
                                                            <img class="img-responsive imageReponsive"
                                                                 src="/images/restaurant/{{$value->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>
                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$value->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$value->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                           href="#"><span>{{$value->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                           href="#"><span>{{$value->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                           href="#"><span>{{$value->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Products List -->
                            <div class="tab-pane" id="products-list">
                                <div class="products-block layout-5">
                                    @foreach($list_restaurant as $value)
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive"
                                                                 src="/images/restaurant/{{$value->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                {{$value->name}}
                                                            </a>
                                                        </div>
                                                        <div class="food-address">
                                                            <a class="food-address1"
                                                               href="#"><span>{{$value->wardName}}</span></a>,
                                                            <a class="food-address1"
                                                               href="#"><span>{{$value->districtName}}</span></a>,
                                                            <a class="food-address1"
                                                               href="#"><span>{{$value->provindName}}</span></a>
                                                        </div>
                                                        <div>
                                                            <span style="color: #4cae4c">Giờ mở cửa: {{$value->openTime}}</span><br>
                                                            <span style="color: #d33">Giờ đóng cửa: {{$value->closeTime}}</span>
                                                        </div>
                                                        <div class="product-description">
                                                            {{$value->shortDescription}}
                                                        </div>
                                                        <div class="product-rating">
                                                            <div class="glyphicon glyphicon-star on"></div>
                                                            <div class="glyphicon glyphicon-star on"></div>
                                                            <div class="glyphicon glyphicon-star on "></div>
                                                            <div class="glyphicon glyphicon-star on"></div>
                                                            <div class="glyphicon glyphicon-star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Bar -->
                        <div class="pagination-bar">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="text">Chỉ lấy ra {{count($list_restaurant)}} nhà hàng trong tổng
                                        số {{count($countRestaurant)}} nhà hàng
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    {{$list_restaurant->appends(Request::all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h4 style="text-align: center">Rất tiếc không có nhà hàng nào gần bạn</h4>
                <h4 style="text-align: center">
                    <a href="{{ url()->previous()}}" style="color: #d33">Quay lại</a>
                </h4>
            @endif
        </div>
        <div class="row" style="margin-top: 20px">
            <h3 style="text-align: center">Xem với map</h3>
        </div>
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
    <script>
        $('.nearBy').click(function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    // alert(lat);
                    $('.lat').val(lat);
                    $('.lng').val(lng);
                    $('.nearBy').submit();
                });
            } else {
                alert('vui lòng cho phép sử dụng vị trí của bạn.')
            }
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY6H84yE2eLGCdVI6_lcauSxb2Tar0N6k"></script>
    <script src="{{asset('js/map.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="{{asset('js/infobox.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/markerclusterer.js')}}" type="text/javascript"></script>
@endsection