<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 9:47 AM
 */

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function getHome()
    {
        $categories = Category::all();

        $restaurant = Restaurant::where('status', 1);
        $list_all = $restaurant->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list = $list_all->chunk(3);
        $address = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $restaurant1 = Restaurant::where('categoryID', 1);
        $list_all1 = $restaurant1->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list1 = $list_all1->chunk(3);
        $address1 = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',1)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $restaurant2 = Restaurant::where('categoryID', 2);
        $list_all2 = $restaurant2->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list2 = $list_all2->chunk(3);
        $address2 = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',2)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $restaurant3 = Restaurant::where('categoryID', 3);
        $list_all3 = $restaurant3->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list3 = $list_all3->chunk(3);
        $address3 = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',3)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $restaurant4 = Restaurant::where('categoryID', 4);
        $list_all4 = $restaurant4->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list4 = $list_all4->chunk(3);
        $address4 = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',4)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $restaurant5 = Restaurant::where('categoryID', 5);
        $list_all5 = $restaurant5->orderBy('created_at', 'DESC')->get()->take(15);
        $chunk_list5 = $list_all5->chunk(3);
        $address5 = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',5)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        return view('client.index', compact('categories', 'chunk_list', 'chunk_list1', 'chunk_list2',
            'chunk_list3','chunk_list4','chunk_list5','address','address1','address2','address3','address4','address5'));
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
        $categories = Category::all();
        return view('client.register', compact('categories'));
    }

    public function postRegister(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email',
                'name' => 'required',
                'password' => 'required|min:6|max:20',
                'comfirm_password' => 'required|same:password'
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email phải đúng định dạng',
                'name.required' => 'Vui lòng nhập tên',
                'password.required' => 'Mật khẩu không được bỏ trống',
                'password.min' => 'Password không được nhỏ quá 6 kí tự',
                'password.max' => 'Password không lớn quá 20 kí tự',
                'comfirm_password.required' => 'Re password không được bỏ trống',
                'comfirm_password.same' => 'Password không giống nhau'
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
        $categories = Category::all();
        if (Auth::check()) {
            return view('client.index', compact('categories'));
        } else {
            return view('client.login', compact('categories'));
        }
    }

    public function postLogin(Request $req)
    {
        $categories = Category::all();
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'verifyEmail' => 1])) {
            return view('client.index', compact('categories'));
        } else {
            return redirect()->back()->with('thatbai', 'Sai thông tin đăng nhập');
        }
    }

    public function getLogout()
    {
        $categories = Category::all();
        Auth::logout();
        return view('client.index', compact('categories'));
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
        return redirect()->route('dangnhap')->with(['thanhcong', 'Đã kích hoạt tài khoản']);
    }

}