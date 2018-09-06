<?php

namespace App\Http\Controllers;

use App\BookTableModel;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BookTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $list_obj = BookTableModel::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.booktable.booktable')->with('list_obj',$list_obj)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booktable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
        $booktable->ngaydat = Input::get('ngaydat');
        $booktable->thoigiandat = Input::get('thoigiandat');
        $booktable->sokhach = Input::get('sokhach');
        $booktable->ghichu = Input::get('ghichu');
        $booktable->save();
        return redirect('/admin/booktable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_obj = BookTableModel::find($id);
        return view('admin.booktable.edit')->with('list_obj',$list_obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $booktable = BookTableModel::find($id);
        if ($booktable == null){
            return view('404');
        }
        $booktable->ngaydat = Input::get('ngaydat');
        $booktable->thoigiandat = Input::get('thoigiandat');
        $booktable->sokhach = Input::get('sokhach');
        $booktable->ghichu = Input::get('ghichu');
        $booktable->save();
        return redirect('/admin/booktable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booktable = BookTableModel::find($id);
        if ($booktable == null){
            return view('404');
        }
        $booktable->delete();
    }
}
