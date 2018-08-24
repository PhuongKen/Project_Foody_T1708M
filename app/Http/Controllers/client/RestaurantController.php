<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers\client;


use App\Category;

class RestaurantController
{
        public function index(){
            $categories = Category::all();
            return view('client.restaurant',compact('categories'));
        }
}