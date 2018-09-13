@extends('layout.admin-restaurant',['page_title'=>'Manager restaurant','active'=>'order'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Quản lý</label>
                <small>Đơn hàng</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i>Trang chủ</a></li>
                <li class="active">Đơn hàng</li>
            </ol>
        </div>
    </div>
    {{--<div class="row form-group" style="margin-top: 30px">--}}
    {{--<div class="col-md-12 col-xs-12">--}}
    {{--<a href="/restaurant/detailorder" class="btn btn-primary">Thêm đơ</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đơn hàng</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">userID</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng giá(vnd)</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Ngày update</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $key => $value)
                                    <tr>
                                        <th><?php

                                            echo $key + 1;
                                            ?>
                                        </th>
                                        <th scope="row">{{$value->userID}}</th>
                                        <th scope="row">{{$value->amount}}</th>
                                        <th scope="row"><?php
                                            echo number_format($value->totalPrice)
                                            ?></th>
                                        <th scope="row">
                                            @if($value->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đang chờ xử lý</h6>
                                            @elseif($value->status == 2)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đang chờ xác nhận</h6>
                                            @elseif($value->status == 3)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoàn thành</h6>
                                            @endif
                                        </th>
                                        <th scope="row">{{$value->created_at}}</th>
                                        <th scope="row">{{$value->updated_at}}</th>
                                        <td>
                                            @if($value->status==1)
                                                <a href="/restaurant/change-status?id={{$value->id}}&status=2"
                                                   onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"
                                                   class="btn btn-simple btn-outline-primary btn-finish">Xác nhận</a>
                                            @elseif($value->status==2)
                                                <a href="/restaurant/change-status?id={{$value->id}}&status=3"
                                                   class="btn btn-simple btn-outline-primary btn-finish"
                                                   onclick="return confirm('Bạn có chắc muốn  xác nhậnđơn hàng?')">Hoàn
                                                    thành</a>
                                            @endif
                                            @if($value->status==1)
                                                <a href="{{$value->id}}"
                                                   class="btn btn-simple btn-outline-danger btn-delete">Xóa</a>
                                                <a href="/restaurant/detailorder/?id={{$value->id}}"
                                                   class="btn btn-simple btn-outline-danger">Chi tiết</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->
    <script>
        $('.btn-delete').click(function () {
            var thisButton = $(this);
            swal({
                type: 'warning',
                title: 'Bạn có chắc muốn xoá đơn hàng này không?',
                text: "Bạn sẽ không thể khôi phục được dữ liệu",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonClass: 'Đồng ý',
                cancelButtonClass: 'Huỷ bỏ',
            }).then((result) => {
                var cateId = $(this).attr('href');
                $.ajax({
                    url: '/restaurant/orderaddress/' + cateId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        swal({
                            text: 'Thông tin đơn hàng đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        });
                        setTimeout(function () {
                            window.location.reload();
                        }, 2 * 1000);
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });

                $.ajax({
                    url: '/restaurant/detailorder/' + cateId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        swal({
                            text: 'Thông tin chi tiết đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });

                $.ajax({
                    url: '/restaurant/order/' + cateId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        swal({
                            text: 'Đơn hàng đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                        setTimeout(function () {
                            window.location.reload();
                        }, 2 * 1000);
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });
            });
            return false;
        });
    </script>
    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection