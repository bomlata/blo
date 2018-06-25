<?php

//Route::get("create","SupportController@create");
// Các route use của back-end

Route::get('trangchu', 'frPostCotroller@trangchu');
Route::get('content/{id}','frPostCotroller@content');
Route::get('loaitin/{id}', 'frPostCotroller@loaitin');
Route::resource('Comment','CommentController');
route::group(array('prefix'=>'admin','namespace'=>'Admin','middleware'=>'adminLogin'),function(
){
// các route trong back-end
Route::get('danhsachuser', 'Usercontroller@danhsachuser');
Route::resource('loaitin','LoaiTinController');
Route::resource('post', 'PostController');
Route::get('dashboard','PostController@dashboard');
});


Auth::routes();
	
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@getlogout');
Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');