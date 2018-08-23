@extends('layout.admin-master',['page_title'=>'Danh sách tài khoản'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
<div class="card scoll">
    <div class="card-body">
        <div class="float-left">
            <h2 class="card-title">AlbumComment</h2>
        </div>
        <div class="float-right mr-4">
            <a href="/food/create" title="Tạo mới sản phẩm"><i class="fas fa-plus-square"></i>Tạo mới</a>
        </div>
        <div class="clearfix"></div>
        <div class="card-body">
            @if($cmt->count() > 0)
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">UserId</th>
                        <th scope="col">RestaurantID</th>
                        <th scope="col">CommentID</th>
                        <th scope="col">Image</th>
                        {{--<th scope="col">Số điện thoại</th>--}}
                        {{--<th scope="col">Status</th>--}}
                        {{--<th scope="col">VerifyEmail</th>--}}
                        {{--<th scope="col">role</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cmt as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->userID}}</td>
                            <td>{{$item->restaurantID}}</td>
                            <td>{{$item->commentID}}</td>
                            <td>
                                <div class="card" style="width: 90px;height: 70px;background-image: url('{{$item->image}}'); background-size: cover">

                                </div>
                            </td>
                            {{--<td>{{$item->phone}}</td>--}}
                            {{--<td>{{$item->status}}</td>--}}
                            {{--<td>{{$item->verifyEmail}}</td>--}}
                            {{--<td>{{$item->role}}</td>--}}
                            <td>
                                <a href="/admin/album/{{$item->id}}/edit" class="btn btn-simple btn-outline-primary">Edit</a>
                                <a href="{{$item->id}}" class="btn btn-simple btn-outline-danger btn-delete">Delete</a>
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
                    Hiện tại chưa có tài khoản nào, vui lòng <a title="Thêm mới user" class="btn-link" href="/admin/food/create">thêm sản phẩm</a> mới.
                </div>
            @endif
        </div>
    </div>
</div>
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