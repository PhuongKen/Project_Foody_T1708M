@extends('layout.admin-restaurant',['page_title'=>'Chart'])
@section('content')
    <div class="container">
        <canvas id="canvas" width="200px" height="100px"></canvas>
    </div>
    <div class="container">
        <canvas id="canvas1" width="200px" height="100px"></canvas>
    </div>
    @endsection