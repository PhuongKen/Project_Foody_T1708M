<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h3 style="color: #d33">Cảm ơn bạn đã đặt món ăn của chúng tôi</h3>
    <h4>Thông tin đơn hàng của {{Auth::user()->name}}</h4>
    @if(count(\App\Cart::getCart()->items)>0)
        <div class="table-responsive">
            <table class="cart-summary table table-bordered">
                <thead>
                <tr>
                    <th><b>Tên sản phẩm</b></th>
                    <th><b>Gía sản phẩm</b></th>
                    <th><b>Số lượng</b></th>
                    <th><b>Tổng</b></th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Cart::getCart()->items as $item)
                    <tr>
                        <td>{{$item->food->name}}</td>
                        <td>{{$item->food->discountPriceWithFormat}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->getTotalPriceWithFormat()}}  (vnd)</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <br>
    <label>===================================================================</label>
    <h4><b>Tổng tiền:</b> {{\App\Cart::getCart()->getTotalMoneyString()}}</h4>
</div>
</body>
</html>