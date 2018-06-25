<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\LoaiTin;
use App\Tag;
use App\Comment;
use Session;
use DB;

class frPostCotroller extends Controller
{
    public function trangchu()
    {

    		$loaitin = LoaiTin::all();

    	 $post = Post::where('status',0)->get();
        return view('post.trangchu	', compact('post','loaitin'));
    	
    }
    public function content($id)
    {
        $post= Post::find($id);
        $tinlienquan = Post::where('loaitin_id',$post->loaitin_id)->get();
    	
        return view('Content.content',compact('post','loaitin','tinlienquan'));
    	
    }
    public function loaitin($id)
    {   
        $loaitin = LoaiTin::with('posts')->findOrFail($id);
        // $post = Post::where('loaitin_id',$id)->get();
        return view('Category.loaitin',compact('loaitin'));
    }  
    public function abc()
    {
        return view('post.abv');
    }

}
