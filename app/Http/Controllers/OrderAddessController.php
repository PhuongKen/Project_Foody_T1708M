<?php

namespace App\Http\Controllers;

use App\Order_address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrderAddessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Order_address::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.orderaddress.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orderaddress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'orderID' => 'required',
            'phone' => 'required|numeric|min:9|max:12',
            'email' => 'required|email',
            'addressID'=> 'required',
        ],
            [
                'orderID.required' => 'Bạn chưa nhập tên',
                'phone.numeric'=>'Số điện thoại phải là số',
                'phone.min'=>'Số điện thoại không ngắn quá 9 kí tự',
                'phone.max'=>'Số điện thoại không dài quá 12 kí tự',
                'email.required' => 'Bạn chưa nhập email',
                'email.email'=>'Phải đúng định dạng email',
                'totalPrice.required' => 'totalPrice lớn hơn không',
                'totalPrice.required' => 'Bạn chưa nhập totalPrice',
                'addressID.required' => 'Bạn chưa nhập status'
            ]
        );
        $orderaddress = new Order_address();
        $orderaddress->orderID = Input::get('orderID');
        $orderaddress->phone = Input::get('phone');
        $orderaddress->email = Input::get('email');
        $orderaddress->addressID = Input::get('addressID');
        $orderaddress->save();
        return redirect('/admin/orderaddress ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderaddress = Order_address::find($id);
        return view('admin.orderaddress.edit')->with('orderaddress', $orderaddress);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'orderID' => 'required',
            'phone' => 'required|numeric|min:9|max:12',
            'email' => 'required|email',
            'addressID'=> 'required',
        ],
            [
                'userID.required' => 'Bạn chưa nhập tên',
                'phone.numeric'=>'Số điện thoại phải là số',
                'phone.min'=>'Số điện thoại không ngắn quá 9 kí tự',
                'phone.max'=>'Số điện thoại không dài quá 12 kí tự',
                'email.required' => 'Bạn chưa nhập email',
                'email.email'=>'Phải đúng định dạng email',
                'totalPrice.required' => 'totalPrice lớn hơn không',
                'totalPrice.required' => 'Bạn chưa nhập totalPrice',
                'addressID.required' => 'Bạn chưa nhập status'
            ]
        );
        $orderaddress = Order_address::find($id);
        if ($orderaddress == null) {
            return view('404');
        }
        $orderaddress->orderID = Input::get('orderID');
        $orderaddress->phone = Input::get('phone');
        $orderaddress->email = Input::get('email');
        $orderaddress->addressID = Input::get('addressID');
        $orderaddress->save();
        return redirect('/admin/orderaddress ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderaddress=Order_address::find($id);
        if ($orderaddress == null){
            return view('404');
        }
        $orderaddress->delete();
    }
}