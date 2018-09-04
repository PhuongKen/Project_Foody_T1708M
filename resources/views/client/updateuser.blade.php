<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylefoody1.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jslider.css')}}">

    {{--<!-- Template CSS -->--}}
    <link rel="stylesheet" href="{{asset('css/stylefoody.css')}}">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Thông tin tài khoản</title>
</head>
<body>
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
            <form action="/edit-user/{{$list_obj->id}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Tỉnh\Thành Phố</label>
                    <select name="provind" id="provind">
                        @foreach($provind as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Quận\Huyện\Thành Phố</label>
                    <select name="district" id="district">
                        @foreach($district as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
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
                    <label>Mật khẩu</label>
                    <input type="password" value="{{$list_obj->password}}" name="password">
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" value="" name="comfirm_password">
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện:</label>
                    <div class="kv-avatar">
                        <div class="file-loading">
                            <input name="avartar" value="/images/uer/{{$list_obj->avartar}}" type="file">
                        </div>
                    </div>
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
</body>
</html>