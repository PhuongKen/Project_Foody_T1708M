@extends('layout.admin-restaurant',['page_title'=>'Manager restaurant','active'=>''])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Quản lí</label>
                <small>nhà hàng</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i>Trang chủ</a></li>
                <li class="active">Đơn hàng</li>
            </ol>
        </div>
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Order chi tiết</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    {{--<th scope="col">id</th>--}}
                                    <th scope="col">orderID</th>
                                    <th scope="col">foodID</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Giá(vnd)</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Trạng thái</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        {{--<th scope="row">{{$item->id}}</th>--}}
                                        <th scope="row">{{$item->orderID}}</th>
                                        <th scope="row">{{$item->foodID}}</th>
                                        <th scope="row">{{$item->name}}</th>
                                        <td>
                                            <div class="card"
                                                 style="width: 90px;height: 70px;background-image: url('/images/food/{{$item->avatar}}'); background-size: cover">

                                            </div>
                                        </td>
                                        <th scope="row"><?php
                                                echo number_format($item->price)
                                            ?>
                                        </th>
                                        <th scope="row">{{$item->amount}}</th>
                                        <td>
                                            <a href="/restaurant/detailorder/{{$item->id}}/edit"
                                               class="btn btn-simple btn-outline-primary">edit</a>
                                            <a href="{{$item->id}}"
                                               class="btn btn-simple btn-outline-danger btn-delete">delete</a>
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
            var cateId = $(this).attr('href');
            var user_confirm = confirm('Bạn có chắc muốn xoá sản phẩm này không?');
            if(user_confirm){
                $.ajax({
                    url: '/restaurant/detailorder/' + cateId,
                    method:'DELETE',
                    data:{
                        '_token': "{{ csrf_token() }}"
                    },
                    success:function (response) {
                        alert('Xoá thành công');
                        window.location.reload();
                    },
                    error:function () {
                        alert('Có lỗi xảy ra, vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection