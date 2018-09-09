@extends('layout.master',['page_title'=>'Đặt chỗ'])
@section('css')
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container-edit container">
        <form action="/admin/booktable" method="post" enctype="multipart/form-data" style="margin-top: 30px">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body p-0"><h4 style="color: #333333;">nhà hàng</h4>
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
                                    <input class="col-md-5" type="date" id="date" min="27/8/2018" max="12/9/2018"
                                           name="ngaydat"
                                           style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;">
                                    <input class="col-md-5" type="time" name="thoigiandat" id="time" min="9000"
                                           max="2100"
                                           style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;">
                                </div>
                                <div class="row">
                                    <select class="col-md-3" name="sokhach" id="provind"
                                            style="height: 30px;border: 1px solid #eee;padding-left: 35px;background-color: #fff;border-radius: 2px;margin-bottom: 15px;padding: 0 5px;margin-right: 12px;">
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
                                    <div class="row">
                                    <textarea name="ghichu" class="col-md-11" style="width: 886px; "
                                              placeholder="Ghi chú"></textarea>
                                    </div>

                                </div>
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
        </form>
    </div>
@endsection