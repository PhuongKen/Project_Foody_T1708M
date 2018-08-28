@extends('layout.master',['page_title'=>'Lịch sử đơn hàng'])
@section('content')
    <div class="container container-edit">
        <div class="page-checkout" style="margin-top: 20px">
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
                                            {{$value->created_at}}
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
                                                <tr>
                                                    @foreach($order_detail[$value->id] as  $key1 =>$item)
                                                        <td class="product-remove">
                                                        </td>
                                                        <td>
                                                            <a href="product-detail-left-sidebar.html">
                                                                <img width="80" alt=""
                                                                     style="display: block;width: 100%;height: auto"
                                                                     src="/images/food/{{$item[0]->image}}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="product-detail-left-sidebar.html"
                                                               class="product-name">{{$item[0]->nameProduct}}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{number_format($item[0]->price)}} vnđ
                                                        </td>
                                                        <td class="column-4">
                                                            {{number_format($item[0]->amount)}}
                                                        </td>
                                                        <td class="text-center ">
                                                            {{$item[0]->amount}}
                                                            *{{$item[0]->price}}
                                                        </td>
                                                    @endforeach
                                                </tr>
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