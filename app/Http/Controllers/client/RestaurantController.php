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
use App\Rating;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RestaurantController
{
    public function index(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $food = Food::where('status', 1);
        $selected_restaurantId = $request->get('id');
        $restaurant = Restaurant::find($selected_restaurantId);
        if ($restaurant == null) {
            return view('error.404');
        }
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
            ->where('restaurants.id', $selected_restaurantId)
            ->where('restaurants.status', '=', 1)
            ->get()->toArray();
        if (Auth::check()) {
            $rate = DB::table('orders')
                ->join('users', 'users.id', '=', 'orders.userID')
                ->join('order_details', 'order_details.orderID', '=', 'orders.id')
                ->join('foods', 'foods.id', '=', 'order_details.foodID')
                ->join('restaurants', 'restaurants.id', '=', 'foods.restaurantID')
                ->select('restaurants.*')
                ->where('orders.userID', '=', Auth::user()->id)
                ->where('restaurants.id', $selected_restaurantId)
                ->where('orders.status', '=', 3)->get()->toArray();
//                dd($rate);
        }
        return view('client.restaurant', compact('categories', 'chunk_list', 'address', 'restaurant', 'rate', 'selected_restaurantId'));
    }

    public function rating(Request $request)
    {
        $rate = new Rating();
        $rate->userID = Auth::user()->id;
        $rate->restaurantID = $request->get('restaurantID');
        $rate->rate = $request->get('rating');
        $rate->save();
        return redirect()->back();
    }

    public function noibat()
    {
        $categories = Category::all();
        $datetime = date('Y-m-d');
        $date = new \DateTime($datetime);
        $date = date_format($date->modify("-6 day"),'Y-m-d');

        $start_date = $date;
        $end_date = $datetime;;
        $restaurants = DB::table('orders')
            ->join('restaurants', 'restaurants.id', '=', 'orders.restaurantID')
            ->select(DB::raw('count(restaurantID) as revenue'),'restaurants.*')
            ->where('orders.status', '=', 3)
            ->where('restaurants.status','=',1)
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'));

        $countRestaurant = $restaurants->get();
//        dd($countRestaurant);
        $list_restaurant = DB::table('orders')
            ->join('restaurants', 'restaurants.id', '=', 'orders.restaurantID')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select(DB::raw('count(restaurantID) as revenue'),'restaurants.*', 'provinds.name as provindName',
                'districts.name as districtName', 'wards.name as wardName')
            ->where('orders.status', '=', 3)
            ->whereBetween('orders.created_at', array($start_date . ' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('orders.restaurantID')
            ->orderBy('revenue', 'desc')->take(10)
            ->paginate(10);
//        dd($list_restaurant);
        return view('client.topHightLight',compact('list_restaurant','categories'));
    }
}