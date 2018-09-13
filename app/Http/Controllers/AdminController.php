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
    public function getHome(){
//        $order = DB::table('Orders')->max('totalPrice');
//        dd($order);
        return view('admin.home');
    }

    public function chart(){
        $order = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=','orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.id')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->where('orders.status','=',3)
            ->select('restaurants.name', 'orders.updated_at',DB::raw('max(orders.totalPrice) as price'))
            ->orderBy('orders.updated_at', 'ASC')
//            ->orderBy(DB::raw('max(orders.totalPrice) as price'), 'DESC')
            ->groupBy('order_details.orderID')
            ->take(10)
            ->get();
        return response()->json($order);

    }



    public function getLogin()
    {
        Session::put("backUrl", URL::previous());
        $user = Auth::user();
        if(Auth::check() && $user->role == 1){
            return redirect('/admin/chart');
        }else{
            return view('admin.login.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return redirect('/admin/chart');
        }else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }

    public function getLogout(){
        $user = Auth::user();
        if (Auth::check() && $user->role == 1) {
            Auth::logout();
        }
        return redirect('/dang-nhap-admin');
    }

}