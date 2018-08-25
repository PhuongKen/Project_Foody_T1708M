@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Quản lý</label>
                <small>Nhà hàng</small>
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
            <a href="/admin/food/create" class="btn btn-primary">Tạo mới sản phẩm</a>
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
                    @if($foods->count() > 0)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>RestaurantID</th>
                                    <th>Price</th>
                                    <th>Avatar</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($foods as $item)
                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->restaurantID}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>
                                            <div class="card"
                                                 style="width: 60px;height: 50px;background-image: url('/images/food/{{$item->avatar}}'); background-size: cover">
                                            </div>
                                        </td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href="/admin/food/{{$item->id}}"
                                               class="btn btn-outline-success" style="border: 1px solid #d33;">Xem</a>
                                            <a href="/admin/food/{{$item->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                            <a href="{{$item->id}}" data-address="{{$item->addressID}}"
                                               class="btn btn-outline-danger btn-delete">Xoá</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="row float-right mr-3">
                                {{$foods->links()}}
                            </div>
                            @else
                                <div class="alert alert-primary" role="alert">
                                    Hiện tại chưa có tài khoản nào, vui lòng <a title="Thêm mới user" class="btn-link" href="/admin/food/create">thêm sản phẩm</a> mới.
                                </div>
                            @endif
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
                    url: '/admin/food/' + cateId,
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
@endsection