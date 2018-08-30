@extends('layout.master',['page_title'=>'Giỏ hàng'])
@section('content')
    <div class="container container-edit">
        <form action="/foody/nhap-thong-tin-don-hang" method="post" name="update-cart-form">
            {{csrf_field()}}
            @method('PUT')
            <div class="page-cart" style="margin-top: 30px">
                <div class="table-responsive">
                    <table class="cart-summary table table-bordered">
                        <thead>
                        <tr>
                            <th class="width-20">&nbsp;</th>
                            <th class="width-80 text-center">Ảnh</th>
                            <th>Tên</th>
                            <th class="width-100 text-center">Gía hiện tại</th>
                            <th class="width-100 text-center">Số lượng</th>
                            <th class="width-100 text-center">Tổng</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($cart->items as $item)
                            <tr>
                                <td class="product-remove">
                                    <a title="Remove this item" class="remove"
                                       href="/foody/xoa-san-pham/{{'?id='.$item->food->id}}">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="product-detail-left-sidebar.html">
                                        <img width="80" alt="{{$item->food->name}}"
                                             style="display: block;width: 100%;height: auto"
                                             src="/images/food/{{$item->food->avatar}}">
                                    </a>
                                </td>
                                <td>
                                    <a href="product-detail-left-sidebar.html"
                                       class="product-name">{{$item->food->name}}</a>
                                </td>
                                <td class="text-center">
                                    {{$item->food->discountPriceWithFormat}}
                                </td>
                                <td class="column-4">
                                    <div class="flex-w bo5 of-hidden w-size17">
                                        <button class="btn-num-product-down  flex-c-m size7">
                                            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="size8 m-text18 t-center num-product"
                                               type="text" name="foods[{{$item->food->id}}]"
                                               value="{{$item->quantity}}" readonly>

                                        <button class="btn-num-product-up  flex-c-m size7">
                                            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-center ">
                                    {{$item->getTotalPriceWithFormat()}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr class="cart-total">
                            <td rowspan="3" colspan="3"></td>
                            <td colspan="2" class="text-right">Tổng tiền:</td>
                            <td colspan="1" class="text-center">{{\App\Cart::getCart()->getTotalMoneyString()}}</td>
                        </tr>
                    </table>
                </div>

                <div class="checkout-btn">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Nhập thông tin đơn hàng" class="btn pull-right">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $('.btn-num-product-down').on('click', function (e) {
            e.preventDefault();
            var numProduct = Number($(this).next().val());
            if (numProduct > 1) $(this).next().val(numProduct - 1);
        });

        $('.btn-num-product-up').on('click', function (e) {
            e.preventDefault();
            var numProduct = Number($(this).prev().val());
            $(this).prev().val(numProduct + 1);
        });
    </script>
@endsection