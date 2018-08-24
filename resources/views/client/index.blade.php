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
                                    <span>Tất cả món ăn</span>
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
                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g10/93772/prof/s640x400/foody-mobile-tim-jpg-652-636129899200456707.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g10/93772/prof/s640x400/foody-mobile-tim-jpg-652-636129899200456707.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g12/113148/prof/s640x400/foody-mobile-top-jpg-658-636142988127466793.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g11/109552/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-tong1-j-180618115710.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g10/94191/prof/s640x400/foody-mobile-top1-jpg-973-635742117477155490.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g11/105101/prof/s640x400/foody-mobile-maison-1-mb-jpg-617-635857130884455566.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g8/73662/prof/s640x400/foody-mobile-el-gaucho-jpg.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g20/195742/prof/s640x400/foody-mobile-rico-jpg-419-636178309399268457.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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
                                </div>
                            </div>

                            <!-- Vegetables -->
                            <div role="tabpanel" class="tab-pane fade" id="vegetables">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="food-address2">
                                                <a href="#" class="text-dark" target="_blank"
                                                   title="HAT Snack Rounds - Fast Food">
                                                    <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte Hotel
                                                        Hanoi </b>
                                                </a>
                                            </div>
                                            <div class="food-address">
                                                <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/3.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/20.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/23.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/15.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                            <!-- Bread -->
                            <div role="tabpanel" class="tab-pane fade" id="bread">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-group">
                                        <div class="product-item product-item1">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/14.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/17.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                    <div class="product-group">
                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/8.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/9.jpg" alt="Product Image">
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
                                                <span class="sale-price">300000đ</span>
                                                <span class="base-price">400000đ</span>
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

                                        <div class="product-item product-item1">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/15.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/10.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/33.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/22.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/20.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/23.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/30.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/21.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/6.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/3.jpg" alt="Product Image">
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

                            <!-- Juices -->
                            <div role="tabpanel" class="tab-pane fade" id="juices">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-group">
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
                                                    <img src="/images/foody/14.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/17.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/8.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/9.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/15.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/10.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/33.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/22.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/20.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/23.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/30.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/21.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/6.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/3.jpg" alt="Product Image">
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

                            <!-- Tea -->
                            <div role="tabpanel" class="tab-pane fade" id="tea">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-group">
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
                                                    <img src="/images/foody/14.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/17.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/8.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/9.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/15.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/10.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/33.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/22.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/20.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/23.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/30.jpg" alt="Product Image">
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

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="/images/foody/21.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/6.jpg" alt="Product Image">
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
                                                    <img src="/images/foody/3.jpg" alt="Product Image">
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection