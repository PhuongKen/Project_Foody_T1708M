<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 9:17 AM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\District;
use App\Provind;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FoodController
{
    public function index(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::where('status', 1)->get();
        $restaurants = Restaurant::where('status', 1);
        $categoryID = $request->get('categoryID');
        $selected_category = Category::find($categoryID);
        $restaurants = $restaurants->where('categoryID', $categoryID);
        $countRestaurant = $restaurants->get();

        $list_restaurant = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID', $categoryID)
            ->orderBy('created_at', 'DESC')
            ->paginate(8);
//        print_r(array_keys($address));

        return view('client.category', compact('categories', 'selected_categoryId', 'list_restaurant',
            'selected_category', 'provind', 'district', 'categoryID', 'countRestaurant'));
    }
}