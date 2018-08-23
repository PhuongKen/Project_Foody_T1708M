@extends('layout.master',['page_title'=>'Đăng nhập'])
@section('content')
    <div class="container">
        @if(Session::has('thatbai'))
            <div class="alert alert-danger">{{Session::get('thatbai')}}</div>
        @endif
        <div class="login-page">
            <div class="login-form form">
                <div class="block-title">
                    <h2 class="title"><span>Đăng nhập</span></h2>
                </div>

                <form action="{{route('dangnhap')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" value="" name="password">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Đăng nhập">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection