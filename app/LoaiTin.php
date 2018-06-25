<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
   protected $table = "loaitin";
	
	protected $guarded = ['id'];
	// public $timestamps = true;
	public function posts()
	{
		return $this->hasMany('App\Post','loaitin_id','id');
	}
}
