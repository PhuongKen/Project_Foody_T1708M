<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/9/2018
 * Time: 10:20 PM
 */

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminRestaurantController extends Controller
{
    public function getHome()
    {
        return view('admin-restaurant.chart', compact('order'));
    }

    public function getChartDataApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = DB::table('orders')
            ->join('restaurants', 'restaurants.id', '=', 'orders.restaurantID')
            ->select(DB::raw('sum(totalPrice) as revenue'), DB::raw('date(orders.created_at) as day'))
            ->where('restaurants.userID', '=', Auth::user()->id)
            ->where('orders.status', '=', 3)
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('day')
            ->orderBy('day', 'asc')
            ->get();
        return $chart_data;
    }

    public function chart()
    {
        $order = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=', 'orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.foodID')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->where('orders.status', '=', 3)
            ->where('restaurants.userID', '=', Auth::user()->id)
            ->orderBy('orders.updated_at', 'ASC')
            ->groupBy('order_details.orderID')
            ->select('restaurants.name', 'orders.totalPrice', 'orders.updated_at')
            ->get();
//           dd($order);
//        $order = Order::all();
        return response()->json($order);

    }

    public function chartmonth()
    {
        $order = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=', 'orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.foodID')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->select(DB::raw('sum(orders.totalPrice)'), 'restaurants.name', DB::raw('MONTH(orders.updated_at) as month'))
            ->where('orders.status', '=', 3)
            ->where('restaurants.userID', '=', Auth::user()->id)
            ->orderBy(DB::raw('MONTH(orders.updated_at)'), 'ASC')
            ->groupBy(DB::raw('MONTH(orders.updated_at)'))
//            ->groupBy(DB::raw('MONTH(orders.updated_at)'))
            ->get();
        return response()->json($order);
    }

    public function getLogin()
    {
        $user = Auth::user();
        if (Auth::check() && $user->role == 2) {
            return redirect('/admin-restaurant');
        } else {
            return view('admin-restaurant.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return redirect('/admin-restaurant');
        } else {
            return redirect()->back()->with('thatbai', 'Sai thông tin đăng nhập');
        }
    }

    public function getLogout()
    {
        $user = Auth::user();
        if (Auth::check() && $user->role == 2) {
            Auth::logout();
        }
        return redirect('/dang-nhap-admin-restaurant');
    }
}