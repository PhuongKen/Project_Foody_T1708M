<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/24/2018
 * Time: 11:01 PM
 */

namespace App\Http\Controllers\client;


use App\Category;

class CardController
{
       public function index(){
           $categories = Category::all();
           return view('client.card',compact('categories'));
       }
}