<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 9:47 AM
 */

namespace App\Http\Controllers;


class HomeController
{
    public function getHome(){
        return view('client.home');
    }
}