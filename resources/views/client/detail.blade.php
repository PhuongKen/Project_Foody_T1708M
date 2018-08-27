@extends('layout.master',['page_title'=>'Chi tiết món ăn'])
@section('css')
@endsection

@section('content')
    <div class="container container-edit">
        <div class="product-detail">
            <div class="products-block layout-5">
                <div class="product-item">

                    <div class="product-title">
                        {{$food->name}}
                    </div>
                    <div class="row">
                        <div class="product-left col-md-5 col-sm-5 col-xs-12">
                            <div class="product-image vertical">
                                <div class="main-image">
                                    <img class="img-responsive" src="/images/foody/{{$food->avartar}}" alt="Product Image">
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
                                    @if($food->promotion_price == 0)
                                        <span class="sale-price">{{$food->price}} (VND)</span>
                                    @else($food->promotion_price > 0)
                                        <span class="sale-price">{{$food->promotion_price}} (VND)</span>
                                        <span class="base-price">{{$food->price}}</span>
                                     @endif
                                </div>

                                <div class="product-short-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna,
                                    commodo ut molestie vitae, feugiat tincidunt ligula. Nam gravida nulla in convallis
                                    condimentum.
                                </div>

                                <div class="product-add-to-cart border-bottom">
                                    <span class="control-label">QTY :</span>
                                    <div class="product-quantity">
                                        <div class="qty">
                                            <div class="input-group">
                                                <input type="text" name="qty" id="qtyvalue" value="1" data-min="1">
                                                <span class="adjust-qty">
																<span class="adjust-btn plus btn-plus">+</span>
																<span class="adjust-btn minus btn-minus">-</span>
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
                                        <span class="control-label">Restaurant</span>
                                        {{--<a href="#" title="Vegetables">{{$restaurant->name}}</a>--}}
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
                    {{--@foreach($chunk_list as $chunk_list)--}}

                    <div class="product-item">
                        @foreach($list_relate as $item)
                        <div class="product-image">
                            <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->id}}">
                                <img src="/images/foody/{{$item->avartar}}" alt="Product Image">
                            </a>
                        </div>

                        <div class="product-title">
                            <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->id}}">
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
                            @if($item->promotion_price == 0)
                                <span class="sale-price">{{$item->price}} (VND)</span>
                            @else($item->promotion_price > 0)
                                <span class="sale-price">{{$item->promotion_price}} (VND)</span>
                                <span class="base-price">{{$item->price}}</span>
                            @endif
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
                            @endforeach
                    </div>
                   {{--@endforeach--}}

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var count = 1;
        // var qty = $('#qtyvalue').val();
        var countTotal = $('#qtyvalue');

        $('.btn-plus').click(function () {
            count++;
            countTotal.val(count);
        });

        $('.btn-minus').click(function () {
            if (count > 1) {
                count--;
                countTotal.val(count);
            }
        });
    </script>
@endsection