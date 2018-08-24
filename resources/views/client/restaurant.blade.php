@extends('layout.master',['page_title'=>'Chi tiết nhà hàng'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/restaurantClient.css')}}">
@endsection
@section('content')
    <!-- Main Menu -->
    <div id="main-menu">
        <ul class="menu">
            <li class="dropdown">
                <a href="index.html" title="Homepage">Home</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="index.html" title="Homepage 1">Homepage 1</a></li>
                        <li><a href="home-2.html" title="Homepage 2">Homepage 2</a></li>
                        <li><a href="home-3.html" title="Homepage 3">Homepage 3</a></li>
                        <li><a href="home-4.html" title="Homepage 4">Homepage 4</a></li>
                        <li><a href="home-5.html" title="Homepage 5">Homepage 5</a></li>
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="product-grid-left-sidebar.html" title="Product">Product</a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="has-image">
                            <img src="img/product/product-category-1.png" alt="Product Category Image">
                            <a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
                        </li>
                        <li class="has-image">
                            <img src="img/product/product-category-2.png" alt="Product Category Image">
                            <a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
                        </li>
                        <li class="has-image">
                            <img src="img/product/product-category-3.png" alt="Product Category Image">
                            <a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
                        </li>
                        <li class="has-image">
                            <img src="img/product/product-category-4.png" alt="Product Category Image">
                            <a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
                        </li>
                        <li class="has-image">
                            <img src="img/product/product-category-5.png" alt="Product Category Image">
                            <a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" title="Page">Page</a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown-submenu">
                            <a href="product-grid-left-sidebar.html" title="Product List">Product List</a>
                            <div class="dropdown-menu level2">
                                <ul>
                                    <li><a href="product-grid-left-sidebar.html" title="Product Grid - Left Sidebar">Product Grid - Left Sidebar</a></li>
                                    <li><a href="product-grid-right-sidebar.html" title="Product Grid - Right Sidebar">Product Grid - Right Sidebar</a></li>
                                    <li><a href="product-grid-full-width.html" title="Product Grid - Full Width">Product Grid - Full Width</a></li>
                                    <li><a href="product-list-left-sidebar.html" title="Product List - Left Sidebar">Product List - Left Sidebar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="product-detail-left-sidebar.html" title="Product List">Product Detail</a>
                            <div class="dropdown-menu level2">
                                <ul>
                                    <li><a href="product-detail-left-sidebar.html" title="Product Detail - Left Sidebar">Product Detail - Left Sidebar</a></li>
                                    <li><a href="product-detail-full-width-1.html" title="Product List - Full Width 1">Product Detail - Full Width 1</a></li>
                                    <li><a href="product-detail-full-width-2.html" title="Product List - Full Width 2">Product Detail - Full Width 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="product-cart.html" title="Cart">Cart</a>
                        </li>
                        <li>
                            <a href="product-checkout.html" title="Checkout">Checkout</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" title="User">User</a>
                            <div class="dropdown-menu level2">
                                <ul>
                                    <li><a href="user-login.html" title="Login">Login</a></li>
                                    <li><a href="user-register.html" title="Register">Register</a></li>
                                    <li><a href="#" title="My Account">My Account</a></li>
                                    <li><a href="#" title="My Wishlists">My Wishlists</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="page-404.html" title="Page 404">Page 404</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="blog-list-left-sidebar-1.html">Blog</a>
                <div class="dropdown-menu">
                    <ul class="has-sub">
                        <li><a href="blog-list-left-sidebar-1.html" title="Blog List - Left Sidebar 1">Blog List - Left Sidebar 1</a></li>
                        <li><a href="blog-list-left-sidebar-2.html" title="Blog List - Left Sidebar 2">Blog List - Left Sidebar 2</a></li>
                        <li><a href="blog-grid-full-width.html" title="Blog Grid - Full Width">Blog Grid - Full Width</a></li>
                        <li><a href="blog-detail.html" title="Blog Detail">Blog Detail</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="page-about-us.html">About Us</a>
            </li>

            <li>
                <a href="page-contact.html">Contact</a>
            </li>
        </ul>
    </div>
    </header>


    <!-- Main Content -->
    <div id="content" class="site-content">
        <!-- Slideshow -->
        <div class="section slideshow">
            <div class="tiva-slideshow-wrapper">
                <div id="tiva-slideshow" class="nivoSlider">
                    <a href="#">
                        <img class="img-responsive" src="img/slideshow/home1-slideshow-1.jpg" alt="Slideshow Image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="img/slideshow/home1-slideshow-2.jpg" alt="Slideshow Image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="img/slideshow/home1-slideshow-3.jpg" alt="Slideshow Image">
                    </a>
                </div>
            </div>
        </div>


        <!-- Intro -->
        <div class="section intro">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="intro-header">
                            <h3>Welcome To FreshMart</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="intro-left">
                            <div class="intro-item">
                                <p><img src="img/intro-icon-1.png" alt="Intro Image"></p>
                                <h4>Always Fresh</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="intro-item">
                                <p><img src="img/intro-icon-3.png" alt="Intro Image"></p>
                                <h4>Super Healthy</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="effect">
                            <a href="#">
                                <img class="img-responsive" src="img/intro-1.png" alt="Intro Image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="intro-right">
                            <div class="intro-item">
                                <p><img src="img/intro-icon-2.png" alt="Intro Image"></p>
                                <h4>100% Natural</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="intro-item">
                                <p><img src="img/intro-icon-4.png" alt="Intro Image"></p>
                                <h4>Premium Quality</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Product - Deals Of The Day -->
        <div class="section products-block deals-of-day show-hover nav-color layout-2">
            <div class="block-title">
                <h2 class="title">Deals of <span>The Day</span></h2>
                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
            </div>

            <div class="block-content">
                <div class="products owl-theme owl-carousel">
                    <div class="product-item">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 product-left">
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

                                    <div class="product-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit....</div>

                                    <div class="product-countdown" data-date="2018/10/30">
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

                            <div class="col-md-6 col-xs-12 product-right">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/18.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 product-left">
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
                                        <div class="star on"></div>
                                    </div>

                                    <div class="product-price">
                                        <span class="sale-price">$60.00</span>
                                        <span class="base-price">$78.00</span>
                                    </div>

                                    <div class="product-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit....</div>

                                    <div class="product-countdown" data-date="2018/11/22">
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

                            <div class="col-md-6 col-xs-12">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/7.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 product-left">
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
                                        <span class="base-price">$90.00</span>
                                    </div>

                                    <div class="product-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit....</div>

                                    <div class="product-countdown" data-date="2018/11/04">
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

                            <div class="col-md-6 col-xs-12">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/40.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 product-left">
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
                                        <span class="base-price">$90.00</span>
                                    </div>

                                    <div class="product-intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit....</div>

                                    <div class="product-countdown" data-date="2018/12/10">
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

                            <div class="col-md-6 col-xs-12">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/11.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Product - Best Sellers -->
        <div class="section products-block product-tab nav-color show-hover nav-round best-sellers">
            <div class="block-title">
                <h2 class="title">Best <span>Sellers</span></h2>
                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
            </div>

            <div class="block-content">
                <!-- Tab Navigation -->
                <div class="tab-nav">
                    <ul>
                        <li class="active">
                            <a data-toggle="tab" href="#all-products">
                                <img src="img/product/product-category-0.png" alt="All Product">
                                <span>All Products</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#vegetables">
                                <img src="img/product/product-category-1.png" alt="Vegetables">
                                <span>Vegetables</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#fruits">
                                <img src="img/product/product-category-2.png" alt="Fruits">
                                <span>Fruits</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#bread">
                                <img src="img/product/product-category-3.png" alt="Bread">
                                <span>Bread</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#juices">
                                <img src="img/product/product-category-4.png" alt="Juices">
                                <span>Juices</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tea">
                                <img src="img/product/product-category-5.png" alt="Tea">
                                <span>Tea</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- All Products -->
                    <div role="tabpanel" class="tab-pane fade in active" id="all-products">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                    <!-- Vegetables -->
                    <div role="tabpanel" class="tab-pane fade" id="vegetables">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="/images/foody/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                    <!-- Fruits -->
                    <div role="tabpanel" class="tab-pane fade" id="fruits">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                    <!-- Bread -->
                    <div role="tabpanel" class="tab-pane fade" id="bread">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                    <!-- Juices -->
                    <div role="tabpanel" class="tab-pane fade" id="juices">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                    <!-- Tea -->
                    <div role="tabpanel" class="tab-pane fade" id="tea">
                        <div class="products owl-theme owl-carousel">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$120.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="sale-price">$96.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/5.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="img/product/6.jpg" alt="Product Image">
                                    </a>
                                </div>

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
                                    <span class="base-price">$90.00</span>
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


        <!-- Banners -->
        <div class="section banners-block">
            <div class="row margin-0">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-1.png" alt="Banner 1">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-2.png" alt="Banner 2">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                    <div class="banner-item effect">
                        <a href="#">
                            <img class="img-responsive" src="/images/foody/home4-slideshow-3.png" alt="Banner 3">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Product - New Arrivals -->
        <div class="section products-block new-arrivals layout-3">
            <div class="block-title">
                <h2 class="title">New <span>Arrivals</span></h2>
                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
            </div>

            <div class="block-content">
                <div class="container">
                    <div class="products owl-theme owl-carousel">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="/images/foody/2.jpg" alt="Product Image">
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
                                        <img src="https://images.foody.vn/res/g11/109552/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-tong1-j-180618115710.jpg" alt="Product Image">
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
                                        <span class="sale-price">$68.00</span>
                                        <span class="base-price">$76.00</span>
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
                                        <img src="https://images.foody.vn/res/g11/109552/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-tong1-j-180618115710.jpg" alt="Product Image">
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
                                        <span class="sale-price">$85.00</span>
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
                                        <img src="https://images.foody.vn/res/g11/109552/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-tong1-j-180618115710.jpg" alt="Product Image">
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
                                        <span class="sale-price">$52.00</span>
                                        <span class="base-price">$58.00</span>
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
                                        <img src="/images/foody/5.jpg" alt="Product Image">
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
                                        <span class="sale-price">$45.00</span>
                                        <span class="base-price">$48.00</span>
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
                                        <img src="/images/foody/6.jpg" alt="Product Image">
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
                                        <img src="img/product/10.jpg" alt="Product Image">
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
                                        <img src="img/product/11.jpg" alt="Product Image">
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
                                        <img src="img/product/12.jpg" alt="Product Image">
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


        <!-- Testimonial -->
        <div class="section testimonial">
            <div class="container">
                <div class="row">
                    <div class="testimonial-wrap owl-theme owl-carousel">
                        <div class="item">
                            <div class="image"><img src="img/testimonial-1.png" alt=""></div>
                            <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
                            <div class="name">WILLIAM JAMES</div>
                            <div class="job">Hairstyle</div>
                        </div>

                        <div class="item">
                            <div class="image"><img src="img/testimonial-2.png" alt=""></div>
                            <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
                            <div class="name">WILLIAM JAMES</div>
                            <div class="job">Hairstyle</div>
                        </div>

                        <div class="item">
                            <div class="image"><img src="img/testimonial-3.png" alt=""></div>
                            <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
                            <div class="name">WILLIAM JAMES</div>
                            <div class="job">Hairstyle</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Product - Category -->
        <div class="section product-category">
            <div class="block-title">
                <div class="sub-title">Discover Our Products</div>
                <h2 class="title">Shop By <span>Cagegories</span></h2>
            </div>

            <div class="block-content">
                <div class="container">
                    <div class="categories owl-theme owl-carousel">
                        <div class="item">
                            <img src="img/product/category-1.jpg" alt="Category 1">
                            <div class="title">Fruits</div>
                            <div class="category-products">
                                <ul>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">Apples & Bananas</a></li>
                                    <li><a href="#">Strawberry</a></li>
                                    <li><a href="#">Pomegranate</a></li>
                                    <li><a href="#" class="color">View All</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/product/category-2.jpg" alt="Category 2">
                            <div class="title">Vegetable</div>
                            <div class="category-products">
                                <ul>
                                    <li><a href="#">Beans & Brinjals</a></li>
                                    <li><a href="#">Broccoli & Cauliflower</a></li>
                                    <li><a href="#">Chilies, Garlic & Ginger</a></li>
                                    <li><a href="#">Root Vegetables</a></li>
                                    <li><a href="#" class="color">View All</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/product/category-3.jpg" alt="Category 3">
                            <div class="title">Juices</div>
                            <div class="category-products">
                                <ul>
                                    <li><a href="#">Orange Juices</a></li>
                                    <li><a href="#">Apple Juices</a></li>
                                    <li><a href="#">Strawberry Juices</a></li>
                                    <li><a href="#">Pomegranate Juices</a></li>
                                    <li><a href="#" class="color">View All</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/product/category-4.jpg" alt="Category 4">
                            <div class="title">Tea And Coffee</div>
                            <div class="category-products">
                                <ul>
                                    <li><a href="#">Organic Tea</a></li>
                                    <li><a href="#">Masala Teas</a></li>
                                    <li><a href="#">Flavored Tea</a></li>
                                    <li><a href="#">Coffee</a></li>
                                    <li><a href="#" class="color">View All</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/product/category-5.jpg" alt="Category 5">
                            <div class="title">Bread</div>
                            <div class="category-products">
                                <ul>
                                    <li><a href="#">Soda & rye</a></li>
                                    <li><a href="#">Wholemeal & brown</a></li>
                                    <li><a href="#">Small loaves</a></li>
                                    <li><a href="#">Seeded & grains</a></li>
                                    <li><a href="#" class="color">View All</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Partners -->
        <div class="section partners">
            <div class="block-content">
                <div class="container">
                    <div class="partners-wrap owl-theme owl-carousel">
                        <a href="#"><img src="img/partner-1.jpg" alt="Partner 1"></a>
                        <a href="#"><img src="img/partner-2.jpg" alt="Partner 2"></a>
                        <a href="#"><img src="img/partner-3.jpg" alt="Partner 3"></a>
                        <a href="#"><img src="img/partner-4.jpg" alt="Partner 4"></a>
                        <a href="#"><img src="img/partner-5.jpg" alt="Partner 5"></a>
                        <a href="#"><img src="img/partner-6.jpg" alt="Partner 6"></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Latest News -->
        <div class="section latest-news">
            <div class="block-title">
                <div class="sub-title">From Our Blog</div>
                <h2 class="title">Latest <span>News</span></h2>
            </div>

            <div class="block-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="zoom-effect">
                                        <img src="img/blog/blog-1.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-time">
                                        <span><i class="zmdi zmdi-comments"></i>13 comment</span>
                                        <span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
                                    </div>
                                    <div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
                                    <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
                                    <div class="readmore"><a href="blog-detail.html">Read more</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="zoom-effect">
                                        <img src="img/blog/blog-2.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-time">
                                        <span><i class="zmdi zmdi-comments"></i>13 comment</span>
                                        <span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
                                    </div>
                                    <div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
                                    <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
                                    <div class="readmore"><a href="blog-detail.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection