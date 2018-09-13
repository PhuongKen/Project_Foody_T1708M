<?php

namespace App\Http\Controllers;

use App\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = DB::table('order_details')
            ->join('foods', 'foods.id', '=', 'order_details.foodID')
            ->where('orderID', '=', Input::get('id'))
            ->orderBy('order_details.created_at', 'DESC')->get();
//        dd($list_obj);
        return view('admin.orderdetail.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orderdetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'orderID' => 'required',
            'nameProduct' => 'required',
            'image' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ],
            [
                'orderID.required' => 'Bạn chưa nhập tên',
                'nameProduct.required' => 'Bạn chưa nhập nameProduct',
                'image.required' => 'Bạn chưa nhập image',
                'price.required' => 'Bạn chưa nhập price',
                'amount.required' => 'Bạn chưa nhập amount'

            ]
        );
        $orderdetail = new Order_detail();
        $orderdetail->orderID = Input::get('orderID');
        $orderdetail->foodID = Input::get('foodID');
        $orderdetail->nameProduct = Input::get('nameProduct');
        $orderdetail->image = Input::get('image');
        $orderdetail->price = Input::get('price');
        $orderdetail->amount = Input::get('amount');

        $orderdetail->save();
        return redirect('/admin/orderdetail');
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
        $orderdetail = Order_detail::find($id);
        return view('admin.orderdetail.edit')->with('orderaddress', $orderdetail);
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
        $this->validate($request, [
            // 'orderID' => 'required',
            'nameProduct' => 'required',
            'image' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ],
            [
                //    'orderID.required' => 'Bạn chưa nhập tên',
                'nameProduct.required' => 'Bạn chưa nhập nameProduct',
                'image.required' => 'Bạn chưa nhập image',
                'price.required' => 'Bạn chưa nhập price',
                'amount.required' => 'Bạn chưa nhập amount'

            ]
        );
        $orderdetail = Order_detail::find($id);
        if ($orderdetail == null) {
            return view('404');
        }
//        $orderdetail->orderID = Input::get('orderID');
//        $orderdetail->foodID = Input::get('foodID');
        $orderdetail->nameProduct = Input::get('nameProduct');
        $orderdetail->image = Input::get('image');
        $orderdetail->price = Input::get('price');
        $orderdetail->amount = Input::get('amount');
        $orderdetail->save();
        $list_obj = DB::table('order_details')->where('orderID', '=', $orderdetail->orderID)->orderBy('created_at', 'DESC')->get();
        // dd($orderdetail);

        return view('admin.orderdetail.list')->with('list_obj', $list_obj);
//        return redirect('/restaurant/detailorder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderdetail = Order_detail::where('orderID', $id);
        if ($orderdetail == null) {
            return view('error.404');
        }
        $orderdetail->delete();
    }
}