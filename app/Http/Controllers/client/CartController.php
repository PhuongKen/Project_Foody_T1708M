<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 11:01 PM
 */

namespace App\Http\Controllers\client;


use App\Address;
use App\Cart;
use App\CartItem;
use App\Category;
use App\District;
use App\Food;
use App\Http\Controllers\Controller;
use App\Order;
use App\Order_detail;
use App\Order_info;
use App\Provind;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.card', compact('categories'));
    }

    public function addToCart()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return view('error.404');// làm trang lỗi 400, bad request.
        }
        $food = Food::find($id);
        if ($food == null || $food->status != 1) {
            return view('error.404');
        }
        // validate quantity.
        $cart = new Cart();
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            if (array_key_exists($id, $cart->items)) {
                $quantity += $cart->items[$id]->quantity;
            }
        }
        $item = new CartItem();
        $item->food = $food;
        $item->quantity = $quantity;
        $item->food->dicountPriceString = $food->discountPriceString;
        $cart->items[$id] = $item;
        $cart->count = Cart::calculateTotalItem($cart);
        Session::put('cart', $cart);
        return redirect('/foody/xem-gio-hang');
    }

    public function showDistrict($id)
    {
        $district = District::where('provindID', $id)->get();
        foreach ($district as $d) {
            echo "<option value='$d->id'>$d->name</option>";
        }
    }

    public function showWard($id)
    {
        $ward = Ward::where('districtID', $id)->get();
        foreach ($ward as $w) {
            echo "<option value='$w->id'>$w->name</option>";
        }
    }

    public function showCart()
    {
        $categories = Category::all();
        $cart = new Cart();
        if (Session::has('cart')) {
            $cart = Session::get('cart');
        }
        return view('client.cart', compact('cart', 'categories'));
    }

    public function addToCartApi()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return response()->json(['msg' => 'Thông tin không hợp lệ'], 404);
        }
        $food = Food::find($id);

        $resID = $food->restaurantID;
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            foreach ($cart->items as $item) {
                if ($resID != $item->food->restaurantID) {
                    return response()->json(['msg' => 'Bạn không thể thực hiện điều này.
                 Hiện tại bạn không thể đặt món ăn của nhà hàng khác. Nếu muốn tiếp
                  tục điều này hãy xóa món ăn trong giỏ hàng và thử lại.'], 404);
                }
            }
        }

        if ($food == null || $food->status != 1) {
            return response()->json(['msg' => 'Sản phẩm không tồn tại hoặc đã bị xoá!'], 404);
        }

        $cart = new Cart();
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            if (array_key_exists($id, $cart->items)) {
                $quantity += $cart->items[$id]->quantity;
            }
        }
        $item = new CartItem();
        $item->food = $food;;
        $item->food->dicountPriceString = $food->discountPriceString;
        $item->quantity = $quantity;
        $cart->items[$id] = $item;
        $cart->count = Cart::calculateTotalItem($cart);
        $cart->total_money = $cart->getTotalMoneyString();
        Session::put('cart', $cart);
        return response()->json(['msg' => 'Thêm vào giỏ hàng thành công', 'cartItem' => $cart], 200);
    }

    public function checkout(Request $request)
    {
        $categories = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        return view('client.checkout', compact('categories', 'provind', 'district', 'ward'));
    }

    public function showCheckout()
    {
        $cart = new Cart();
        $foods = Input::get('foods');
        if (is_array($foods)) {
            foreach (array_keys($foods) as $key) {
                $food = Food::find($key);
                if ($food == null || $food->status != 1) {
                    return view('error.404');
                }
                $item = new CartItem();
                $item->food = $food;
                if ($item->quantity = $foods[$key] < 0) {
                    return view('error.404');
                }
                $item->quantity = $foods[$key];
                $cart->items[$key] = $item;
            }
        }
        Session::put('cart', $cart);
        $categories = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        return view('client.checkout', compact('categories', 'provind', 'district', 'ward'));
    }

    public function destroyCart(Request $request)
    {
        $id = Input::get('id');
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            unset($cart->items[$id]);
        }
        return redirect()->back();
    }

    public function checkoutCart(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'phone' => 'required|numeric',
                'time' => 'required',
                'date' => 'required',
                'address' => 'required|min:6'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.numeric' => 'Số điện thoại không chứa ký tự chũ cái và ký tự đặc biệt',
                'time.required' => 'Bạn chưa nhập giờ đến',
                'date.required' => 'Bạn chưa nhập ngày đến',
                'address.required' => 'Bạn chưa nhập địa chỉ chi tiết',
                'address.min' => 'Địa chỉ chi tiết phải lớn hơn 6 kí tụ'
            ]

        );
        $categories = Category::all();
        if (Session::has('cart')) {
            try {
                DB::beginTransaction();
                $cart = Session::get('cart');
                $order = new Order();
                $user = Auth::user();
                $order->userID = $user->id;
                foreach ($cart->items as $item) {
                    $resID = $item->food->restaurantID;
                }
//                dd($resID);
                $order->restaurantID = $resID;
                $order->amount = 0;
                $order->totalPrice = 0;
                $order->save();

                $address = new Address();
                $address->provindID = Input::get('provind');
                $address->wardID = Input::get('ward');
                $address->districtID = Input::get('district');
                $address->save();

                $order_info = new Order_info();
                $order_info->orderID = $order->id;
                $order_info->name = Input::get('name');
                $order_info->phone = Input::get('phone');
                $order_info->addressID = $address->id;
                $order_info->address = Input::get('address');
                $order_info->note = Input::get('note');
                $order_info->time = Input::get('time');
                $order_info->date = Input::get('date');
                $order_info->save();
                $order_id = $order->id;
                $order_details = array();
                foreach ($cart->items as $item) {
                    $food = Food::find($item->food->id);
                    if ($food == null || $food->status != 1) {
                        return view('error.404');
                    }
                    $quantity = $item->quantity;
                    $order_detail = new Order_detail();
                    $order_detail->orderID = $order_id;
                    $order_detail->foodID = $food->id;
                    $order_detail->amount = $quantity;
                    $order_detail->price = $food->discountPrice;
                    $order->amount += $order_detail->amount;
                    $order->totalPrice += $order_detail->price * $order_detail->amount;
                    $order_detail->save();
                    array_push($order_details, $order_detail);
                    $restaurant = DB::table('foods')
                        ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
                        ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
                        ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
                        ->join('districts', 'addresses.districtID', '=', 'districts.id')
                        ->join('wards', 'addresses.wardID', '=', 'wards.id')
                        ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                        ->where('foods.restaurantID', $item->food->restaurantID)->get()->toArray();
                }
                $order->save();
//                dd($restaurant);
                DB::commit();
                if ($restaurant == null) {
                    Mail::send('client.send_cart1', ['user' => $user, 'order_info' => $order_info], function ($message) use ($user) {
                        $message->from('quangkhaivnt@gmail.com', 'Foody Việt Nam');
                        $message->to($user->email, $user->name);
                        $message->subject('Thông tin đơn hàng');
                    });
                } else {
                    Mail::send('client.send_cart', ['user' => $user, 'restaurant' => $restaurant, 'order_info' => $order_info], function ($message) use ($user) {
                        $message->from('quangkhaivnt@gmail.com', 'Foody Việt Nam');
                        $message->to($user->email, $user->name);
                        $message->subject('Thông tin đơn hàng');
                    });
                }
                // clear session cart.
                Session::remove('cart');
                // send mail or sms.
                return view('client.order-success')->with('order', $order)->with('order_details', $order_details)->with('categories', $categories);
            } catch (\Exception $exception) {
                DB::rollBack();
                return 'Có lỗi xảy ra.' . $exception->getMessage();
            }

        } else {
            return redirect('/foody/danh-sach-nha-hang')->with('message', 'Hiện tại chưa có sản phẩm nào trong giỏ hàng.')->with('categories', $categories);
        }
    }


}