<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Order::orderBy('created_at', 'DESC')->paginate(3);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Order();
        $order->userID = Input::get('userID');
        $order->amount = Input::get('amount');
        $order->totalPrice = Input::get('totalPrice');
        $order->status = Input::get('status');
        $order->save();
        return redirect('/admin/order');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order= Order::find($id);
        return view('admin.order.edit')->with('order',$order);
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
        $order=Order::find($id);
        if ($order==null){
            return view('404');
        }
        $order->userID = Input::get('userID');
        $order->amount = Input::get('amount');
        $order->totalPrice = Input::get('totalPrice');
        $order->status = Input::get('status');
        $order->save();
        return redirect('/admin/order');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $order = Order::find($id);
       if ($order==null){
           return view('404');
       }
       $order->delete();
    }
}
