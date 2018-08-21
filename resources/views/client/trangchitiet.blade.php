@extends('layout.master',['page_title'=>'Chi tiết nhà hàng'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/chitiet.css')}}">
@endsection
@section('content')
    <div class="py-5 text-center">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid d-block"
                             src="https://images.foody.vn/res/g8/72061/prof/s576x330/foody-upload-api-foody-mobile-20-jpg-180801090942.jpg"
                             width="1170" height="275">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">
                            <b>Barbos - Nhà Hàng Gà Hàn Quốc</b>
                        </p>
                        <p class="lead2">
                            <span class="locationicon"><i class="fa fa-location-arrow"></i>11- 13 Lê Thị Riêng, P. Bến Thành, Quận 1, TP. HCM</span>
                        </p>
                        <div class="row">
                            <div class="col-1">
                                <div class="rounded-circle mr-5 rateting">
                                    7.4
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="diem-danh-gia">
                                    6.9
                                </div>
                                <div class="phucloi">
                                    Chất lượng
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="diem-danh-gia">
                                    6.1
                                </div>
                                <div class="phucloi">
                                    Phục vụ
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="diem-danh-gia">
                                    6.6
                                </div>
                                <div class="phucloi">
                                    Giá cả
                                </div>
                            </div>
                        </div>
                        <p>
                        <div class="thoigian">
                            <span class="fa fa-clock-o houricon"></span>Giờ mở cửa :&nbsp;11:00 - 23:00.
                        </div>
                        <p>
                        <div class="thoigian">
                            <span class="fa fa-tag minmaxpriceicon"></span>Giá ước tính :&nbsp;59.000đ - 280.000đ.
                        </div>
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="row  m-auto">
                    <div class="col-md-2 my-1 ">
                        <nav class="nav flex-column pl-4">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active text-dark navmenu" href="#">Trang chủ</a>
                                    <a class="nav-link text-dark navmenu" href="#">Ảnh</a>
                                    <a class="nav-link text-dark navmenu" href="#">Bình luận</a>
                                    <a class="nav-link text-dark navmenu" href="#">Thực đơn</a>
                                    <a class="nav-link text-dark navmenu" href="#">Map</a></li>
                            </ul>
                        </nav>


                    </div>
                    <div class="col-md-10">
                        <div class="row border my-2 bd1 m-auto">
                            <div class="col-md-4 border-primary my-2">
                                <ul class="nav nav-pills nav-fill">

                                    <li class="nav-item binhluan">
                                        <p><a href="#" class="text-success">Bình Luận</a></p>
                                    </li>
                                    <li class="nav-item binhluan">
                                        <p><a href="#" class="text-success">Ảnh</a></p>
                                    </li>
                                    <li class="nav-item binhluan">
                                        <p><a href="#" class="text-success">Chia Sẻ</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="lead text-left mt-2 hinhanhcongdong">
                            <b>Hình ảnh món ăn từ cộng đồng</b>
                        </p>
                        <div class="main-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="d-block mx-auto img-fluid py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-778f93ac-a9dc-4848-8419-6a292a169a88-635363046365542270.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-84206-635365645783691250.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-572-636611451748668313.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-526-636549285690975233.jpg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-560-636511953860393488.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-309-636503269405516629.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-930-636434401092660281.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-481-636428154602328063.jpg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-713-636387775506942814.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-536-636372918235830145.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-247-636356512788123598.jpg">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-fluid d-block mx-auto py-2"
                                         src="https://images.foody.vn/res/g8/72061/s180x180/foody-barbos-nha-hang-ga-han-quoc-705-636303192325095255.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="row nhanxet">
                            <div class="col-md-12">
                                <div class="row m-auto nhanxet2">
                                    <div class="col-md-3 my-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-fluid d-block px-0 float-right rounded-circle"
                                                     src="https://images.foody.vn/usr/g1130/11297490/avt/c40x40/__kimjixx-avatar-492-636691048946761706.jpg">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-left tennguoinhanxet">
                                                    Kim Chi
                                                </div>
                                                <p class="text-left tennguoinhanxet2">
                                                    -1/8/2018 12:07
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-9 my-3 "></div>
                                    <div><a href="" class="lead text-left pl-2 tensanphamnx">Xôi cay hai cô</a>
                                        <p class="lead text-left pl-2 mieuta">
                                            Vị trí: đi từ An dương vương quẹo vào Nguyễn Duy Dương, quán gần 1 cái
                                            chợ.Giá cả: phần xôi nhỏ 15k/gói, còn hộp thì 20k.Tuy chỉ kê 1 cái bàn
                                            nhỏ mà bán đắt khách dã man, sáng tầm 9g30 tới là đã hết xôi. Cô bán
                                            hàng thân thiện xôi múc sẵn nên đến là có liền. </p>

                                        <p class="text-left pl-2 giaca">
                                            Số người: 2+ Chi phí: 50,000đ + Sẽ quay lại: Chắc chắn</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img class="img-fluid d-block mx-4   "
                                                     src="https://images.foody.vn/res/g30/293929/s400x400/foody-xoi-cay-hai-co-558-636525525872487676.jpg">
                                            </div>
                                            <div class="col-md-6">
                                                <img class="img-fluid d-block mx-0"
                                                     src="https://images.foody.vn/res/g30/293929/s400x400/foody-xoi-cay-hai-co-561-636525525864987101.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRS
</div>QQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

@endsection