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
                    <h3 class="panel-title">Danh sách nhà hàng</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên nhà hàng</th>
                                    <th>Mô tả</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($restaurant as $key => $value)
                                    <tr>
                                        <td>
                                            <div class="card"
                                                 style="width: 60px;height: 50px;background-image: url('/images/restaurant/{{$value->avartar}}'); background-size: cover">
                                            </div>
                                        </td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->shortDescription}}</td>
                                        <td class="address" data-diachi="">
                                            {{--{{$address[$key]->wardName}},{{$address[$key]->districtName}},{{$address[$key]->provindName}}--}}
                                            @if($value->addressID == null)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Chưa update</h6>
                                            @else($value->addressID != null)
                                                   <p>{{$value->addressID}}</p>
                                                @endif
                                        </td>
                                        <td>
                                            @if($value->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoạt động</h6>
                                            @endif
                                            @if($value->status == 0)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đã xóa</h6>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/restaurant/{{$value->id}}"
                                               class="btn btn-outline-success">Xem</a>
                                            <a href="/admin/restaurant/{{$value->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                            <a href="{{$value->id}}" data-address="{{$value->addressID}}"
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
                type: 'warning',
                title: 'Bạn có chắc muốn xoá nhà hàng này không?',
                text: "Bạn sẽ không thể khôi phục được dữ liệu",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonClass: 'Đồng ý',
                cancelButtonClass: 'Huỷ bỏ',
            }).then((result)=> {
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
                            text: 'Ảnh đã bị xoá.',
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