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
            <a href="/admin/detailorder" class="btn btn-primary">Orderdetail</a>
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
                                    <th scope="col">userID</th>
                                    <th scope="col">amount</th>
                                    <th scope="col">totalPrice</th>
                                    <th scope="col">status</th>
                                    <th scope="col">create_at</th>
                                    <th scope="col">update_at</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <th scope="row">{{$item->userID}}</th>
                                        <th scope="row">{{$item->amount}}</th>
                                        <th scope="row">{{$item->totalPrice}}</th>
                                        <th scope="row">{{$item->status}}</th>
                                        <th scope="row">{{$item->create_at}}</th>
                                        <th scope="row">{{$item->update_at}}</th>
                                        <td>
                                            <a href="/admin/order/{{$item->id}}/edit"
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
                    url: '/admin/order/' + cateId,
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