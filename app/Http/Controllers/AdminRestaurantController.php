<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/9/2018
 * Time: 10:20 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    public function getHome(){
        return view('admin-restaurant.chart',compact('order'));
    }

    public function chart(){
            $order = DB::table('orders')
                ->join('order_details', 'order_details.orderID', '=','orders.id')
                ->join('foods', 'foods.id', '=', 'order_details.id')
                ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
                ->where('orders.status','=',3)
                ->orderBy('orders.updated_at', 'ASC')
                ->groupBy('order_details.orderID')
                ->select('restaurants.name', 'orders.totalPrice','orders.updated_at')
                ->get();
//           dd($order);
//        $order = Order::all();
        return response()->json($order);

    }

    public function chartmonth(){
        $order = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=','orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.id')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->where('orders.status','=',3)
            ->orderBy(DB::raw('MONTH(orders.updated_at)'), 'ASC')
            ->groupBy(DB::raw('MONTH(orders.updated_at)'))
            ->select('restaurants.name', DB::raw('MONTH(orders.updated_at) as month'), DB::raw('sum(orders.totalPrice) as price'))
            ->get();
        return response()->json($order);
    }
}