<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
=======
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
        $category = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
<<<<<<< HEAD

=======
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
        return view('restaurant.create', compact('category', 'provind', 'district', 'ward'));
    }

    /**
<<<<<<< HEAD
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
=======
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
    {
        $this->validate($request,
            [
                'name' => 'required',
                'avartar' => 'required',
                'phone' => 'required',
                'openTime' => 'required',
                'closeTime' => 'required',
                'shortDescription' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên nhà hàng',
                'avartar.required' => 'Bạn chưa thêm ảnh',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'openTime.required' => 'Bạn chưa nhập giờ mở cửa',
                'closeTime.required' => 'Bạn chưa nhập giờ đóng cửa',
                'shortDescription.required' => 'Bạn chưa nhập mô tả ngắn',
                'description.required' => 'Bạn chưa nhập mô tả chi tiết',
            ]

        );
        $restaurant = new Restaurant();
        $restaurant->categoryID = Input::get('category');
        $restaurant->name = Input::get('name');
        $getAvartar ='';
        if($request->hasFile('avartar')){
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
            $getAvartar = time().'_'.$avartar->getClientOriginalName();
            $distional_path = public_path('/images/restaurant');
            $avartar->move($distional_path,$getAvartar);
        }
        $restaurant->avartar = $getAvartar;
        $address = new Address();
        $address->provindID = Input::get('provind');
        $address->districtID = Input::get('district');
        $address->wardID = Input::get('ward');
        $address->save();
        $restaurant->addressID = $address->id;
        $restaurant->phone = Input::get('phone');
        $restaurant->openTime = Input::get('openTime');
        $restaurant->closeTime = Input::get('closeTime');
        $restaurant->shortDescription = Input::get('shortDescription');
        $restaurant->description = Input::get('description');
        $restaurant->status = Input::get('status');
        $restaurant->save();
        $image_array = $request->file('img');
        $image_len = count($image_array);
        if($request->hasFile('img')){
            for ($i = 0; $i < $image_len; $i++){
                $new_image_name = time().'_'.$image_array[$i]->getClientOriginalName();
                $destination_path = public_path('/images/restaurant');
                $image_array[$i]->move($destination_path, $new_image_name);
                $album_restaurant = new Album_restaurant();
                $album_restaurant -> restaurantID = $restaurant -> id;
                $album_restaurant -> image = $new_image_name;
                $album_restaurant ->save();
            }
        }
        return redirect('/admin/restaurant');
    }

    /**
<<<<<<< HEAD
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
=======
     * Display the specified resource.
     *
     * @param  int $id
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
=======
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int  $id
=======
     * @param  int $id
>>>>>>> 413c56eb72cbed3a4b9688b34b046420c1ee4eb1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
