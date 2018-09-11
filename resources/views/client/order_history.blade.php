@extends('layout.master',['page_title'=>'Lịch sử đơn hàng'])
@section('content')
    <div class="container container-edit">
        <div class="page-checkout" style="margin-top: 20px">
            <h4 style="text-align: center">Lịch sử đơn hàng</h4>
            @foreach($order as $key => $value)
                <div class="row">
                    <div class="checkout-left col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                    <div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        {{--<h4>Đơn hàng của bạn</h4>--}}
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle"
                                           data-parent="#accordion">
                                            {{$value->created_at}}, {{$order_detail[$value->id][0]->nameRestaurant}}
                                            , Trạng thái:
                                            @if($order_detail[$value->id][0]->st == 1)
                                                <span style="color: #d33">đang xử lý</span>
                                            @elseif($order_detail[$value->id][0]->st == 2)
                                                <span style="color: #d33">đã xác nhận</span>
                                            @elseif($order_detail[$value->id][0]->st == 3)
                                                <span style="color: #d33">đã hoàn thành</span>
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="page-cart" style="margin-top: 30px">
                                        <div class="table-responsive">
                                            <table class="cart-summary table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th class="width-20">&nbsp;</th>
                                                    <th class="width-80 text-center">Ảnh</th>
                                                    <th>Tên</th>
                                                    <th class="width-100 text-center">Gía</th>
                                                    <th class="width-100 text-center">Số lượng</th>
                                                    <th class="width-100 text-center">Tổng</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($order_detail[$value->id] as  $key1 =>$item)
                                                    {{--{{$item->nameProduct}}--}}
                                                    <tr>
                                                        <td class="product-remove">
                                                        </td>
                                                        <td>
                                                            <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->idDetail}}">
                                                                <img width="80" alt=""
                                                                     style="display: block;width: 100%;height: auto"
                                                                     src="/images/food/{{$item->image}}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->idDetail}}"
                                                               class="product-name">{{$item->nameProduct}}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{number_format($item->price)}} vnđ
                                                        </td>
                                                        <td class="column-4">
                                                            {{$item->amount}}
                                                        </td>
                                                        <td class="text-center multi">
                                                            <?php
                                                            $amount = $item->amount;
                                                            $price = $item->price;
                                                            $data = $amount * $price;
                                                            echo number_format($data) . " vnđ";
                                                            ?>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr class="cart-total">
                                                    <td rowspan="3" colspan="3"></td>
                                                    <td colspan="2" class="text-right">Tổng tiền:</td>
                                                    <td colspan="1"
                                                        class="text-center">{{number_format($value->totalPrice)}} vnđ
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection