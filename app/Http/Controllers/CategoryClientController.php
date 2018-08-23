<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/22/2018
 * Time: 8:41 PM
 */

namespace App\Http\Controllers;


class CategoryClientController
{
     public function getCategory(){
         return view('client.category');
     }
}