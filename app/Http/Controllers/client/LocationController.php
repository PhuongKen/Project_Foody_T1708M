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
    public function nearBy(Request $request){
        $categories = Category::all();
        $lat = $request->get('lat');
        $lng = $request->get('lng');
        if($lat == null){
            return "Vui lòng cho phép sử dụng vị trí của bạn";
        }
        $restaurants =Restaurant::whereBetween('lat',[$lat-0.1,$lat+0.1])->whereBetween('lng',[$lng-0.1,$lng+0.1]);
        $countRestaurant = $restaurants->get();
        $list_restaurant = $restaurants->orderBy('created_at', 'DESC')->paginate(8);
//        dd($list_restaurant);
//        $list_restaurant = DB::table('restaurant')
       return view('client.nearBy', compact('list_restaurant', 'categories','countRestaurant'));
    }
}