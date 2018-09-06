@extends('layout.admin-master',['page_title'=>'Danh sách tài khoản'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Manage</label>
                <small>User</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i> Home</a></li>
                <li class="active">User</li>
            </ol>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <div id="messages"></div>
        </div>
        <a href="" class="btn btn-success">View Restaurant</a>
        <br/> <br/>
        <!-- /.box -->
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Datatable</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AddressID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Số điện thoại</th>
                                    <th>Status</th>
                                    <th>VerifyEmail</th>
                                    <th>Role</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td class="address" data-diachi="">
                                            @if($item->addressID == null)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                   Chưa update</h6>
                                                @else($item->addressID != null)
                                                    <p>{{$item->addressID}}</p>
                                                @endif
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                             @if($item->avartar == null)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Chưa update</h6>
                                                 @else($item->avartar != null)
                                                <div class="card" style="width: 60px;height: 50px;background-image: url('/images/user/{{$item->avartar}}'); background-size: cover"> </div>
                                                 @endif
                                        </td>
                                        <td>
                                            @if($item->phone == null)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Chưa update</h6>
                                                @else($item->phone != null)
                                                   <p>{{$item->phone}}</p>
                                                @endif
                                        </td>
                                        <td>
                                            @if($item->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoạt động</h6>
                                            @endif
                                            @if($item->status == 0)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đã xóa</h6>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->verifyEmail == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đã kích hoạt</h6>
                                                @endif
                                                @if($item->verifyEmail == 0)
                                                    <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                        Chưa kích hoạt</h6>
                                                @endif
                                        </td>
                                        <td>
                                            @if($item->role == 0)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Người dùng</h6>
                                            @endif
                                                @if($item->role == 1)
                                                    <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                        Admin</h6>
                                                @endif
                                        </td>
                                        <td>
                                            <a href="/admin/user/{{$item->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                            <a href="{{$item->id}}" data-address="{{$item->addressID}}"
                                               class="btn btn-outline-danger btn-delete">Xoá</a>
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
                text: "Bạn có chắc muốn xoá nhà hàng này không?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function() {
                var userId = thisButton.attr('href');
                var addressID = thisButton.attr('data-address');
                $.ajax({
                    url: '/admin/user/' + userId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token()}}"
                    },
                    success: function (response) {
                        swal({
                            text: 'ảnh đã bị xoá.',
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
                    url: '/admin/address/' + addressID,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token()}}"
                    },
                    success: function (response) {
                        swal({
                            text: 'Địa chỉ đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                        setTimeout(function () {
                            window.location.reload();
                        }, 2*1000);
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

@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection