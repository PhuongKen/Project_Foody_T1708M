<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/27/2018
 * Time: 11:26 AM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.contact', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'diachi' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'yeucau' => 'required',
        ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'diachi.required' => 'Vui lòng nhập địa chỉ',
                'email.required' => 'Vui lòng nhập email',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'yeucau.required' => 'Bạn chưa nhập yêu cầu',
            ]);
        $contact = new Contact();
        $contact->name = Input::get('name');
        $contact->adrress = Input::get('diachi');
        $contact->email = Input::get('email');
        $contact->phone = Input::get('phone');
        $contact->request = Input::get('yeucau');
        $contact->save();
        return redirect('/foody/lien-he');
    }
}