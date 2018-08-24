@extends('layout.master',['page_title'=>'Danh mục'])
@section('content')
    <div class="container container-edit">
        <div class="row" style="margin-top: 30px">
            <!-- Page Content -->
            <div id="center-column" class="col-lg-12 col-md-12">
                <div class="product-category-page">
                    <!-- Nav Bar -->
                    <div class="products-bar">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="gridlist-toggle" role="tablist">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#products-grid" data-toggle="tab"
                                                              aria-expanded="true"><i class="fa fa-th-large"></i></a>
                                        </li>
                                        <li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i
                                                        class="fa fa-bars"></i></a></li>
                                    </ul>
                                </div>

                                <div class="total-products">There are 12 products</div>
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <div class="filter-bar">
                                    <form action="#" class="pull-right">
                                        <div class="select">
                                            <select class="form-control">
                                                <option value="">Sort By</option>
                                                <option value="1">Price: Lowest first</option>
                                                <option value="2">Price: Highest first</option>
                                                <option value="3">Product Name: A to Z</option>
                                                <option value="4">Product Name: Z to A</option>
                                                <option value="5">In stock</option>
                                            </select>
                                        </div>
                                    </form>
                                    <form action="#" class="pull-right">
                                        <div class="select">
                                            <select class="form-control">
                                                <option value="">Relevance</option>
                                                <option value="1">Price: Lowest first</option>
                                                <option value="2">Price: Highest first</option>
                                                <option value="3">Product Name: A to Z</option>
                                                <option value="4">Product Name: Z to A</option>
                                                <option value="5">In stock</option>
                                            </select>
                                        </div>
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
                                    @foreach($list_restaurant as $list)
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-item">
                                                <div class="product-image">
                                                    <a href="/foody/chi-tiet-nha-hang/{{'?id='.$list->id}}">
                                                        <img class="img-responsive" src="/images/restaurant/{{$list->avartar}}"
                                                             alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="food-address2">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b class="food-address4">{{$list->name}}</b>
                                                    </a>
                                                </div>
                                                <div class="food-address">
                                                    <a class="food-address1" href="#"><span>{{$address[0]->wardName}}</span></a>,
                                                    <a class="food-address1" href="#"><span>{{$address[0]->districtName}}</span></a>,
                                                    <a class="food-address1" href="#"><span>{{$address[0]->provindName}}</span></a>
                                                </div>

                                                <div class="product-rating">
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star on "></div>
                                                    <div class="star on"></div>
                                                    <div class="star"></div>
                                                </div>
                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <span>Đặt hàng</span>
                                                    </a>
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
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img class="img-responsive" src="/images/foody/4.jpg"
                                                         alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="sale-price">80000000đ</span>
                                                    <span class="base-price">90000000đ</span>
                                                </div>

                                                <div class="product-stock">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                                </div>

                                                <div class="product-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                </div>

                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
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

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img class="img-responsive" src="/images/foody/14.jpg"
                                                         alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="sale-price">80000000đ</span>
                                                    <span class="base-price">90000000đ</span>
                                                </div>

                                                <div class="product-stock">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                                </div>

                                                <div class="product-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                </div>

                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
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

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img class="img-responsive" src="/images/foody/17.jpg"
                                                         alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="sale-price">80000000đ</span>
                                                    <span class="base-price">90000000đ</span>
                                                </div>

                                                <div class="product-stock">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                                </div>

                                                <div class="product-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                </div>

                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
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

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img class="img-responsive" src="/images/foody/8.jpg"
                                                         alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="sale-price">$80.00</span>
                                                    <span class="base-price">$90.00</span>
                                                </div>

                                                <div class="product-stock">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                                </div>

                                                <div class="product-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                </div>

                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
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

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img class="img-responsive" src="/images/foody/9.jpg"
                                                         alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="sale-price">80000000đ</span>
                                                    <span class="base-price">90000000đ</span>
                                                </div>

                                                <div class="product-stock">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                                </div>

                                                <div class="product-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                </div>

                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
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
        </div>
    </div>
@endsection