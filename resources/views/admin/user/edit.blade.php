@extends('layout.admin-master',['page_title'=>'Edit người dùng'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <form action="/admin/user/{{$list_obj->id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"><h4 style="color: #333333">Edit User</h4></div>
                    <div class="panel-body">
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
                            <label>Tỉnh\Thành Phố</label>
                            <select name="provind" id="provind">
                                @foreach($provind as $p)
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                @endforeach
                            </select>
                            &nbsp;&nbsp;
                            <label>Quận\Huyện\Thành Phố</label>
                            <select name="district" id="district">
                                @foreach($district as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                            &nbsp;&nbsp;&nbsp;
                            <label>Xã/Phường/Thị trấn</label>
                            <select name="ward" id="ward">
                                @foreach($ward as $w)
                                    <option value="{{$w->id}}">{{$w->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Tên</h5>
                            <input type="text" placeholder="Nhập tên" size="100" name="name" value="{{$list_obj->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="email" placeholder="Nhập email" value="{{$list_obj->email}}">
                        </div>
                        <div class="form-group">
                            <label>Nhập mật khẩu:</label>
                            <input type="password" name="password" placeholder="Nhập mật khẩu" value="{{$list_obj->password}}">
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện:</label>
                            <div class="kv-avatar">
                                <div class="file-loading">
                                    <input id="product_image" name="avartar" type="file" value="{{$list_obj->avatar}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại:</label>&nbsp<input type="text" name="phone"
                                                                     placeholder="Nhập số điện thoại" value="{{$list_obj->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Active</label>
                            <select name="status">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
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
@endsection()
@section('script')
    <script src="{{asset('js/fileinput.min.js')}}"></script>
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