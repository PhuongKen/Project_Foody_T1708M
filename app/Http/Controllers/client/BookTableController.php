<?php
/**
 * Created by PhpStorm.
 * User: Sac Xuan
 * Date: 9/6/2018
 * Time: 4:37 PM
 */

namespace App\Http\Controllers\client;


use App\BookTableModel;
use App\Category;
use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BookTableController extends Controller
{
    public function datCho(Request $request)
    {
        $categories = Category::all();
        $id = $request->get('id');
        $booktable = Restaurant::find($id);
      //  dd($booktable);
        return view('client.bookTable',compact('categories','booktable'));

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'ngaydat' => 'required',
            'thoigiandat' => 'required',
            'sokhach' => 'required',
            'ghichu' => 'required',
        ],
            [
                'ngaydat.required' => 'Bạn chưa nhập tên',
                'thoigiandat.required' => 'Bạn chưa nhập thời gian đặt',
                'sokhach.required' => 'Bạn chưa nhập số lượng người',
                'ghichu.required' => 'Bạn chưa nhập gi chú'

            ]
        );
        $booktable = new BookTableModel();
        $booktable->userID = Auth::user()->id;
        $booktable->restaurantID = Input::get('restaurant');
        $booktable->ngaydat = Input::get('ngaydat');
        $booktable->thoigiandat = Input::get('thoigiandat');
        $booktable->sokhach = Input::get('sokhach');
        $booktable->ghichu = Input::get('ghichu');
        $booktable->save();
        return redirect('/admin/booktable');
    }
}