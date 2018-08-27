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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ContactController
{
public function index(){
    $categories = Category::all();
    return view('client.contact',compact('categories'));
}
public function store(Request $request){
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