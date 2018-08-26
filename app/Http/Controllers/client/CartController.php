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
use App\Order_address;
use App\Order_detail;
use App\Provind;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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

    public function showCart()
    {
        $categories = Category::all();
        $cart = new Cart();
        if (Session::has('cart')) {
            $cart = Session::get('cart');
        }
        return view('client.cart',compact('cart','categories'));
    }

    public function addToCartApi()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return response()->json(['msg' => 'Thông tin không hợp lệ'], 404);
        }
        $food = Food::find($id);
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

    public function updateCart()
    {
        $cart = new Cart();

        $food = Input::get('foods');

        if (is_array($food)) {
            foreach (array_keys($food) as $key) {
                $food = Food::find($key);
                if ($food == null || $food->status != 1) {
                    return view('error.404');
                }
                $item = new CartItem();
                $item->food = $food;
                $item->quantity = $food[$key];
                $cart->items[$key] = $item;
            }
        }
        Session::put('cart', $cart);
        return redirect('/xem-gio-hang');
    }
    public function destroyCart($id)
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            Session::remove('cart');
        }
        return redirect()->back();
    }

    public function checkoutCart()
    {
        $categories = Category::all();
        if (Session::has('cart')) {
            try {
                DB::beginTransaction();
                $cart = Session::get('cart');
                $order = new Order();
                $order->userID = Auth::id();
                $order->amount = 0;
                $order->totalPrice = 0;
                $order->save();

                $address = new Address();
                $address->provindID = Input::get('provind');
                $address->wardID = Input::get('ward');
                $address->districtID = Input::get('district');
                $address->save();

                $order_address = new Order_address();
                $order_address->orderID = $order->id;
                $order_address->name = Input::get('name');
                $order_address->phone = Input::get('phone');
                $order_address->addressID = $address->id;
                $order_address->address = Input::get('address');
                $order_address->note = Input::get('note');
                $order_address->save();
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
                    $order_detail->image = $item->food->avatar;
                    $order_detail->nameProduct = $item->food->name;
                    $order_detail->price = $food->discountPrice;
                    $order->amount += $order_detail->amount;
                    $order->totalPrice += $order_detail->price * $order_detail->amount;
                    $order_detail->save();
                    array_push($order_details, $order_detail);
                }
                $order->save();
                DB::commit();
                // clear session cart.
                Session::remove('cart');
                // send mail or sms.
                return view('client.order-success')->with('order', $order)->with('order_details', $order_details)->with('categories',$categories);
            } catch (\Exception $exception) {
                DB::rollBack();
                return 'Có lỗi xảy ra.' . $exception->getMessage();
            }

        } else {
            return redirect('/foody/danh-sach-nha-hang')->with('message', 'Hiện tại chưa có sản phẩm nào trong giỏ hàng.')->with('categories',$categories);
        }
    }

    public function showCheckout(){
        $categories = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        return view('client.checkout',compact('categories','provind','district','ward'));
    }
}