<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provind;
use App\District;
use App\Ward;
use App\Address;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = User::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.user.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_obj = User::find($id);
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        if ($list_obj == null) {
            return view('error.404');
        }
        return view('admin.user.edit',compact('list_obj','provind','district','ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',

        ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'name.min'=>'Tên không ngắn quá 3 ký tự',
                'email.required' => 'Bạn chưa nhập email',
                'email.email'=>'Phải đúng định dạng email',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.numeric'=>'Số điện thoại phải là số',
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
        $list_obj -> email = Input::get('email');
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
        $list_obj -> phone = Input::get('phone');
        $list_obj->gender = Input::get('gender');
        $list_obj -> status = Input::get('status');
        $list_obj->role = Input::get('role');
        $list_obj -> save();
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = User::find($id);
        if($obj == null){
            return view('error.404');
        }
        $obj->delete();
    }
}
