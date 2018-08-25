@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Quản lý</label>
                <small>AlbumComment</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i>Trang chủ</a></li>
                <li class="active">AlbumComment</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/admin/album/create" class="btn btn-primary">Tạo mới</a>
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
                    @if($cmt->count() > 0)
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">UserId</th>
                                        <th scope="col">RestaurantID</th>
                                        <th scope="col">CommentID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                        {{--<th scope="col">Số điện thoại</th>--}}
                                        {{--<th scope="col">Status</th>--}}
                                        {{--<th scope="col">VerifyEmail</th>--}}
                                        {{--<th scope="col">role</th>--}}
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($cmt as $item)
                                        <tr>

                                            <td>{{$item->id}}</td>
                                                <td>{{$item->userID}}</td>
                                            <td>{{$item->restaurantID}}</td>
                                            <td>{{$item->commentID}}</td>
                                            <td>
                                                <div class="card" style="width: 90px;height: 70px;background-image: url('{{$item->image}}'); background-size: cover">

                                                </div>
                                            </td>
                                        <td>
                                                <a href="/admin/album/{{$item->id}}"
                                                   class="btn btn-outline-success" style="border: 1px solid #d33;">Xem</a>
                                                <a href="/admin/album/{{$item->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                                <a href="{{$item->id}}" data-address="{{$item->addressID}}"
                                                   class="btn btn-outline-danger btn-delete">Xoá</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="row float-right mr-3">
                                    {{$cmt->links()}}
                                </div>
                                @else
                                    <div class="alert alert-primary" role="alert">
                                        Hiện tại chưa có tài khoản nào, vui lòng <a title="Thêm mới user" class="btn-link" href="/admin/album/create">thêm sản phẩm</a> mới.
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
                    url: '/admin/album/' + cateId,
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