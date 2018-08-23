@extends('layout.master',['page_title'=>'Thanh toán đơn hàng'])
@section('content')
    <div class="container container-edit">
        <div class="page-checkout" style="margin-top: 30px">
            <div class="row">
                <div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapseOne">
                                        Address
                                    </a>
                                </h4>
                            </div>
                            <div>
                                <div class="panel-body">
                                    <form action="index.html" id="formaddress" method="post" class="form-horizontal">

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Tên</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Số điện thoại</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Tỉnh\Thành Phố</label>
                                                <select name="provind" id="provind">
                                                    @foreach($provind as $p)
                                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                                    @endforeach
                                                </select>
                                                &nbsp;&nbsp;
                                                <label>Quận\Huyện\Thành Phố</label>
                                                <select name="district" id="district">
                                                    @foreach($district as $d)
                                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                                    @endforeach
                                                </select>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>Xã/Phường/Thị trấn</label>
                                                <select name="ward" id="ward">
                                                    @foreach($ward as $w)
                                                        <option value="{{$w->id}}">{{$w->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Địa chỉ chi tiết: </label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" value="Save" class="btn pull-right">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4 class="title">Đơn hàng</h4>
                    <table class="table cart-total">
                        <tbody>
                        <tr class="cart-subtotal">
                            <th>
                                <strong>Tổng đơn hàng</strong>
                            </th>
                            <td>
                                <strong><span class="amount">$431</span></strong>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>
                                Giao hàng
                            </th>
                            <td>
                                Giao hàng miễn phí<input type="hidden" value="free_shipping" class="shipping-method"
                                                         name="shipping_method">
                            </td>
                        </tr>
                        <tr class="total">
                            <th>
                                <strong>Tổng tiền</strong>
                            </th>
                            <td>
                                <strong><span class="amount">$431</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Lấy id provind và set district theo id provind
        var idProvind = $("#provind").val();
        $.get("/admin/district/" + idProvind, function (data) {
            $("#district").html(data);
        });
        $("#provind").change(function () {
            var idProvind = $(this).val();
            $.get("/admin/district/" + idProvind, function (data) {
                $("#district").html(data);
            });
        });
        // Lấy id distict và set district theo id ward
        var idDistrict = $("#district").val();
        $.get("/admin/ward/" + idDistrict, function (data) {
            $("#ward").html(data);
        });
        $("#district").change(function () {
            var idDistrict = $(this).val();
            $.get("/admin/ward/" + idDistrict, function (data) {
                $("#ward").html(data);
            });
        });
    </script>
@endsection