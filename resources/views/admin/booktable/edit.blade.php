@extends('layout.admin-restaurant',['page_title'=>'Create restaurant','active'=>''])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}" type="text/css">
@endsection
@section('content')
    <form action="/admin/booktable/{{$list_obj->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="row">
            <div class="col-md-10">
                <h3>
                    <label>Manage</label>
                    <small>food</small>
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
                    <div class="panel-body p-0"><h4 style="color: #333333;">Sửa thông tin đặt bàn</h4>
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
                        <div class="col-md-12" style="padding: 20px">
                            <div class="row">
                                <input class="col-md-5" type="date" id="date" min="27/8/2018" max="12/9/2018" name="ngaydat"
                                       style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;" value="{{$list_obj->ngaydat}}">
                                <input class="col-md-5" type="time" name="thoigiandat" id="time" min="9000" max="2100"
                                       style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;" value="{{$list_obj->thoigiandat}}">
                            </div>
                            <div class="row">
                                <select class="col-md-5" name="sokhach" id="provind"
                                        style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;" value="{{$list_obj->sokhach}}">
                                    >
                                    <option value="0">Số khách</option>
                                    <option value="1">1 người</option>
                                    <option value="2">2 người</option>
                                    <option value="3">3 người</option>
                                    <option value="4">4 người</option>
                                    <option value="5">5 người</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <h4>Thông tin liên hệ</h4>
                                <div class="row">
                                    <input class="col-md-5" type="text"
                                           name="name" placeholder="Tên"
                                           style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;" value="{{$list_obj->name}}">
                                    <input class="col-md-5" type="text" placeholder="Số điện thoại" name="sdt"
                                           style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;" value="{{$list_obj->sdt}}">
                                </div>
                                <div class="row">
                                    <textarea name="ghichu" class="col-md-10" style=" width: 85% ;border: 1px solid #eee;"
                                              placeholder="Ghi chú">{{$list_obj->ghichu}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <input style="width: 886px;color: #fff!important;outline: 0;text-decoration: none!important;-webkit-border-radius: 4px;text-transform: capitalize;height: 50px;line-height: 50px;text-align: center;font-size: 16px;background-color: #f37934;margin-top: 15px;display: block;cursor: pointer;margin: 0;    -webkit-box-sizing: border-box;white-space: normal;box-sizing: border-box;box-sizing: border-box;padding: 0;"
                                           type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
