<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/21/2018
 * Time: 9:47 AM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController
{
    public function getHome(){
        return view('client.index');
    }

    public function sendMail()
    {
        $data = array();
        Mail::send('client.send_mail', $data, function ($message) {
            $message->from('quangkhaivnt@gmail.com', 'quang khải');
            $message->to('quangkhaivnt@gmail.com', 'rush');
            $message->subject('Test Mail');
        });
        echo 'đã gửi';
    }
}