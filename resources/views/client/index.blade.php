@extends('layout.master',['page_title'=>'Trang chủ'])
@section('css')

@endsection
@section('content')
    <div id="content" class="site-content">
        <!-- Slideshow -->
        <div class="section slideshow">
            <div class="container">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="/foody/chi-tiet-mon-an">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-1.jpg" alt="Slideshow Image">
                        </a>
                        <a href="/foody/chi-tiet-mon-an">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-2.jpg" alt="Slideshow Image">
                        </a>
                        <a href="/foody/chi-tiet-mon-an">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-3.jpg" alt="Slideshow Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product - Our Products -->
        <div class="section products-block product-tab tab-2">
            <div class="block-title">
                {{--<div class="sub-title">Fresh From Our Farm</div>--}}
                <h2 class="title">Danh mục sản phẩm</h2>
            </div>

            <div class="block-content">
                <div class="container">
                    <!-- Tab Navigation -->
                    <div class="tab-nav">
                        <ul>
                            <li class="active">
                                <a data-toggle="tab" href="#all-products">
                                    <img src="/images/foody/product-category-0.png" alt="All Product">
                                    <span>Tất cả nhà hàng</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#vegetables">
                                    <img src="/images/foody/product-category-1.png" alt="Vegetables">
                                    <span>Sang trọng</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#fruits">
                                    <img src="/images/foody/product-category-2.png" alt="Fruits">
                                    <span>Buffet</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#bread">
                                    <img src="/images/foody/product-category-3.png" alt="Bread">
                                    <span>Nhà hàng</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#juices">
                                    <img src="/images/foody/product-category-4.png" alt="Juices">
                                    <span>Ăn chay</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tea">
                                    <img src="/images/foody/product-category-5.png" alt="Tea">
                                    <span>Tiệc</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="container">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <!-- All Products -->
                            <div role="tabpanel" class="tab-pane fade in active" id="all-products">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address[$key]->provindName}}</span></a>
                                                    </div>

                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Vegetables -->
                            <div role="tabpanel" class="tab-pane fade" id="vegetables">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list1 as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address1[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address1[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address1[$key]->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- fruits -->
                            <div role="tabpanel" class="tab-pane fade" id="fruits">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list2 as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address2[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address2[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address2[$key]->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- bread -->
                            <div role="tabpanel" class="tab-pane fade" id="bread">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list3 as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Juices -->
                            <div role="tabpanel" class="tab-pane fade" id="juices">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list4 as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                        href="#"><span>{{$address3[$key]->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Tea -->
                            <div role="tabpanel" class="tab-pane fade" id="tea">
                                <div class="products owl-theme owl-carousel">
                                    @foreach($chunk_list5 as $chunk_lists)
                                        <div class="product-group">
                                            @foreach($chunk_lists as $key => $item)
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}">
                                                            <img src="/images/restaurant/{{$item->avartar}}"
                                                                 alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="food-address2">
                                                        <a href="/foody/chi-tiet-nha-hang/{{'?id='.$item->id}}"
                                                           class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">{{$item->name}}</b>
                                                        </a>
                                                    </div>
                                                    <div class="food-address">
                                                        <a class="food-address1"
                                                           href="#"><span>{{$address3[$key]->wardName}}</span></a>,
                                                        <a class="food-address1"
                                                           href="#"><span>{{$address3[$key]->districtName}}</span></a>,
                                                        <a class="food-address1"
                                                           href="#"><span>{{$address3[$key]->provindName}}</span></a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="star on"></div>
                                                        <div class="star on"></div>
                                                        <div class="star on "></div>
                                                        <div class="star on"></div>
                                                        <div class="star"></div>
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
        </div>
    </div>
@endsection
@section('script')

@endsection