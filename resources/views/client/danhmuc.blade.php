@extends('layout.master',['page_title'=>'Danh mục sản phẩm'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/danhmuc.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav bg-menu">
                    <li class="nav-item menu">
                        <a class="nav-link active" href="#">Xem nhiều nhất</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="#">Đánh giá tốt nhất</a>
                    </li>
                </ul>
            </div>
            <div class="container" style="margin-top: 5px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://images.foody.vn/res/g10/93772/prof/s640x400/foody-mobile-tim-jpg-652-636129899200456707.jpg"
                                 alt="Card image cap">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="rounded-circle mt-1 rateting">
                                                <b>7.9</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 food-address2">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b class="food-address4">Tim Ho Wan - Dimsum Hồng Kông - Lotte
                                                            Hotel
                                                            Hanoi </b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 food-address">
                                                    <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                    <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g4/35522/avt/c50x50/lethanhdat2391-avatar-186-636131098166772572.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Đạt
                                                            Lê Thành</b></a>
                                                    <span class="user-comment">Thực đơn không nhiều món nhưng đa số đều là đặc trưng của quán.
                                                    Đồ ăn ngon. Thích nhất há cảo nhân tôm rau chân vịt vị thanh, tươi.
                                                    Bánh trứng hấp mềm, xốp và thơm.
                                                    Bánh nhân thịt nướng BBQ vị khá ...</span>
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
                                            <img src="https://images.foody.vn/default/s50/user-default-female.png"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Trang Nguyen</b></a>
                                                    <span class="user-comment">Nhà hàng trong khách sạn nên bước vào thang máy đã thấy đẹp rồi.
                                                    Trong nhà hàng thì cảm giác sang và hiện đại.Hôm đấy cuối tuần mà mình ko đặt bàn
                                                    nên ko được ngồi cạnh cửa kính như dự định nhưng nói...</span>
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
                            <div class="card-body card-info">
                                <span class="fa fa-comment user-icon"></span>
                                <span class="user-number">121</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">1.1k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">0</span>
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
                                            <div class="rounded-circle mt-1 rateting">
                                                <b>7.9</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 food-address2">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b class="food-address4">Tim
                                                            Ho Wan - Dimsum Hồng Kông - Lotte Hotel Hanoi </b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 food-address">
                                                    <a class="food-address1" href="#"><span>Tầng 36, Lotte Center, 54 Liễu Giai</span></a>,
                                                    <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/usr/g4/35522/avt/c50x50/lethanhdat2391-avatar-186-636131098166772572.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Đạt
                                                            Lê Thành</b></a>
                                                    <span class="user-comment">Thực đơn không nhiều món nhưng đa số đều là đặc trưng của quán.
                                                    Đồ ăn ngon. Thích nhất há cảo nhân tôm rau chân vịt vị thanh, tươi.
                                                    Bánh trứng hấp mềm, xốp và thơm.
                                                    Bánh nhân thịt nướng BBQ vị khá ...</span>
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
                                            <img src="https://images.foody.vn/default/s50/user-default-female.png"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Trang Nguyen</b></a>
                                                    <span class="user-comment">Nhà hàng trong khách sạn nên bước vào thang máy đã thấy đẹp rồi.
                                                    Trong nhà hàng thì cảm giác sang và hiện đại.Hôm đấy cuối tuần mà mình ko đặt bàn
                                                    nên ko được ngồi cạnh cửa kính như dự định nhưng nói...</span>
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
                            <div class="card-body card-info">
                                <span class="fa fa-comment user-icon"></span>
                                <span class="user-number">121</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">1.1k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">0</span>
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
                                            <div class="rounded-circle mt-1 rateting">
                                                <b>7.8</b></div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 food-address2">
                                                    <a href="#" class="text-dark" target="_blank"
                                                       title="HAT Snack Rounds - Fast Food">
                                                        <b class="food-address4">Top Floor Rue Des Seaux Restaurant -
                                                            Hàng Thùng</b>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 food-address">
                                                    <a class="food-address1" href="#"><span>21 Hàng Thùng</span></a>,
                                                    <a class="food-address1" href="#"><span>Quận Hoàn Kiếm</span></a>,
                                                    <a class="food-address1" href="#"><span>Hà Nội</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://images.foody.vn/default/s50/user-default-female.png"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Đoàn Phi</b></a>
                                                    <span class="user-comment">Xem review trên Foody, tôi từ thành phố Hồ Chí Minh ra chọn ngay nhà hàng này qua Tablenow.
                                                    Nhà hàng số 21 Hàng Thùng, ờ tầng thượng của Boss Legend Hotel.
                                                    Nhân viên khách sạn rất lịch sự khi chào hỏi...</span>
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
                                            <img src="https://images.foody.vn/usr/g9/85764/avt/c50x50/foody-avatar-114-636542234907041036.jpg"
                                                 class="rounded-circle"></div>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 name-info">
                                                    <a href="#">
                                                        <b class="name-user">Trà
                                                            Giang Nguyễn</b></a>
                                                    <span class="user-comment">- Là nhà hàng của khách sạn, kết hợp phục vụ ăn buffet sáng cho khách tại khách sạn luôn.
                                                                    - Tối Thứ 7 mà vắng lắm, chắc chủ yếu phục vụ nhu cầu khách nội bộ
                                                                    - Đồ ăn phù hợp với giá cả, không quá đặc b...</span>
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
                            <div class="card-body card-info">
                                <span class="fa fa-comment user-icon"></span>
                                <span class="user-number">175</span>
                                <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">2.3k</span>
                                <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                <span class="user-number">0</span>
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
                                                <div class="rounded-circle mt-1 rateting">
                                                    <b>8.4</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12 food-address2">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">Tunglok Heen - Ẩm Thực Trung Hoa -
                                                                Almaz Vinhomes Riverside</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 food-address">
                                                        <a class="food-address1"
                                                           href="#"><span>32C Cao Bá Quát</span></a>,
                                                        <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>,
                                                        <a class="food-address1" href="#"><span>Hà Nội</span></a>
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Cún
                                                                MH</b></a>
                                                        <span class="user-comment">Khung cảnh tuyệt đẹp, có cái hồ rất to kề bên. Nhà hàng có cái cổng như cái phủ xưa, trang trí hoành tráng, đẹp, view ra hồ mỹ mãn luôn, rất thư thái.
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Cantonam</b></a>
                                                        <span class="user-comment">Nhà mình bên Vinhomes nên rất thường xuyên ghé các nhà hàng trong khu ẩm thực Almaz. Nhà hàng Trung Quốc này luôn là địa chỉ được cả gia đình mình yêu thích nhất. 1 tháng ít phải 1 lần vào cuối tuần r...</span>
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
                                <div class="card-body card-info">
                                    <span class="fa fa-comment user-icon"></span>
                                    <span class="user-number">31</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">370</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">0</span>
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
                                                <div class="rounded-circle mt-1 rateting">
                                                    <b>7.9</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12 food-address2">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">Top
                                                                Of Hanoi - Lotte Hotels & Resorts Hanoi</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 food-address">
                                                        <a class="food-address1" href="#"><span>Tầng 67, Lotte Center, 54 Liễu Giai</span></a>,
                                                        <a class="food-address1" href="#"><span>Quận Ba Đình</span></a>
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Trần
                                                                Thanh Nhã</b></a>
                                                        <span class="user-comment">Vị trí: nằm trên tầng 67 của khách sạn Lotte. Dạng rooftop bar.
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Mây
                                                                Trưa Ngắm</b></a>
                                                        <span class="user-comment">để lên đến tầng 67 thì phải đi thang máy bên trong khách sạn 😚
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
                                <div class="card-body card-info">
                                    <span class="fa fa-comment user-icon"></span>
                                    <span class="user-number">40</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">268</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">0</span>
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
                                                <div class="rounded-circle mt-1 rateting">
                                                    <b>7.7</b></div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12 food-address2">
                                                        <a href="#" class="text-dark" target="_blank"
                                                           title="HAT Snack Rounds - Fast Food">
                                                            <b class="food-address4">Maison
                                                                De Tet Decor Cafe - Từ Hoa</b>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 food-address">
                                                        <a class="food-address1"
                                                           href="#"><span>36 Từ Hoa Công Chúa</span></a>,
                                                        <a class="food-address1" href="#"><span>Quận Tây Hồ</span></a>,
                                                        <a class="food-address1" href="#"><span>Hà Nội</span></a>
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Hoang Anh Nguyen</b></a>
                                                        <span class="user-comment">Quán nằm trong khu phố nhiều người nước ngoài nên hàng này cũng chủ yếu là khách nước ngoài.
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
                                                    <div class="col-md-12 name-info">
                                                        <a href="#">
                                                            <b class="name-user">Lan Hương</b></a>
                                                        <span class="user-comment">Được anh người yêu dẫn trong 1 lần hai đứa lượn quanh hồ tây, mình yêu quán ngay từ lần đầu tiên luôn. Quán rất tĩnh, không đông đúc rất hợp cho đứa thích đọc sách như mình. Về không gian , quán decor...</span>
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
                                <div class="card-body card-info">
                                    <span class="fa fa-comment user-icon"></span>
                                    <span class="user-number">24</span>
                                    <span class="fa fa-camera mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">2276</span>
                                    <span class="fa fa-bookmark mx-auto fa-lg mr-2 user-icon"></span>
                                    <span class="user-number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>


            </div>

            <div class="py-5">
                <div class="container">
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>

@endsection