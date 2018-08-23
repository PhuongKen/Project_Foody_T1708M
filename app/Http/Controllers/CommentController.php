<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.comment.list')->with('cmt',$comment);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->userID = Input::get('userID');
        $comment->restaurantID = Input::get('restaurantID');
        $comment->commentType = Input::get('commentType');
        $comment->title = Input::get('title');
        $comment->content = Input::get('Content');
        $comment->save();
        return redirect('/admin/comment');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        if ($comment == null){
            return view('404');
        }
        return view('admin.comment.edit')->with('cmt',$comment);

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
        $comment = Comment::find($id);
        if ($comment == null){
            return view('404');
        }
        $comment = new Comment();
        $comment->userID = Input::get('userID');
        $comment->restaurantID = Input::get('restaurantID');
        $comment->commentType = Input::get('commentType');
        $comment->title = Input::get('title');
        $comment->content = Input::get('content');
        $comment->save();
        return redirect('/admin/comment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
