<?php

namespace App\Http\Controllers;

use App\BookTableModel;
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
        $list_obj = BookTableModel::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.booktable.list')->with('list_obj',$list_obj);
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
            'soluongnguoilon' => 'required',
            'soluongtreem' => 'required',
            'ghichu' => 'required',
        ],
            [
                'ngaydat.required' => 'Bạn chưa nhập tên',
                'thoigiandat.required' => 'Bạn chưa nhập thời gian đặt',
                'soluongnguoilon.required' => 'Bạn chưa nhập số lượng người lớn',
                'soluongtreem.required' => 'Bạn chưa nhập số lượng trẻ em',
                'ghichu.required' => 'Bạn chưa nhập gi chú'

            ]
        );
        $booktable = new BookTableModel();
        $booktable->ngaydat = Input::get('ngaydat');
        $booktable->thoigiandat = Input::get('thoigiandat');
        $booktable->soluongnguoilon = Input::get('soluongnguoilon');
        $booktable->soluongtreem = Input::get('soluongtreem');
        $booktable->soluongtreem = Input::get('ghichu');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
