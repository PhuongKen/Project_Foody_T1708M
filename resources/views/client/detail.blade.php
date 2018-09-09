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
                                    <img class="img-responsive" src="/images/food/{{$food->avatar}}"
                                         alt="Product Image">
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
                                <div class="product-add-to-cart border-bottom">

                                    <div class="product-buttons">
                                        <a class="add-to-cart btn-card" href="#" id="add-cart-{{$food->id}}">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            <span>Đặt món</span>
                                        </a>
                                    </div>
                                </div>
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
                    @foreach($list_relate as $item)
                        <div class="product-item">
                            <div class="product-image">
                                <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->id}}">
                                    <img src="/images/food/{{$item->avatar}}" alt="Product Image">
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
                                @if($item->discount==0)
                                    <span class="sale-price">{{number_format($item->price)}}
                                        vnd</span>
                                @else
                                    <span class="sale-price">{{number_format($item->discount)}}
                                        vnd</span>
                                    <span class="base-price">{{number_format($item->price)}}
                                        vnd</span>
                                @endif
                            </div>

                            <div class="product-buttons">
                                <button class="btn-card" id="add-cart-{{$item->id}}">
                                    Đặt món
                                </button>
                            </div>
                        </div>
                        {{--@endforeach--}}
                    @endforeach
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