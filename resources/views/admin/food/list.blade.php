@extends('layout.admin-restaurant',['page_title'=>'Manager restaurant','active'=>'food'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Quản lý</label>
                <small>Món ăn</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i>Trang chủ</a></li>
                <li class="active">Danh sách món ăn</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/restaurant/food/create" class="btn btn-primary">Tạo mới sản phẩm</a>
        </div>
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tạo mới</h3>
                </div>
                <div class="panel-body">
                    {{--@if($foods->count() > 0)--}}
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên</th>
                                        <th>Địa chỉ nhà hàng</th>
                                        <th>Giá tiền(vnd)</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Trạng thái</th>
                                        <th>Hoạt động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($foods as $key => $value)
                                        <tr>

                                            <td><?php
                                                    echo $key+1;
                                            ?>
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->restaurantID}}</td>
                                            <td><?php
                                                echo number_format($value->price)
                                                ?></td>
                                            <td>
                                                <div class="card"
                                                     style="width: 60px;height: 50px;background-image: url('/images/food/{{$value->avatar}}'); background-size: cover">
                                                </div>
                                            </td>
                                        <td>
                                                @if($value->status == 0)
                                                    <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                        Đã xóa</h6>
                                                    @else($item->status == 1)
                                                    <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                        Hoạt động</h6>
                                                    @endif
                                        </td>
                                            <td>
                                                <a href="/restaurant/food/{{$value->id}}"
                                                   class="btn btn-outline-success"
                                                   style="border: 1px solid #d33;">Xem</a>
                                                <a href="/restaurant/food/{{$value->id}}/edit"
                                                   class="btn btn-outline-primary">Sửa</a>
                                                <a href="{{$value->id}}"
                                                   class="btn btn-outline-danger btn-delete">Xoá</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{--@else--}}
                                    {{--<div class="alert alert-primary" role="alert">--}}
                                        {{--Hiện tại chưa có tài khoản nào, vui lòng <a title="Thêm mới user"--}}
                                                                                    {{--class="btn-link"--}}
                                                                                    {{--href="/admin/food/create">thêm sản phẩm</a> mới.--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->
    <script>
        $('.btn-delete').click(function () {
            var cateId = $(this).attr('href');
            var user_confirm = confirm('Bạn có chắc muốn xoá sản phẩm này không?');
            if (user_confirm) {
                $.ajax({
                    url: '/restaurant/food/' + cateId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        alert('Xoá thành công');
                        window.location.reload();
                    },
                    error: function () {
                        alert('Có lỗi xảy ra, vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
@endsection