@extends('layout.master',['page_title'=>'Danh mục sản phẩm'])
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/danhmuc.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row border my-2 m-auto"
                     style="height: 48px;border: 1px solid #ddd; background-color: white">
                    <div class="col-md-4 border-primary my-2">
                        <ul class="nav nav-pills nav-fill">

                            <li class="nav-item"
                                style="box-sizing: border-box;font-size: 14px;text-align: center;font-weight: bold;">
                                <p><a href="#" class="text-success">Gần tôi nhất</a></p>
                            </li>
                            <li class="nav-item"
                                style="box-sizing: border-box;font-size: 14px;text-align: center;font-weight: bold;">
                                <p><a href="#" class="text-success">Xem nhiều nhất</a></p>
                            </li>
                            <li class="nav-item"
                                style="box-sizing: border-box;font-size: 14px;text-align: center;font-weight: bold;">
                                <p><a href="#" class="text-success">Đánh giá tốt nhất</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 5px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g15/142863/prof/s640x400/foody-mobile-salmond-jpg-972-636137906617571606.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>7.8</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Salmonoid
                                                            - Món Âu - Cao Bá Quát</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>32C Cao Bá Quát</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g85/848952/avt/c40x40/foody-avatar-190-636676116080074290.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Ly
                                                            Ly Đào</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Ở đây chuyên kiểu cá hồi ý nên steak ăn t
                                                    thấy bth, cá hồi ăn thì okay. Mỗi tội là gọi món hơi khó vì
                                                    dish của nó to và bị no ý =)), mình đi 2 người gọi một cái
                                                        raclette cheese bé (đĩa này rất ok ăn</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g815/8140311/avt/c40x40/nguyntrgiang-avatar-685-636305537667807627.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Trà
                                                            Giang Nguyễn</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Đường đi vào quán khá là hẹp có 1 bức tưởng hoa hồng leo rất trữ tình nhưng mà hẹp quá khó check in.Bước vào quán có nv thân thiện chào hỏi.Ord đồ thì mình thấy nv ko chủ động giới thiệu cho khá...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">175</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">2.3k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g10/93772/prof/s640x400/foody-mobile-tim-jpg-652-636129899200456707.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>7.9</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Tim
                                                            Ho Wan - Dimsum Hồng Kông - Lotte Hotel Hanoi </b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>32C Cao Bá Quát</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g85/848952/avt/c40x40/foody-avatar-190-636676116080074290.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Ly
                                                            Ly Đào</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Ở đây chuyên kiểu cá hồi ý nên steak ăn t
                                                    thấy bth, cá hồi ăn thì okay. Mỗi tội là gọi món hơi khó vì
                                                    dish của nó to và bị no ý =)), mình đi 2 người gọi một cái
                                                        raclette cheese bé (đĩa này rất ok ăn</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g815/8140311/avt/c40x40/nguyntrgiang-avatar-685-636305537667807627.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Trà
                                                            Giang Nguyễn</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Đường đi vào quán khá là hẹp có 1 bức tưởng hoa hồng leo rất trữ tình nhưng mà hẹp quá khó check in.Bước vào quán có nv thân thiện chào hỏi.Ord đồ thì mình thấy nv ko chủ động giới thiệu cho khá...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">121</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">1.1k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g12/113148/prof/s640x400/foody-mobile-top-jpg-658-636142988127466793.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>7.8</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Top
                                                            Floor Rue Des Seaux Restaurant - Hàng Thùng</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>32C Cao Bá Quát</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g85/848952/avt/c40x40/foody-avatar-190-636676116080074290.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Ly
                                                            Ly Đào</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Ở đây chuyên kiểu cá hồi ý nên steak ăn t
                                                    thấy bth, cá hồi ăn thì okay. Mỗi tội là gọi món hơi khó vì
                                                    dish của nó to và bị no ý =)), mình đi 2 người gọi một cái
                                                        raclette cheese bé (đĩa này rất ok ăn</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g815/8140311/avt/c40x40/nguyntrgiang-avatar-685-636305537667807627.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Trà
                                                            Giang Nguyễn</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Đường đi vào quán khá là hẹp có 1 bức tưởng hoa hồng leo rất trữ tình nhưng mà hẹp quá khó check in.Bước vào quán có nv thân thiện chào hỏi.Ord đồ thì mình thấy nv ko chủ động giới thiệu cho khá...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">175</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">2.3k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top"
                                     src="https://images.foody.vn/res/g11/109552/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-tong1-j-180618115710.jpg"
                                     alt="Card image cap">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="rounded-circle mt-1"
                                                     style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                    <b>8.4</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Tunglok
                                                                Heen - Ẩm Thực Trung Hoa - Almaz Vinhomes Riverside</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>32C Cao Bá Quát</span></a>,
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>,
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g35/345189/avt/c50x50/cunmhxinhxinh-avatar-936-636679825627242523.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Cún
                                                                MH</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Khung cảnh tuyệt đẹp, có cái hồ rất to kề bên. Nhà hàng có cái cổng như cái phủ xưa, trang trí hoành tráng, đẹp, view ra hồ mỹ mãn luôn, rất thư thái.
Khách không đông lắm.
Menu thì khá ổn, vị Quảng ...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g850/8491020/avt/c50x50/cantonam2881913-avatar-913-636645187278781452.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Cantonam</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Nhà mình bên Vinhomes nên rất thường xuyên ghé các nhà hàng trong khu ẩm thực Almaz. Nhà hàng Trung Quốc này luôn là địa chỉ được cả gia đình mình yêu thích nhất. 1 tháng ít phải 1 lần vào cuối tuần r...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">31</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2"
                                          style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">370</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                          style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top"
                                     src="https://images.foody.vn/res/g10/94191/prof/s640x400/foody-mobile-top1-jpg-973-635742117477155490.jpg"
                                     alt="Card image cap">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="rounded-circle mt-1"
                                                     style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                    <b>7.9</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Top
                                                                Of Hanoi - Lotte Hotels & Resorts Hanoi</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Tầng 67, Lotte Center, 54 Liễu Giai</span></a>,
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g46/458910/avt/c50x50/nha-ttt3566-avatar-239-636277054707413181.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Trần
                                                                Thanh Nhã</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Vị trí: nằm trên tầng 67 của khách sạn Lotte. Dạng rooftop bar.
Không gian: đẹp, cực đẹp. Sang trọng và lịch sự. Có thể nhìn bao quát thủ đô. Mát mẻ đi khuya thì hơi lạnh, có nhạc nên không khí quán k...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g75/744989/avt/c50x50/foody-avatar-293-636403783172514628.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Mây
                                                                Trưa Ngắm</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">để lên đến tầng 67 thì phải đi thang máy bên trong khách sạn 😚
  view đẹp và lên đây muộn nhớ mang theo áo khoác mỏng :v
    đồ uống tạm ổn .. tuy có vẻ hơi đắt nhưng được một không gian như trên th...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">40</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2"
                                          style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">268</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                          style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top"
                                     src="https://images.foody.vn/res/g11/105101/prof/s640x400/foody-mobile-maison-1-mb-jpg-617-635857130884455566.jpg"
                                     alt="Card image cap">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="rounded-circle mt-1"
                                                     style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                    <b>7.7</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Maison
                                                                De Tet Decor Cafe - Từ Hoa</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>36 Từ Hoa Công Chúa</span></a>,
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Tây Hồ</span></a>,
                                                        <a href="#"
                                                           style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g149/1486462/avt/c50x50/foody-avatar-322-636671742604152114.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Hoang
                                                                Anh Nguyen</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Quán nằm trong khu phố nhiều người nước ngoài nên hàng này cũng chủ yếu là khách nước ngoài.
Mình đến vào buổi trưa nên khá đông, ngoài trừ nhân viên thì có mỗi mình là người việt. Mình cảm thấy quán ...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="https://images.foody.vn/usr/g1009/10089887/avt/c50x50/foody-avatar-735-636468553091470623.jpg"
                                                     class="rounded-circle"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12"
                                                         style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                        <a href="#">
                                                            <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Lan
                                                                Hương</b></a>
                                                        <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Được anh người yêu dẫn trong 1 lần hai đứa lượn quanh hồ tây, mình yêu quán ngay từ lần đầu tiên luôn. Quán rất tĩnh, không đông đúc rất hợp cho đứa thích đọc sách như mình. Về không gian , quán decor...</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <a href="#" class="text-dark">
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">24</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2"
                                          style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">2276</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                          style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                    <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                        crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                        crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                        crossorigin="anonymous"></script>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g8/73662/prof/s640x400/foody-mobile-el-gaucho-jpg.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>8.2</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Hệ
                                                            thống El Gaucho Steakhouse - Hà Nội</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>32C Cao Bá Quát</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Ba Đình</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Hà Nội</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g144/1435577/avt/c50x50/foody-avatar-418-636620830192413041.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Cao
                                                            Tâm</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Nói chung khi nhắc đến bít tết ngon thì bạn bè mình đã nhắc ngay đến El Gaucho rồi xong suýt soa 1tr/ suất. Mãi mình mới có cơ hội được thử

🌿Không gian: Cửa trượt cảm giác khá lạ. Không gian bên tro...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g84/830312/avt/c50x50/foody-avatar-556-636430712250997249.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Phan
                                                            Hà Phương</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">El gaucho thì đã quá nổi tiếng về steak nên không cần phải quảng cáo.

Bước chân vào đã thấy rất pro theo phong cách quán Mehico. Bày trí đẹp, nhân viên nhanh nhẹn và ngoan.

Hôm đi ăn chọn MR 500g b...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">30</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">269</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g20/195742/prof/s640x400/foody-mobile-rico-jpg-419-636178309399268457.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>8.0</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Rico
                                                            South American Steakhouse</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>56 Trần Quốc Toản</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Hoàn Kiếm</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g84/830312/avt/c50x50/foody-avatar-556-636430712250997249.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Phan
                                                            Hà Phương</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Quán bài trí theo phong cách Nam Mỹ rất lịch sự, ấm cúng.Soup tôm và nấm siêu ngon. Bánh mì nếu phong phú hơn chút nữa thì có lẽ sẽ ngon hơn.Salad thì cũng không có gì đặc sắc.Mình order 350g Blac...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g886/8852700/avt/c50x50/baovy1506-avatar-761-636307311842740963.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">baovy1506</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Khai phá thêm đc hàng steak chuẩn âu nữa ngoài moo :))) đồ ăn ngon ko gian đẹp sang chảnh :)) nhưng cách bày trí steak ko đẹp mắt như moo 😹 bánh mỳ cũng ko có nhiều loại nv phục vụ ổn. Chưa biết có q...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">29</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">314</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g2/14596/prof/s640x400/foody-mobile-pan-jpg-346-636294071780621541.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1"
                                                 style="width: 40px;height: 40px;background-color: #03ae03; line-height: 40px; text-align: center; font-size: 12px;color: #fff;font-family: arial;">
                                                <b>7.7</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b style="text-transform: capitalize;color: #000;white-space: nowrap;font-size: 14px;font-weight: 700;text-overflow: ellipsis;">Pane
                                                            e Vino - Ẩm Thực Ý - Nguyễn Khắc Cần</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>3 Nguyễn Khắc Cần, P. Tràng Tiền</span></a>,
                                                    <a href="#"
                                                       style="font-size: 12px;color: #888;white-space: nowrap;font-family: arial;    line-height: 1.4em;"><span>Quận Hoàn Kiếm</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g845/8441074/avt/c50x50/foody-avatar-942-636265571661434189.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Trang
                                                            Vu</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">Tôi đến quán này theo sự giới thiệu của 1 người bạn. Quán nằm trên phố Nguyễn Khắc Cần, đối diện ks L'opera, lối vào nhỏ và tầng 1 hơi tối, nhưng hầu như khách đến đều đc mời lên t2-3. Không gian các ...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g179/1784262/avt/c50x50/linhnt254-avatar-119-636427640928220377.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12"
                                                     style="clear: both; overflow: hidden; text-overflow: ellipsis; height: 50px">
                                                    <a href="#">
                                                        <b style="text-decoration: none; color:#111;font-size: 12px;font-family: arial;line-height: 1.4em;font-weight: bold;display: inherit;cursor: pointer;">Linn
                                                            Chew</b></a>
                                                    <span style="color: #555;text-align: justify;font-family: arial;font-size: 12px;">2/9 ăn ở quán dc giảm 20%, nhìn chúng giá ko rẻ cũng ko quá đắt ở mức chấp nhận dc Mỳ Ý siêu ngon so với các quán khác. Must try T-bond steak mình thấy tạm dc nhưng chưa mãn nguyện Tiramisu thì thần t...</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="text-dark">
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="color: #888;">
                                <span class="fa fa-comment"
                                      style="font-weight: normal;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">30</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2"
                                      style="font-weight: normal;padding-left:10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">209</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2"
                                      style="font-weight: normal; padding-left: 10px;display: inline-block;font-size: inherit;text-rendering: auto;-webkit-font-smoothing: antialiased;"></span>
                                <span style="color: #888;cursor: pointer;font-family: arial;font-size: 12px;line-height: 1.4em;">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5">
                <div class="container">
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
@endsection