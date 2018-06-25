<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Comment;
use Session;
use Auth;
use App\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request = $request->all();
        // $idTinTuc = $id;
        // $comment = new Comment;
        // $comment->idTinTuc = $idTinTuc;
        // $comment->idUser = Auth::user();
        // $comment->comment = $request->comment;
        // $comment->save();
        // return back();


        $data = $request->all();
        $post_data = Post::findOrFail($data['idTinTuc']);
        // dd($data);
        // lưu dữ liệu
        if ($post_data) {
            $comment_data = new Comment;
            $comment_data->comment = $data['comment'];
            $comment_data->idTinTuc = $data['idTinTuc'];
            $comment_data->idUser =Auth::user()->id;

            $post_data->comments()->save($comment_data);
        }
      
        return back();    
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
        //
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
        //
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
