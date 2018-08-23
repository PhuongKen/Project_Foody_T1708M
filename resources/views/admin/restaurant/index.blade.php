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
                <li class="active">Nhà hàng</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/admin/restaurant/create" class="btn btn-primary">Tạo mới nhà hàng</a>
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
                                    <th>Image</th>
                                    <th>Restaurant Name</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($restaurant as $r)
                                    <tr>
                                        <td>
                                            <div class="card"
                                                 style="width: 60px;height: 50px;background-image: url('/images/restaurant/{{$r->avartar}}'); background-size: cover">
                                            </div>
                                        </td>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->shortDescription}}</td>
                                        <td class="address" data-diachi="{{$r->addressID}}">
                                            {{$r->addressID}}
                                        </td>
                                        <td>
                                            @if($r->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoạt động</h6>
                                            @endif
                                            @if($r->status == 0)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đã xóa</h6>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/restaurant/{{$r->id}}"
                                               class="btn btn-outline-success" style="border: 1px solid #d33;">Xem</a>
                                            <a href="/admin/restaurant/{{$r->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                            <a href="{{$r->id}}" data-address="{{$r->addressID}}"
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
                var restaurantID = thisButton.attr('href');
                var addressID = thisButton.attr('data-address');
                $.ajax({
                    url: '/admin/album_restaurant/' + restaurantID,
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
                    url: '/admin/restaurant/' + restaurantID,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token()}}"
                    },
                    success: function (response) {
                        swal({
                            text: 'Nhà hàng đã bị xoá.',
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
    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection