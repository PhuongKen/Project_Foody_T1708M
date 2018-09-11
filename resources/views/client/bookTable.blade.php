@extends('layout.master',['page_title'=>'Đặt chỗ'])
@section('css')
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container-edit container">
        <form action="/foody/dat-cho" method="post"  style="margin-top: 30px">
            {{csrf_field()}}
            @if(Auth::check())
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body p-0 "><h4 style="color: #337ab7;font-weight: 700;    font-family: 'OpenSans-Bold';text-transform: capitalize;    font-size: 18px;">{{$booktable->name}}</h4>
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
                                        <?php
                                        $mydate=date("Y-m-d")
                                        ?>
                                        <h4>Ngày đặt, giờ đặt</h4>
                                        <input class="col-md-5" type="date" id="date" min="{{$mydate}}"
                                               name="ngaydat"
                                               style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;">
                                        <input class="col-md-5" type="time" name="thoigiandat" id="time" min="08:00"
                                               max="21:00"
                                               style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;" required>
                                    </div>
                                    <div class="row">
                                        <select class="col-md-3" name="sokhach" id="provind"
                                                style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;">
                                            >
                                            <option value="0">Số khách</option>
                                            <?php
                                            for ($i=1; $i<101; $i++){
                                                echo "<option value=".$i.">".$i." "."người</option>";
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h4>Thông tin liên hệ</h4>
                                        <div class="row">
                                            <input class="col-md-5" type="text"
                                                   name="name" placeholder="Tên"
                                                   style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;">
                                            <input class="col-md-5" type="text" placeholder="Số điện thoại" name="sdt"
                                                   style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;">
                                        </div>
                                        <div class="row">
                                    <textarea name="ghichu" class="col-md-10" style=" width: 913px ;border: 1px solid #eee;"
                                              placeholder="Ghi chú"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$booktable->id}}" name="restaurant">
                                    <div class="form-group">
                                        <div class="row">
                                            <input style="width: 886px;color: #fff!important;outline: 0;text-decoration: none!important;-webkit-border-radius: 4px;text-transform: capitalize;height: 50px;line-height: 50px;text-align: center;font-size: 16px;background-color: #f37934;margin-top: 15px;display: block;cursor: pointer;margin: 0;    -webkit-box-sizing: border-box;white-space: normal;box-sizing: border-box;box-sizing: border-box;padding: 0;"
                                                   type="submit" class="btn btn-primary" value="Đặt chỗ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <h4 style="text-align: center">Bạn chưa đăng nhập.</h4>
                <h5 style="text-align: center"><a href="{{route('dangnhap')}}">Đăng nhập ở đây</a></h5>
            @endif
        </form>
    </div>
@endsection
