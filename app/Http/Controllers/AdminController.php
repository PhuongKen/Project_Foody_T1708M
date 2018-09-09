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

class AdminController extends Controller
{
    public function getHome(){
//        $order = DB::table('Orders')->max('totalPrice');
//        dd($order);
        return view('admin.home',compact('order'));
    }

    public function chart(){
        $totalPrice = [
            ['totalPrice', '>=', 'sum(totalPrice) / 2']
        ];
        $order = DB::table('Orders')
            ->where($totalPrice)
            ->get();

//        $order = Order::all()->take(3);
        return response()->json($order);

    }



    public function getLogin()
    {
        if(Auth::check()){
            return redirect('/admin');
        }else{
            return view('admin.login.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return redirect('/admin');
        }else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/dang-nhap-admin');
    }

}