@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Manage</label>
                <small>Restaurant</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i>home page</a></li>
                <li class="active">Restaurant</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/admin/booktable/create" class="btn btn-primary">Create new booktable</a>
        </div>
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
                                    <th scope="col">ID</th>
                                    <th scope="col">nguoidat</th>
                                    <th scope="col">sodienthoai</th>
                                    <th scope="col">ngaydat</th>
                                    <th scope="col">thoigiandat</th>
                                    <th scope="col">nguoilon</th>
                                    <th scope="col">treem</th>
                                    <th scope="col">soluongban</th>
                                    <th scope="col">ghichu</th>
                                    <th scope="col">thaotac</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$item->ngaydat}}</td>
                                        <td>{{$item->thoigiandat}}</td>
                                        <td>{{$item->soluongnguoilon}}</td>
                                        <td>{{$item->soluongtreem}}</td>
                                        <td></td>
                                        <td>{{$item->ghichu}}</td>

                                        <td>
                                            <a href="/admin/booktable/{{$item->id}}/edit" class="btn btn-simple btn-outline-primary">edit</a>
                                            <a href="{{$item->id}}" class="btn btn-simple btn-outline-danger btn-delete">delete</a>
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
            if(user_confirm){
                $.ajax({
                    url: '/admin/category/' + cateId,
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