<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 9/5/2018
 * Time: 2:07 PM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController
{
    public function nearBy(Request $request)
    {
        $categories = Category::all();
        $lat = $request->get('lat');
        $lng = $request->get('lng');
        $categoryID = null;
        if ($lat == null) {
            return "Vui lòng cho phép sử dụng vị trí của bạn";
        }
        $restaurants = Restaurant::whereBetween('lat', [$lat - 0.01, $lat + 0.01])->whereBetween('lng', [$lng - 0.1, $lng + 0.1]);
        $countRestaurant = $restaurants->get();
        $list_restaurant = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->whereBetween('lat', [$lat - 0.01, $lat + 0.01])->whereBetween('lng', [$lng - 0.1, $lng + 0.1])
            ->orderBy('created_at', 'DESC')
            ->paginate(8);

//        dd($address);

        return view('client.nearBy', compact('categories', 'countRestaurant', 'list_restaurant', 'lat', 'lng','categoryID'));
    }

    public function selectCategory(Request $request)
    {
        $categories = Category::all();
        $lat = $request->get('lat');
        $lng = $request->get('lng');
        $categoryID = $request->get('categoryID');
        $category = Category::find($categoryID);
        if ($lat == null) {
            return "Vui lòng cho phép sử dụng vị trí của bạn";
        }
        $restaurants = Restaurant::whereBetween('lat', [$lat - 0.01, $lat + 0.01])->whereBetween('lng', [$lng - 0.1, $lng + 0.1])
            ->where('categoryID', $categoryID);
        $countRestaurant = $restaurants->get();
        $list_restaurant = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->whereBetween('lat', [$lat - 0.01, $lat + 0.01])->whereBetween('lng', [$lng - 0.1, $lng + 0.1])
            ->where('categoryID', $categoryID)
            ->orderBy('created_at', 'DESC')
            ->paginate(8);
//        dd($list_restaurant[0]);
        return view('client.nearBy', compact('categories', 'countRestaurant',
            'list_restaurant', 'lat', 'lng','category','categoryID'));
    }
}