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
        $order = Order::where('userID', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(1);
        $order_detail = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=', 'orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.foodID')
            ->join('order_infos', 'order_infos.orderID', '=', 'orders.id')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->join('addresses as addUser','order_infos.addressID','=','addUser.id')
            ->join('provinds as proUser', 'addUser.provindID', '=', 'proUser.id')
            ->join('districts as disUser', 'addUser.districtID', '=', 'disUser.id')
            ->join('wards as wardUser', 'addUser.wardID', '=', 'wardUser.id')
            ->select('order_details.nameProduct', 'order_details.image', 'order_details.price',
                'order_details.amount', 'order_details.id as idDetail', 'orders.id', 'orders.status as st',
                'orders.created_at', 'restaurants.name as nameRestaurant', 'restaurants.phone as phoneRestaurant',
                'provinds.name as provindName', 'districts.name as districtName','wards.name as wardName',
                'order_infos.name as nameUser','order_infos.phone as phoneUser','order_infos.address as addressUser',
                'restaurants.addressDetail as addRestaurant','proUser.name as proName','disUser.name as disName',
                'wardUser.name as wardUserName')
            ->where('orders.userID', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get()->groupBy('id')->toArray();
//        $result = ($order_detail, true);
//        print_r($order_detail);
//        dd($order_detail);
        return view('client.order_history', compact('categories', 'order_detail', 'order'));
    }
}