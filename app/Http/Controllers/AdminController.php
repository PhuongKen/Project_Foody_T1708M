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
        $start_date = '2018-07-20';
        $end_date = '2018-08-25';
        $chart_data = Order::select(DB::raw('sum(totalPrice) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date, $end_date))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        if(Auth::check()){
            return view('admin.home', compact('chart_data'));
        }else{
            return view('admin.login.login');
        }
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