<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 9:47 AM
 */

namespace App\Http\Controllers;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        $categories = Category::all();
        return view('client.index',compact('categories'));
    }

    public function sendMail()
    {
        $data = array();
        Mail::send('client.send_mail', $data, function ($message) {
            $message->from('quangkhaivnt@gmail.com', 'quang khải');
            $message->to('quangkhaivnt@gmail.com', 'rush');
            $message->subject('Test Mail');
        });
        echo 'đã gửi';
    }

    public function getRegister()
    {
        return view('client.register');
    }

    public function postRegister(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email',
                'name'=>'required',
                'password'=>'required|min:6|max:20',
                'comfirm_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email phải đúng định dạng',
                'name.required'=>'Vui lòng nhập tên',
                'password.required'=>'Mật khẩu không được bỏ trống',
                'password.min'=>'Password không được nhỏ quá 6 kí tự',
                'password.max'=>'Password không lớn quá 20 kí tự',
                'comfirm_password.required'=>'Re password không được bỏ trống',
                'comfirm_password.same'=>'Password không giống nhau'
            ]
        );
        $user = new User();
//         $user->name = Input::get('name');
//         $user->email = Input::get('email');
//         $user->password = Hash::make(Input::get('password'));
//         $user->phone = Input::get('phone');
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
//        $user->phone = $req->phone;
        $user->remember_token = csrf_token();
        $user->save();
        Mail::send('client.send_mail', ['user' => $user], function ($message) use ($user) {
            $message->from('quangkhaivnt@gmail.com', 'quang khải');
            $message->to($user->email, $user->name);
            $message->subject('Xác nhận mật khẩu');
        });
        return redirect()->back()->with('thongbao', 'Đăng kí thành công,Kiểm tra mail để kích hoạt');
    }

    public function getLogin()
    {
        if(Auth::check()){
            return view('client.index');
        }else{
            return view('client.login');
        }
    }

    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return view('client.index');
        }else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }
    public function getLogout(){
        Auth::logout();
        return view('client.index');
    }

    public function verifyEmail($id, $token)
    {
        $user = User::where([
            ['id', '=', $id],
            ['remember_token', '=', $token]
        ])->first();
        if ($user) {
            $user->verifyEmail = 1;
            $user->save();
        }
        return redirect()->route('dangki')->with(['thanhcong', 'Đã kích hoạt tài khoản']);
    }

}