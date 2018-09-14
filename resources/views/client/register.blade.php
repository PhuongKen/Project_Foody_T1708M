@extends('layout.master',['page_title'=>'Đăng kí'])
@section('content')
    <div class="container" style="margin-top: 50px">
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
                    <h2 class="title"><span>Đăng kí tài khoản</span></h2>
                </div>
                <form action="{{route('dangki')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" value="" name="password">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" value="" name="comfirm_password">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Đăng kí">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection