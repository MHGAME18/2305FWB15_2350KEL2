<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login','loginController@form');
Route::post('login','loginController@cek');
Route::get('/logout','loginController@logout');
Route::get('/content2', function () {
    return view('content2');
});

Route::group(['middleware'=>'autentikasi'],function(){
	Route::get('/','loginController@index');

	Route::get('admin', function (){
		if (Auth::check()) {
			if (Auth::user()->level == 1) {
				return view('admin');
			}
		}
		return redirect('/');
	});

	Route::get('admin/awal', 'penggunaController@awal');
	Route::get('admin/tambah', 'penggunaController@tambah');
	Route::get('admin/{admin}', 'penggunaController@lihat');
	Route::post('admin/simpan', 'penggunaController@simpan');
	Route::get('admin/edit/{admin}', 'penggunaController@edit');
	Route::post('admin/edit/{admin}', 'penggunaController@update');
	Route::get('admin/hapus/{admin}', 'penggunaController@hapus');

	Route::get('admin/member/awal', 'memberController@awal');
	Route::get('admin/member/tambah', 'memberController@tambah');
	Route::get('admin/member/{member}', 'memberController@lihat');
	Route::post('admin/member/simpan', 'memberController@simpan');
	Route::get('admin/member/edit/{member}', 'memberController@edit');
	Route::post('admin/member/edit/{member}', 'memberController@update');
	Route::get('admin/member/hapus/{member}', 'memberController@hapus');

	Route::get('admin/doperator/awal', 'doperatorController@awal');
	Route::get('admin/doperator/tambah', 'doperatorController@tambah');
	Route::get('admin/doperator/{doperator}', 'doperatorController@lihat');
	Route::post('admin/doperator/simpan', 'doperatorController@simpan');
	Route::get('admin/doperator/edit/{doperator}', 'doperatorController@edit');
	Route::post('admin/doperator/edit/{doperator}', 'doperatorController@update');
	Route::get('admin/doperator/hapus/{doperator}', 'doperatorController@hapus');
	
	Route::get('upload/awal', 'filesController@awal');
	Route::get('upload/{upload}', 'filesController@lihat');
	Route::get('upload', 'filesController@upload');
	Route::get('upload/download/{upload}', 'filesController@download');
	Route::post('upload/simpan', 'filesController@handleUpload');
	Route::get('upload/hapus/{upload}', 'filesController@hapus');

	// Route::get('images/index', 'imageController@index');
	// Route::get('images', 'imageController@create');
	// Route::post('images', 'imageController@store');

	Route::get('/info', function (){
		return view('info');
	});
	Route::get('/maaf', function (){
		return view('maaf');
	});
	Route::get('/about', function (){
		return view('about');
	});

});

// Route::get('login','loginController@form');
// Route::post('login','loginController@cek');
// Route::get('/logout','loginController@logout');
// Route::get('/','loginController@index');
// Route::group(['middleware'=>'admin'],function()
// {
// Route::get('admin', function(){
// 	if (Auth::pengguna()->level == 1){
// 		return view('/');
// 	}else{
// 		return view('admin');
// 	}
// });
