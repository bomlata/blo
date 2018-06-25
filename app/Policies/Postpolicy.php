<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class Postpolicy
{
    use HandlesAuthorization;
    public function before($user, $ability,Post $post)
    {
        if ($user->id == 3) {
            return true;
        }
    }

   public function index(User $user,Post $post )
   {
       return $user->id === $post->idUser;
   }
}
