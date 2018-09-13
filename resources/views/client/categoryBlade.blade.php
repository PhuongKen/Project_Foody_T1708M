@extends('layout.master',['page_title'=>'Tìm kiếm'])
@section('content')
    <div class="container container-edit">
        <div class="row" style="margin-top: 30px">
            <!-- Page Content -->
            @if($list_restaurant[0] == null)
                @if($idProvind == 0 && $idDistrict == 0)
                    <h4 style="text-align: center">Vui lòng chọn địa điểm trước khi lọc</h4>
                    <h4 style="text-align: center">
                        <a class="text-danger" href="/foody/danh-sach-nha-hang/{{'?categoryID='.$categoryName->id}}">Quay
                            lại</a>
                    </h4>
                @elseif($idProvind == 0)
                    <h4 style="text-align: center">Không tìm thấy kết quả nào với địa chỉ là
                        <b class="text-danger">"{{$districtName->name}}"</b>
                        thuộc danh mục
                        <b class="text-danger">"{{$categoryName->name}}"</b>
                    </h4>
                    <h4 style="text-align: center">
                        <a class="text-danger" href="/foody/danh-sach-nha-hang/{{'?categoryID='.$categoryName->id}}">Quay
                            lại</a>
                    </h4>
                @elseif($idDistrict == 0)
                    <h4 style="text-align: center">Không tìm thấy kết quả nào với địa chỉ là
                        <b class="text-danger">"{{$provindName->name}}"</b>
                        thuộc danh mục
                        <b class="text-danger">"{{$categoryName->name}}"</b>
                    </h4>
                    <h4 style="text-align: center">
                        <a class="text-danger" href="/foody/danh-sach-nha-hang/{{'?categoryID='.$categoryName->id}}">Quay
                            lại</a>
                    </h4>
                @else
                    <h4 style="text-align: center">Không tìm thấy kết quả nào với địa chỉ là
                        <b class="text-danger">"{{$districtName->name}}, {{$provindName->name}}"</b>
                        thuộc danh mục
                        <b class="text-danger">"{{$categoryName->name}}"</b>
                    </h4>
                    <h4 style="text-align: center">
                        <a class="text-danger" href="/foody/danh-sach-nha-hang/{{'?categoryID='.$categoryName->id}}">Quay
                            lại</a>
                    </h4>
                @endif
            @else
                <div id="center-column" class="col-lg-12 col-md-12">
                    <div class="product-category-page">
                        <!-- Nav Bar -->
                        <div class="products-bar">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <div class="gridlist-toggle" role="tablist">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#products-grid" data-toggle="tab"
                                                                  aria-expanded="true"><i
                                                            class="fa fa-th-large"></i></a>
                                            </li>
                                            <li><a href="#products-list" data-toggle="tab"
                                                   aria-expanded="false"><i
                                                            class="fa fa-bars"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="total-products">Gồm {{count($list_restaurant)}} nhà hàng</div>
                                </div>

                                <div class="col-md-8 col-xs-8">
                                    <div class="filter-bar">
                                        <form action="{{route('category')}}" method="get">
                                            <div class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" name="district"
                                                            name="district"
                                                            id="district">
                                                        @if($idDistrict == 0)
                                                            <option value="0">Tất cả Quận/Huyện</option>
                                                            @foreach($district as $d)
                                                                <option value="{{$d->id}}">{{$d->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="{{$districtName->id}}">{{$districtName->name}}</option>
                                                            @foreach($district as $d)
                                                                <option value="{{$d->id}}">{{$d->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" name="provind"
                                                            id="provind">
                                                        @if($idProvind == 0)
                                                            <option value="0">Tất cả Tỉnh/Thành Phố</option>
                                                            @foreach($provind as $p)
                                                                <option value="{{$p->id}}">{{$p->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="{{$provindName->id}}">{{$provindName->name}}</option>
                                                            @foreach($provind as $p)
                                                                <option value="{{$p->id}}">{{$p->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{$categoryID}}" name="categoryID">
                                            <input type="submit" value="Lọc"
                                                   style="padding: 4px; margin-right: 0">
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
            @endif
        </div>
    </div>
@endsection
@section('script')
    <script>
        var idProvind = $("#provind").val();
        // var search = $('#provind').attr('data-search1');
        $("#provind").change(function () {
            var idProvind = $(this).val();
            $.get("/client/district/" + idProvind, function (data) {
                $("#district").html(data);
            });
        });
    </script>
@endsection