<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/28/2018
 * Time: 2:37 PM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderHistoryController
{
    public function index()
    {
        $categories = Category::all();
        $order = Order::where('userID', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $order_detail = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=', 'orders.id')
            ->select('order_details.nameProduct', 'order_details.image', 'order_details.price',
                'order_details.amount', 'orders.*')
            ->where('orders.userID', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get()->groupBy('id')->toArray();
//        $result = ($order_detail, true);
//        print_r($result);
        return view('client.order_history', compact('categories', 'order_detail', 'order'));
    }
}