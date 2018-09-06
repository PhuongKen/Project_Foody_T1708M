<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Faker\Guesser\Name;
use Hamcrest\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Food::where('status', 1)->orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.food.list')->with('foods', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = Restaurant::all();
        return view('admin.food.create')->with('restaurant',$restaurant);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'restaurantID' => 'required',
            'name' => 'required',
            'avatar' => 'required',
            'price' => 'required|numeric|min:0',
            'status' => 'required',
            ],
            [
                'restaurantID.required' => 'Vui lòng nhập tên cửa hàng',
                'name.required' => 'Bạn chưa nhập tên',
                'avatar.required' => 'Vui lòng nhập link ảnh',
                'price.required' => 'Bạn chưa nhập số tiền',
                'price.numeric' => 'Bạn phải nhập giá trị là số',
                'price.min' => 'Bạn phải nhập giá trị lớn hơn 1',
                'status.required' => 'Vui lòng nhập trạng thái của bạn',
        ]);
        $food = new Food();
        $food->restaurantID = Input::get('restaurantID');
        $food->name = Input::get('name');
        $getAvartar = '';
        if ($request->hasFile('avatar')) {
            $this->validate($request,
                [
                   'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],
                [
                    'avatar.mimes' => 'Chỉ chấp nhận ảnh với đuôi .jpg .jpeg .png .gif',
                    'avatar.max' => 'Ảnh giới hạn dung lượng không quá 2M',
                ]
            );
            $avartar = $request->file('avatar');
            $getAvartar = time() . '_' . $avartar->getClientOriginalName();
            $distional_path = public_path('/images/food');
            $avartar->move($distional_path, $getAvartar);
        }
            $food->avartar = Input::get('avatar');
        $food->price = Input::get('price');
        $food->status = Input::get('status');
        $food-> save();
        return redirect('/admin/food');
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
        $restaurant = Restaurant::all();
        $food = Food::find($id);
        if ($food == null){
            return redirect('/errors');
        }
        return view('admin.food.edit')->with('foods',$food)->with('restaurant',$restaurant);
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
            'restaurantID' => 'required',
            'name' => 'required',
            'avatar' => 'required',
            'price' => 'required|numeric|min:0',
            'status' => 'required',
        ],
            [
                'restaurantID.required' => 'Vui lòng nhập tên cửa hàng',
                'name.required' => 'Bạn chưa nhập tên',
                'avatar.required' => 'Vui lòng nhập link ảnh',
                'price.required' => 'Bạn chưa nhập số tiền',
                'price.numeric' => 'Bạn phải nhập giá trị là số',
                'price.min' => 'Bạn phải nhập giá trị lớn hơn 1',
                'status.required' => 'Vui lòng nhập trạng thái của bạn',
            ]);
        $food = Food::find($id);
        if ($food == null){
            return view('error.404');
        }
        $food->restaurantID = Input::get('restaurantID');
        $food->name = Input::get('name');
        $food->avartar = Input::get('avatar');
        $food->price = Input::get('price');
        $food->status = Input::get('status');
        $food-> save();
        return redirect('/admin/food');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $food = Food::find($id);
            if ($food == null){
                return redirect('/errors');
            }
       $food -> delete();
    }
}
