<?php
/**
 * Created by PhpStorm.
 * User: Sac Xuan
 * Date: 8/27/2018
 * Time: 11:16 AM
 */

namespace App\Http\Controllers\client;


use App\Category;

class AboutusController
{
 public function index(){
     $categories = Category::all();
     return view('client.aboutus',compact('categories'));
 }
}