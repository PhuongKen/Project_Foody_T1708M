<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $list_obj = DB::table('orders')
            ->join('order_details', 'order_details.orderID', '=', 'orders.id')
            ->join('foods', 'foods.id', '=', 'order_details.foodID')
            ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
            ->where('restaurants.userID', '=', Auth::user()->id)
            ->select('orders.*')
            ->orderBy('created_at', 'desc')
            ->groupBy('orders.id')->get();
//        dd($list_obj);
        return view('admin.order.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create');
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
            'userID' => 'required',
            'amount' => 'required|numeric|min:0',
            'totalPrice' => 'required|numeric|min:0',
            'status' => 'required|numeric|min:0',
        ],
            [
                'userID.required' => 'Bạn chưa nhập tên',
                'amount.required' => 'amount lớn hơn không',
                'amount.required' => 'Bạn chưa nhập amount',
                'totalPrice.required' => 'totalPrice lớn hơn không',
                'totalPrice.required' => 'Bạn chưa nhập totalPrice',
                'status.required' => 'status lớn hơn không',
                'status.required' => 'Bạn chưa nhập status'
            ]
        );
        $order = new Order();
        $order->userID = Input::get('userID');
        $order->amount = Input::get('amount');
        $order->totalPrice = Input::get('totalPrice');
        $order->status = Input::get('status');
        $order->save();
        return redirect('/restaurant/order');

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
        $order = Order::find($id);
        return view('admin.order.edit')->with('order', $order);
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
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = 2;
        $order->update();
        return 'null';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->delete();
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        $mail = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.userID')
            ->select('users.email', 'users.name')
            ->where('orders.id', $id)->get();
//        dd($mail);
        if ($status == 2) {
            Mail::send('admin.sendMail', ['user' => $mail], function ($message) use ($mail) {
                $message->from('quangkhaivnt@gmail.com', 'Foody Việt Nam');
                $message->to($mail[0]->email, $mail[0]->name);
                $message->subject('Đơn hàng của bạn đã được xác nhận');
            });
        }
        if ($status == 3) {
            Mail::send('admin.sendMail1', ['user' => $mail], function ($message) use ($mail) {
                $message->from('quangkhaivnt@gmail.com', 'Foody Việt Nam');
                $message->to($mail[0]->email, $mail[0]->name);
                $message->subject('Đơn hàng của bạn đã hoàn thành');
            });
        }
        return redirect('/restaurant/order');
    }
}
