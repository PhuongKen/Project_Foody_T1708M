@extends('layout.admin-master',['page_title'=>'Create restaurant'])
@section('css')
    <link href="{{asset('css/fileinput.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}" type="text/css">
@endsection
@section('content')
    <form action="/admin/comment" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-10">
                <h3>
                    <label>Manage</label>
                    <small>Comment</small>
                </h3>
            </div>
            <div class="col-2">
                <ol class="breadcrumb">
                    <li><a href="/admin/home"><i class="fas fa-home"></i></i>Home</a></li>
                    <li class="active">Comment</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body p-0"><h4 style="color: #333333;">List Comment</h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Content</span>
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
                     <div class="row">
                         <div class="col-md-4">
                            <h5>UserID</h5>
                            <select name="userID">
                                <option value="0">User 1</option>
                                <option value="1">User 2</option>
                                <option value="2">User 3</option>
                            </select>
                        </div>
                         <div class="col-md-4">
                             <h5>RestaurantID</h5>
                             <select name="restaurantID">
                                 <option value="0">User 1</option>
                                 <option value="1">User 2</option>
                                 <option value="2">User 3</option>
                             </select>
                         </div>
                         <div class="col-md-4">
                             <h5>Type</h5>
                             <select name="commentType">
                                 <option value="0">Cha</option>
                                 <option value="1">Con</option>
                             </select>
                         </div>

                     </div>
                    <div class=" d-block">
                        <h5>Title</h5>
                        <input type="text" placeholder="Nhập tiêu đề" size="100" name="title">
                    </div>
                    <div class="form-group">
                        <h5>Content</h5>
                        <input type="text" placeholder="Nhập nội dung" size="100" name="Content">
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
