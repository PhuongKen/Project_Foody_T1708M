<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/25/2018
 * Time: 3:27 PM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use App\Address;
use App\Provind;
use App\District;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


class UpdateUserController extends Controller
{
    public function getEdit($id){
        $categories = Category::all();
        $user = User::find($id);
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        return view('client.updateuser',['list_obj'=>$user],compact('categories','provind', 'district', 'ward'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|min:3',
            'gender'=>'required',
            'avartar' => 'required',
            'phone' => 'required|numeric',

        ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'name.min'=>'Tên không ngắn quá 3 ký tự',
                'gender.required'=>'Giới tính không được để trống',
                'avartar.required' => 'Bạn chưa nhập ảnh đại diện',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.numeric'=>'Số điện thoại phải là số'
            ]
        );

        $list_obj = User::find($id);
        $address = new Address();
        $address -> provindID = Input::get('provind');
        $address -> districtID = Input::get('district');
        $address -> wardID = Input::get('ward');
        $address -> save();
        $list_obj -> addressID = $address-> id;
        $list_obj -> name = Input::get('name');
        $getAvartar = '';
        if ($request->hasFile('avartar')) {
            $this->validate($request,
                [
                    'avartar' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],
                [
                    'avartar.mimes' => 'Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
                    'avartar.max' => 'Ảnh giới hạn dung lượng không quá 2M',
                ]
            );
            $avartar = $request->file('avartar');
            $getAvartar = time() . '_' . $avartar->getClientOriginalName();
            $distional_path = public_path('/images/user');
            $avartar->move($distional_path, $getAvartar);
        }
        $list_obj->avartar = $getAvartar;
        $list_obj->gender = Input::get('gender');
        $list_obj -> phone = Input::get('phone');
        $list_obj -> save();
        return redirect()->back()->with('thanhcong','Thay đổi thành công');
    }
}