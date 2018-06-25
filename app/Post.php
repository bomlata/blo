<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
	
	protected $guarded = ['id'];
	public $timestamps = true;
	// Khai báo mối quan hệ 1- nhiều
	public function loaitin()
	{
		return $this->belongsTo('App\LoaiTin','loaitin_id','id');
	}
	public function comments()
	{
		return $this->hasMany('App\Comment','idTinTuc','id');
	}
	public function user()
	{
		return $this->belongsTo('App\User','idUser','id');
	}
}
