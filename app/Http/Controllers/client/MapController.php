<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/6/2018
 * Time: 2:53 PM
 */

namespace App\Http\Controllers\client;
use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;

class MapController
{
     public function map(Request $request){
         $categories = Category::all();
         $lat = $request->get('lat');
         $lng = $request->get('lng');
         if($lat == null){
             return "Vui lòng cho phép sử dụng vị trí của bạn";
         }
         $restaurants =Restaurant::whereBetween('lat',[$lat-0.1,$lat+0.1])->whereBetween('lng',[$lng-0.1,$lng+0.1])->get();
         $map = $restaurants->toJson();
//         dd($map);
         return view('client.map', compact('categories', 'list_restaurant','map'));
     }

}