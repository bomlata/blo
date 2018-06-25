<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class Usercontroller extends Controller
{
    public function danhsachuser()
    {
    	$user = User::all();
        return view('auth.danhsachuser',compact('user'));
    }
}
