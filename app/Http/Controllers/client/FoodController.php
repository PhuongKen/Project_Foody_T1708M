<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 9:17 AM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FoodController
{
    public function index(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $restaurants = Restaurant::where('status', 1);
        $selected_categoryId = $request->get('categoryID');
        $selected_category = Category::find($selected_categoryId);
        $restaurants = $restaurants->where('categoryID', $selected_categoryId);
        $list_restaurant = $restaurants->orderBy('created_at', 'DESC')->paginate(50);
        $address = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('categoryID',$selected_categoryId)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();
//        print_r(array_keys($address));

        return view('client.category', compact('categories', 'selected_categoryId', 'list_restaurant', 'selected_category','address'));
    }
}