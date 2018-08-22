<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/22/2018
 * Time: 8:51 PM
 */

namespace App\Http\Controllers;


class DetailController
{
        public function getDetail(){
            return view('client.detail');
        }
}