<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Faker\Guesser\Name;
use Hamcrest\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = DB::table('foods')
            ->join('restaurants','foods.restaurantID','=','restaurants.id')
            ->select('foods.*')
            ->where('restaurants.userID','=',Auth::user()->id)
            ->orderBy('created_at','desc')->get();
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
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'status' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'price.required' => 'Bạn chưa nhập số tiền',
                'price.numeric' => 'Bạn phải nhập giá trị là số',
                'price.min' => 'Bạn phải nhập giá trị lớn hơn 1',
                'status.required' => 'Vui lòng nhập trạng thái của bạn',
        ]);
        $restaurant = DB::table('restaurants')->where('userID','=',Auth::user()->id)->get();
        $food = new Food();
        $restaurantID = $restaurant[0]->id;
//        dd($restaurantID);
        $food->restaurantID = $restaurantID;
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
            $food->avatar = $getAvartar;
        $food->price = Input::get('price');
        $food->discount = Input::get('discount');
        $food->status = Input::get('status');
        $food-> save();
        return redirect('/restaurant/food');
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
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'status' => 'required',
        ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'price.required' => 'Bạn chưa nhập số tiền',
                'price.numeric' => 'Bạn phải nhập giá trị là số',
                'price.min' => 'Bạn phải nhập giá trị lớn hơn 1',
                'status.required' => 'Vui lòng nhập trạng thái của bạn',
            ]);
        $restaurant = DB::table('restaurants')->where('userID','=',Auth::user()->id)->get();
        $food = Food::find($id);
        $restaurantID = $restaurant[0]->id;
//        dd($restaurantID);
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
        $food->avatar = $getAvartar;
        $food->price = Input::get('price');
        $food->discount = Input::get('discount');
        $food->status = Input::get('status');
        $food-> save();
        return redirect('/restaurant/food');
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
