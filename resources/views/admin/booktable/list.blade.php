@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
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
                <li class="active">nhà hàng</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/admin/booktable/create" class="btn btn-primary">Tạo đặt bàn mới</a>
        </div>
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách đặt bàn</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nguời đặt</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Ngày đặt</th>
                                    <th scope="col">Thời gian đặt</th>
                                    <th scope="col">Số khách</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->sdt}}</td>
                                        <td>{{$item->ngaydat}}</td>
                                        <td>{{$item->thoigiandat}}</td>
                                        <td>{{$item->sokhach}}</td>
                                        <td>{{$item->ghichu}}</td>
                                        <th scope="row">
                                            @if($item->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đang chờ xử lý</h6>
                                            @elseif($item->status == 2)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đang chờ xác nhận</h6>
                                            @elseif($item->status == 3)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoàn thành</h6>
                                            @endif
                                        </th>

                                        <td>
                                            @if($item->status==1)
                                                <a href="/admin/status?id={{$item->id}}&status=2" onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"
                                                   class="btn btn-simple btn-outline-primary btn-finish">Xác nhận</a>
                                            @elseif($item->status==2)
                                                <a href="/admin/status?id={{$item->id}}&status=3"
                                                   class="btn btn-simple btn-outline-primary btn-finish" onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')">Hoàn thành</a>
                                            @endif
                                            @if($item->status==1)
                                                <a href="{{$item->id}}"
                                                   class="btn btn-simple btn-outline-danger btn-delete">Xóa</a>
                                            @endif
                                            <a href="/admin/booktable/{{$item->id}}/edit"
                                               class="btn btn-simple btn-outline-primary">edit</a>
                                            <a href="{{$item->id}}"
                                               class="btn btn-simple btn-outline-danger btn-delete">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row float-right mr-3">
                                {{$list_obj->links()}}
                            </div>
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
                    url: '/admin/booktable/' + cateId,
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
    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection