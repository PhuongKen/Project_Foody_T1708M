@extends('layout.master',['page_title'=>'Liên hệ'])
@section('content')
    <div class="container">
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
        <div class="login-page">
            <div class="login-form form">

                <div class="block-title">
                    <h2 class="title"><span>Liên Hệ</span></h2>
                </div>

                <form action="/foody/lien-he" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ:</label>
                        <input type="text" name="diachi">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" value="" name="email">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" value="" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Yêu cầu:</label>
                        <input type="text" value="" name="yeucau">
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Gửi đi">
                        <input type="reset" class="btn btn-primary" value="Soạn lại">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection