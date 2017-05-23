<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;

class loginController extends Controller
{
	public function index()
	{
		return view('master');
	}

	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}

	public function cek(Request $request)
	{
		$this->validate($request,[
			'username'=>'required',
			'password'=>'required'
			]);
		$pengguna = pengguna::where($request->only('username','password'))->first();

		if(! is_null($pengguna)){
			Auth::login($pengguna);
			if (Auth::user()->level == 1){
				return view('admin');
			}else{
				return view('master');
			}
				// if(Auth::check())
				// 	return view('master')->with('informasi',"Selamat Datang ".Auth::user()->username);
		}
		return redirect('/login')->withErrors(['Pengguna Tidak Ditemukan']);
	}

	public function logout()
	{
		if(Auth::check()){
			Auth::logout();
			return redirect ('/login')->withErrors(['Silahkan Login Untuk Masuk Kesistem']);
		}else{
			return redirect('/login')->withErrors(['Silahkan Login Terlebih Dahulu']);
		}
	}
}
?>