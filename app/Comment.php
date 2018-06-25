<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $table = "comment";
	
	protected $guarded = ['id'];
	public $timestamps = true;
	// Khai báo mối quan hệ 1- nhiều
	public function post()
	{
		return $this->belongsTo('App\Post','idTinTuc','id');
	}
	public function user()
	{
		return $this->belongsTo('App\User','idUser','id');
	}

}
