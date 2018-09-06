@extends('layout.admin-master',['page_title'=>'Create restaurant'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}" type="text/css">
@endsection
@section('content')
    <form action="/food/{{$foods->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="row">
            <div class="col-md-10">
                <h3>
                    <label>Manage</label>
                    <small>Món ăn</small>
                </h3>
            </div>
            <div class="col-2">
                <ol class="breadcrumb">
                    <li><a href="/admin/home"><i class="fas fa-home"></i></i> Home</a></li>
                    <li class="active">Edit Food</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body p-0"><h4 style="color: #333333;">Sửa món ăn</h4></div>
                    <div>
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                    <div class="form-group">
                        <h5>Tên nhà hàng</h5>
                        <input type="text" placeholder="Nhập tên nhà hàng" size="100" name="restaurantID" value="{{$foods->restaurantID}}">
                    </div>
                    <div class="form-group">
                        <h5>Tên món ăn</h5>
                        <input type="text" placeholder="Nhập tên món ăn" size="100" name="name" value="{{$foods->name}}">
                    </div>
                    <div class="form-group">
                        <h5>Ảnh đại diện</h5>
                        <input type="text" placeholder="Nhập link ảnh" size="100" name="avatar" value="{{$foods->avatar}}">
                    </div>
                    <div class="form-group">
                        <h5>Giá tiền</h5>
                        <input type="text" placeholder="Nhập tên nhập giá tiền" size="100" name="price" value="{{$foods->price}}">
                    </div>
                    <div class="form-group">
                        <h5>Trạng thái</h5>
                        <input type="text" placeholder="Nhập trạng thái của bạn" size="100" name="status" value="{{$foods->status}}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Lưu">
                        <input type="reset" class="btn btn-success" value="Làm lại">
                    </div>
                </div>
            </div>
        </div>
        </div> <!-- End row -->
    </form>
@endsection
@section('script')
    <script src="{{asset('js/fileinput.min.js')}}"></script>
    <script src="{{asset('js/dropzone.min.js')}}"></script>
    <script>
        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="fas fa-tag"></i>' +
            '</button>';
        $("#product_image").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="fas fa-folder-open"></i>',
            removeIcon: '<i class="fas fa-times"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
            layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
        // Lấy id provind và set district theo id provind
        var idProvind = $("#provind").val();
        $.get("/admin/district/" + idProvind, function (data) {
            $("#district").html(data);
        });
        $("#provind").change(function () {
            var idProvind = $(this).val();
            $.get("/admin/district/" + idProvind, function (data) {
                $("#district").html(data);
            });
        });
        // Lấy id distict và set district theo id ward
        var idDistrict = $("#district").val();
        $.get("/admin/ward/" + idDistrict, function (data) {
            $("#ward").html(data);
        });
        $("#district").change(function () {
            var idDistrict = $(this).val();
            $.get("/admin/ward/" + idDistrict, function (data) {
                $("#ward").html(data);
            });
        });
    </script>
@endsection
