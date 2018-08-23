<?php

namespace App\Http\Controllers;

use App\AlbumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AlbumCmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = AlbumComment::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.albumcomment.list')->with('cmt',$comment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('admin.albumcomment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'userID' => 'required',
            'restaurantID' => 'required',
            'commentID' => 'required',
            'image' => 'required',
    ],
            [
                'userID.required' => 'Vui lòng nhập userID',
                'restaurantID.required' => 'Vui lòng nhập tên nhà hàng',
                'commentID.required' => 'Bạn chưa nhập nội dung',
                'image.required' => 'Bạn chưa nhập link ảnh',
        ]);
        $comment = new AlbumComment();
        $comment->userID = Input::get('userID');
        $comment->restaurantID = Input::get('restaurantID');
        $comment->commentID = Input::get('commentID');
        $comment->image = Input::get('image');
        $comment->save();
        return redirect('/admin/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comment = AlbumComment::find($id);
        if ($comment == null){
            return view('404');
        }
        return view('admin.albumcomment.edit')->with('cmt',$comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'userID' => 'required',
            'restaurantID' => 'required',
            'commentID' => 'required',
            'image' => 'required',
        ],
            [
                'userID.required' => 'Vui lòng nhập userID',
                'restaurantID.required' => 'Vui lòng nhập tên nhà hàng',
                'commentID.required' => 'Bạn chưa nhập nội dung',
                'image.required' => 'Bạn chưa nhập link ảnh',
            ]);
        $comment = AlbumComment::find($id);
        if ($comment == null){
            return view('404');
        }
        $comment = new AlbumComment();
        $comment->userID = Input::get('userID');
        $comment->restaurantID = Input::get('restaurantID');
        $comment->commentID = Input::get('commentID');
        $comment->image = Input::get('image');
        $comment->save();
        return redirect('/admin/album');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = AlbumComment::find($id);
        if ($comment == null){
            return view('404');
        }
        $comment -> delete();
    }
}
