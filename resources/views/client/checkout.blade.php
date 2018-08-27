@extends('layout.master',['page_title'=>'Thanh toán đơn hàng'])
@section('css')
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container container-edit">
        <div class="page-checkout" style="margin-top: 30px">
            <div class="row">
                @if(Auth::check())
                    <div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseOne">
                                            Địa chỉ
                                        </a>
                                    </h4>
                                </div>
                                <div>
                                    <div class="panel-body">
                                        <form action="/foody/gui-don-hang" id="formaddress" method="post"
                                              name="update-cart-form" class="form-horizontal">
                                            @csrf();
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Tên</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" name="phone" class="form-control">
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
                                                    <label>Địa chỉ chi tiết: (*) </label>
                                                    <input type="text" name="address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Ghi chú: (*) </label>
                                                    <input type="text" name="note" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Thời gian ăn:</label>
                                                    <input type="time" name="time"id="time" min="9:00" max="21:00">
                                                    <input type="date" id="date" min="27/8/2018" max="12/9/2018"
                                                           name="date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Gửi đơn hàng" class="btn pull-right">
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
                            <tr class="total">
                                <th>
                                    <strong>Tổng tiền</strong>
                                </th>
                                <td>
                                    <strong><span
                                                class="amount">{{\App\Cart::getCart()->getTotalMoneyString()}}</span></strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <h4 style="text-align: center">Bạn chưa đăng nhập, vui lòng đăng nhập để sử dụng<br><br><a
                                href="{{route('dangnhap')}}" style="color: #d33; text-decoration: none">Đăng nhập tại
                            đây</a></h4>
                @endif
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