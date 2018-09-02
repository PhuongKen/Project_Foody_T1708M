@extends('layout.master',['page_title'=>'Tìm kiếm'])
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
                                <div class="col-md-6 col-xs-6">
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

                                    <div class="total-products">There are 12 products</div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="filter-bar">
                                        <form action="{{route('diadiem')}}" method="get">
                                            <div class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" name="district"
                                                            name="district"
                                                            id="district">
                                                        <option value="0">Tất cả</option>
                                                        @foreach($district as $d)
                                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" name="provind"
                                                            id="provind">
                                                        <option value="0">Tất cả</option>
                                                        @foreach($provind as $p)
                                                            <option value="{{$p->id}}">{{$p->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{$search}}" name="search">
                                            <input type="submit" value="Lọc" style="padding: 4px; margin-right: 0">
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
                                        @foreach($list_restaurant as $key => $value)
                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$value->id}}">
                                                            <img class="img-responsive"
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
                                                        {{--<a class="food-address1"--}}
                                                        {{--href="#"><span>{{$address[$key]->wardName}}</span></a>,--}}
                                                        {{--<a class="food-address1"--}}
                                                        {{--href="#"><span>{{$address[$key]->districtName}}</span></a>,--}}
                                                        {{--<a class="food-address1"--}}
                                                        {{--href="#"><span>{{$address[$key]->provindName}}</span></a>--}}
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
                                    @foreach($list_restaurant as $key => $value)
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
                                                            {{--<a class="food-address1"--}}
                                                            {{--href="#"><span>{{$address[$key]->wardName}}</span></a>,--}}
                                                            {{--<a class="food-address1"--}}
                                                            {{--href="#"><span>{{$address[$key]->districtName}}</span></a>,--}}
                                                            {{--<a class="food-address1"--}}
                                                            {{--href="#"><span>{{$address[$key]->provindName}}</span></a>--}}
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
                                    <div class="text">Showing 1-12 of 20 item(s)</div>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="pagination">
                                        <ul class="page-list">
                                            <li><a href="#" class="prev">Previous</a></li>
                                            <li><a href="#" class="current">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#" class="next">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h4 style="text-align: center">Không tìm thấy kết quả nào với từ khóa <b
                            class="text-danger">"{{$search}}"</b></h4>
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