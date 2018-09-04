<?php

namespace App\Http\Controllers;

use App\Address;
use App\Album_restaurant;
use App\Category;
use App\District;
use App\Provind;
use App\Restaurant;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurant = DB::table('restaurants')->orderBy('created_at','desc')->get();
        $address = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->orderBy('created_at','DESC')
            ->get()->toArray();
        return view('admin.restaurant.index', compact('restaurant', 'address'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();

        return view('admin.restaurant.create', compact('category', 'provind', 'district', 'ward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:15',
                'avartar' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
                'phone' => 'required|numeric',
                'addressDetail' => 'required|min:6',
                'openTime' => 'required',
                'closeTime' => 'required',
                'shortDescription' => 'required|min:70',
                'description' => 'required|min:250',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên nhà hàng',
                'name.min' => 'Tên nhà hàng phải lớn hơn 15 ký tự',
                'avartar.required' => 'Bạn chưa thêm ảnh',
                'addressDetail.required'=>'Bạn chưa nhập địa chỉ chi tiết',
                'addressDetail.min'=>'Bạn phải nhập địa chỉ chi tiết trên 6 ký tự',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.numeric' => 'Số điện thoại không chứa ký tự chũ cái và ký tự đặc biệt',
                'openTime.required' => 'Bạn chưa nhập giờ mở cửa',
                'closeTime.required' => 'Bạn chưa nhập giờ đóng cửa',
                'shortDescription.required' => 'Bạn chưa nhập mô tả ngắn',
                'shortDescription.min'=>'Mô tả ngắn phải lớn hơn 70 ký tự',
                'description.required' => 'Bạn chưa nhập mô tả chi tiết',
                'description.min'=>'Mô tả chi tiết phải lớn hơn 250 ký tự',
            ]

        );
        $restaurant = new Restaurant();
        $restaurant->categoryID = Input::get('category');
        $restaurant->name = Input::get('name');
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
            $distional_path = public_path('/images/restaurant');
            $avartar->move($distional_path, $getAvartar);
        }
        $restaurant->avartar = $getAvartar;
        $address = new Address();
        $address->provindID = Input::get('provind');
        $address->districtID = Input::get('district');
        $address->wardID = Input::get('ward');
        $address->save();
        $restaurant->addressID = $address->id;
        $restaurant->addressDetail = Input::get('addressDetail');
        $restaurant->phone = Input::get('phone');
        $restaurant->openTime = Input::get('openTime');
        $restaurant->closeTime = Input::get('closeTime');
        $restaurant->shortDescription = Input::get('shortDescription');
        $restaurant->description = Input::get('description');
        $restaurant->status = Input::get('status');
        $restaurant->save();
        $image_array = $request->file('img');
        $image_len = count($image_array);
        if ($request->hasFile('img')) {
            for ($i = 0; $i < $image_len; $i++) {
                $new_image_name = time() . '_' . $image_array[$i]->getClientOriginalName();
                $destination_path = public_path('/images/restaurant');
                $image_array[$i]->move($destination_path, $new_image_name);
                $album_restaurant = new Album_restaurant();
                $album_restaurant->restaurantID = $restaurant->id;
                $album_restaurant->image = $new_image_name;
                $album_restaurant->save();
            }
        }
        return redirect('/admin/restaurant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('admin.restaurant.view',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        $category = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();
        $address = Address::all();
        $album_restaurant = Album_restaurant::where('restaurantID',$id)->get();
        return view('admin.restaurant.edit', compact('restaurant','category','address','provind','district','ward','album_restaurant'));
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
        $restaurant = Restaurant::find($id);
        if($restaurant == null){
            return 'Nhà hàng không tồn tại hoặc đã bị xóa';
        }
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
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        if($restaurant == null){
            return response('Sản phẩm không tồn tại hoặc đã bị xóa','404');
        }
        $restaurant -> delete();
    }
}
