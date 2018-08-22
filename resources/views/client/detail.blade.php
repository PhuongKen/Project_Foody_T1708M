@extends('layout.master',['page_title'=>'Chi tiết món ăn'])
@section('css')

@endsection

@section('content')
    <div class="container container-edit">
        <div class="product-detail">
            <div class="products-block layout-5">
                <div class="product-item">
                    <div class="product-title">
                        Organic Strawberry Fruits
                    </div>
                    <div class="row">
                        <div class="product-left col-md-5 col-sm-5 col-xs-12">
                            <div class="product-image vertical">
                                <div class="main-image">
                                    <img class="img-responsive" src="/images/foody/2.jpg" alt="Product Image">
                                </div>
                                <div class="thumb-images">
                                    <img class="img-responsive" src="/images/foody/33.jpg" alt="Product Image">
                                    <img class="img-responsive" src="/images/foody/3.jpg" alt="Product Image">
                                    <img class="img-responsive" src="/images/foody/7.jpg" alt="Product Image">
                                    <img class="img-responsive" src="/images/foody/30.jpg" alt="Product Image">
                                </div>
                            </div>
                        </div>

                        <div class="product-right col-md-7 col-sm-7 col-xs-12">
                            <div class="product-info">
                                <div class="product-price">
                                    <span class="sale-price">80000VND</span>
                                    <span class="base-price">90000VND</span>
                                </div>

                                <div class="product-short-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna,
                                    commodo ut molestie vitae, feugiat tincidunt ligula. Nam gravida nulla in convallis
                                    condimentum.
                                </div>

                                <div class="product-add-to-cart border-bottom">
                                    <div class="product-quantity">
                                        <span class="control-label">QTY :</span>
                                        <div class="qty">
                                            <div class="input-group">
                                                <input type="text" name="qty" value="1" data-min="1">
                                                <span class="adjust-qty">
																<span class="adjust-btn plus">+</span>
																<span class="adjust-btn minus">-</span>
															</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            <span>Add To Cart</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-review border-bottom">
                                    <div class="item">
                                        <div class="product-quantity">
                                            <span class="control-label">Review :</span>
                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-extra">
                                    <div class="item">
                                        <span class="control-label">Review :</span><span
                                                class="control-label">E-02154</span>
                                    </div>
                                    <div class="item">
                                        <span class="control-label">Categories :</span>
                                        <a href="#" title="Vegetables">Vegetables,</a>
                                        <a href="#" title="Fruits">Fruits,</a>
                                        <a href="#" title="Apple">Apple</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-tab">
                        <!-- Tab Navigation -->
                        <div class="tab-nav">
                            <ul>
                                <li>
                                    <span>MÔ TẢ</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content">
                            <!-- Description -->
                            <div role="tabpanel" class="tab-pane fade in active" id="description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                    justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                            </div>

                            <!-- Product Tag -->
                            <div role="tabpanel" class="tab-pane fade" id="additional-information">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                    justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="products-block related-products item-4">
            <div class="block-title">
                <h2 class="title">Món ăn liên quan</h2>
            </div>

            <div class="block-content">
                <div class="products owl-theme owl-carousel">
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
                            <span class="sale-price">800000đ</span>
                            <span class="base-price">900000đ</span>
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
                            <div class="star"></div>
                        </div>

                        <div class="product-price">
                            <span class="sale-price">800000đ</span>
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
                                <img src="/images/foody/31.jpg" alt="Product Image">
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
                            <span class="sale-price">800000đ</span>
                            <span class="base-price">900000đ</span>
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
                            <div class="star"></div>
                        </div>

                        <div class="product-price">
                            <span class="sale-price">800000đ</span>
                            <span class="base-price">900000đ</span>
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
                            <div class="star"></div>
                        </div>

                        <div class="product-price">
                            <span class="sale-price">800000đ</span>
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
@endsection