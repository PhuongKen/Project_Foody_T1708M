@extends('layout.master', ['page_title'=> 'Thông tin tài khoản'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">
@endsection
@section('content')
<div class="container">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <p>{{$err}}</p>
            @endforeach
        </div>
    @endif
    @if(Session::has('thongbao'))
        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
    @endif
    @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
    @endif
    <div class="register-page">
        <div class="register-form form">
            <div class="block-title">
                <h2 class="title"><span>Thông tin tài khoản</span></h2>
            </div>
            <form action="/edit-user/{{$list_obj->id}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                    <label>Tên</label>
                    <input type="text" value="{{$list_obj->name}}" name="name">
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện:</label>
                    <div class="kv-avatar">
                        <div class="file-loading">
                            <input id="product_image" name="avartar" value="/images/user/{{$list_obj->avartar}}" type="file">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Giới tính : </label>
                    <input type="checkbox" name="gender" value="0"> Nam
                    <input type="checkbox" name="gender" value="1"> Nữ
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>&nbsp<input type="text" name="phone"
                                                             placeholder="Nhập số điện thoại" value="{{$list_obj->phone}}">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Thay dổi">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

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