<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;


class PagesController extends Controller
{
    //viết các hàm xử lý trả về view cho người dùng
    public function index(){
    	return view("welcome");
    }

    public function home()
    {
        $post = Post::paginate(4);
        return view('home', compact('post'));
    	

    }

     public function about()
    {
    	return view("about");
    }
    public function contact()
    {
        return view('contact');
    }
     public function form()
    {
        return view('form');
    }
    public function create()
    {
        return view('hoc1.create');
    }
    public function edit()
    {
        return view('hoc1.edit');
    }
    public function createuse()
    {
        return view('hoc1.createuse');
    }
    public function demo()
    {
        return view('hoc1.demo');
    }
    public function form1()
    {
        return view('hoc1.form1');
    }     
    public function login()
    {
        return view('hoc1.login');
    }
     public function Register()
    {
        return view('hoc1.Register');
    }
   

}
