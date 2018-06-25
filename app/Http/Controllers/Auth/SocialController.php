<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\Social;
use Auth;

class SocialController extends Controller
{
   public function redirectToProvider()
{   
    return Socialite::driver('facebook')->redirect();
}

public function handleProviderCallback()
{
    try {
        $user = Socialite::driver('facebook')->user();
        $create['name'] = $user->name;
        $create['email'] = $user->email;
        $create['facebook_id'] = $user->id;

        $userModel = new User;
        $createdUser = $userModel->addNew($create);
        Auth::loginUsingId($createdUser->id);
        return redirect('trangchu');
    } catch (Exception $e) {
        return redirect('/');
    }
}
}
