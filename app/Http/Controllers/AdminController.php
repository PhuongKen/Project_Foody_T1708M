<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/23/2018
 * Time: 4:56 PM
 */

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function getHome()
    {
//        $order = DB::table('Orders')->max('totalPrice');
//        dd($order);
        return view('admin.home');
    }

    public function getChart()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = DB::table('orders')
            ->join('restaurants', 'restaurants.id', '=', 'orders.restaurantID')
            ->select(DB::raw('count(restaurantID) as revenue'), DB::raw('date(orders.created_at) as day'),
                'restaurants.name as nameRestaurant')
            ->where('orders.status', '=', 3)
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('orders.restaurantID')
            ->orderBy('revenue', 'desc')->take(10)
            ->get();
        return $chart_data;

    }


    public function getLogin()
    {
        Session::put("backUrl", URL::previous());
        $user = Auth::user();
        if (Auth::check() && $user->role == 1) {
            return redirect('/admin/chart');
        } else {
            return view('admin.login.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return redirect('/admin/chart');
        } else {
            return redirect()->back()->with('thatbai', 'Sai thông tin đăng nhập');
        }
    }

    public function getLogout()
    {
        $user = Auth::user();
        if (Auth::check() && $user->role == 1) {
            Auth::logout();
        }
        return redirect('/dang-nhap-admin');
    }

}