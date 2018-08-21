@extends('layout.admin-master',['page_title'=>'Create restaurant'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}" type="text/css">
@endsection
@section('content')
    <form action="/admin/restaurant" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-10">
                <h3>
                    <label>Manage</label>
                    <small>Restaurant</small>
                </h3>
            </div>
            <div class="col-2">
                <ol class="breadcrumb">
                    <li><a href="/admin/home"><i class="fas fa-home"></i></i> Home</a></li>
                    <li class="active">Restaurant</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"><h4 style="color: #333333">Add restaurant</h4></div>
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
                            <label><h5>Danh mục:</h5></label>
                            <select name="category">
                                @foreach($category as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Tên nhà hàng</h5>
                            <input type="text" placeholder="Nhập tên nhà hàng" size="100" name="name">
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện:</label>
                            <div class="kv-avatar">
                                <div class="file-loading">
                                    <input id="product_image" type="file" name="avartar">
                                </div>
                            </div>
                        </div>
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
                            <label>Số điện thoại:</label>&nbsp<input type="text" name="phone"
                                                                     placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label>Giờ mở cửa:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="openTime" placeholder="Nhập giờ mở của">
                        </div>
                        <div class="form-group">
                            <label>Giờ đóng cửa:</label>
                            <input type="text" name="closeTime" placeholder="Nhập giờ đóng của">
                        </div>
                        <div class="form-group">
                            <h5>Mô tả ngắn:</h5>
                            <textarea type="text" name="shortDescription" placeholder="Nhập mô tả ngắn" cols="100"
                                      role="3"></textarea>
                        </div>
                        <div class="form-group">
                            <h5>Mô tả chi tiết</h5>
                            <textarea class="wysihtml5 form-control" style="background-color: white" rows="9"
                                      name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <form action="/admin/album_restaurant" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file" name="img[]" multiple>
                            </form>
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
