<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/22/2018
 * Time: 8:51 PM
 */

namespace App\Http\Controllers;


use App\Category;

class DetailController
{
        public function getDetail(){
            $categories = Category::all();
            return view('client.detail',compact('categories'));
        }
}