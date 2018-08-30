<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/30/2018
 * Time: 11:24 AM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\District;
use App\Provind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController
{
    public function search(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $search = $request->search_data;
        $list_restaurant = DB::table('restaurants')->where('name', 'like', '%' . $search . '%')->where('status', '=', '1')->take(15)->get();
//        dd($list_restaurant);
        return view('client.category', compact('list_restaurant', 'categories','search','provind','district'));
    }
}