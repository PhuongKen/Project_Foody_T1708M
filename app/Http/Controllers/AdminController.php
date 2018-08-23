<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/23/2018
 * Time: 4:56 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getHome(){
        return view('admin.home');
    }

    public function getLogin()
    {
        if(Auth::check()){
            return redirect('/admin/user');
        }else{
            return view('admin.login.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1,'role'=>1])) {
            return redirect('/admin/user');
        }else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('admin');
    }

}