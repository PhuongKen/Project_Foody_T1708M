@extends('layout.master',['page_title'=>'Đặt chỗ'])
@section('css')
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="container-edit container">
        <h4>Bạn đã đặt chỗ thành công</h4>
        <a href="/foody/trang-chu"> Quay lại trang chủ</a>
    </div>
@endsection