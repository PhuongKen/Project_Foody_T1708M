@extends('layout.master',['page-title'=>'Đăng kí'])
@section('content')
    <div class="container">
        <div class="register-page">
            <div class="register-form form">
                <div class="block-title">
                    <h2 class="title"><span>Đăng kí tài khoản</span></h2>
                </div>

                <form action="http://tivatheme.com/html/freshmart/index.html" method="post" enctype="multipart/form-data">
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
                        <input type="text" value="" name="comfirm_password">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Đăng kí">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection