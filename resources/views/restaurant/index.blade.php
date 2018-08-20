@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Manage</label>
                <small>Restaurant</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i> Home</a></li>
                <li class="active">Restaurant</li>
            </ol>
        </div>
    </div>
    <div class="row" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <div id="messages"></div>
        </div>
        <a href="/admin/restaurant/create" class="btn btn-primary">Add Restaurant</a>
        <a href="" class="btn btn-success">View Restaurant</a>
        <br/> <br/>
        <!-- /.box -->
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Datatable</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Restaurant Name</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($restaurant as $r)
                                    <tr>
                                        <td>
                                            <div class="card"
                                                 style="width: 60px;height: 50px;background-image: url('/images/restaurant/{{$r->avartar}}'); background-size: cover">
                                            </div>
                                        </td>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->shortDescription}}</td>
                                        <td class="address" data-diachi="{{$r->addressID}}">
                                            {{$r->addressID}}
                                        </td>
                                        <td>
                                            @if($r->status == 1)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Hoạt động</h6>
                                            @endif
                                            @if($r->status == 0)
                                                <h6 style="background-color: #d33; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Đã xóa</h6>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/restaurant/{{$r->id}}"
                                               class="btn btn-outline-success" style="border: 1px solid #d33;">Xem</a>
                                            <a href="/admin/restaurant/{{$r->id}}/edit" class="btn btn-outline-primary">Sửa</a>
                                            <a href="{{$r->id}}" data-address="{{$r->addressID}}"
                                               class="btn btn-outline-danger btn-delete">Xoá</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->

    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection