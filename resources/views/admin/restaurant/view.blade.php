@extends('layout.admin-master',['page_title'=>'View restaurant'])
@section('content')
    <div class="row">
        <div class="col-md-4">
            <img src="/images/restaurant/{{$restaurant->avartar}}" width="100%">
        </div>
        <div class="col-md-8">
            <h3>{{$restaurant->name}}</h3>
            <p>Địa chỉ: {{$restaurant->addressID}}</p>
            <p>Số điện thoại: {{$restaurant->phone}}</p>
            <p>Giờ mở cửa: {{$restaurant->openTime}}</p>
            <p>Giờ đóng cửa: {{$restaurant->closeTime}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <h4>Về nhà hàng: </h4>
            <p>{{$restaurant->description}}</p>
        </div>
    </div>
@endsection