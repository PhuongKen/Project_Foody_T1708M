@extends('layout.master',['page-title'=>'Đăng nhập'])
@section('content')
    <div class="container">
        <div class="login-page">
            <div class="login-form form">
                <div class="block-title">
                    <h2 class="title"><span>Đăng nhập</span></h2>
                </div>

                <form action="index.html" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" value="" name="password">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection