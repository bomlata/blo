<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','quyen','verifyToken',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function comments()
    {
        return $this->hasMany('App\Comment','idUser','id');
    }
    public function addNew($input)
    {
        $check = static::where('facebook_id',$input['facebook_id'])->first();

        if(is_null($check)){
            return static::create($input);
        }

        return $check;
        
    }      
    public function post()
     {
         return $this->hasMany('App\Post','idUser','id');
     } 
}
