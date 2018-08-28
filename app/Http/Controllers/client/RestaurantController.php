<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController
{
        public function index(Request $request){
            $categories = Category::where('status', 1)->get();
            $food = Food::where('status',1);
            $selected_restaurantId = $request->get('id');
            $restaurant = Restaurant::find($selected_restaurantId);
            $food = $food->where('restaurantID', $selected_restaurantId)->get();
            $list_food = $food->take(count($food));
            $chunk_list = $list_food->chunk(3);
//            dd($chunk_list);
            $address = DB::table('restaurants')
                ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.name', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('restaurants.id',$selected_restaurantId)
                ->get()->toArray();
            return view('client.restaurant',compact('categories','chunk_list','address','restaurant'));
        }
}