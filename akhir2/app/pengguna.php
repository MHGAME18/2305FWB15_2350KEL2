<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticatable;
use Auth;

class pengguna extends Authenticatable{

	protected $table = 'pengguna';
	//public $timestamps = false;
	protected $fillable = [
			'username','password','level'
	];
	public function admin()
	{
		return $this->hasOne(admin::class);
	}
	public function member()
	{
		return $this->hasOne(member::class);
	}
	public function doperator()
	{
		return $this->hasOne(doperator::class);
	}

	public function id(){
		$pengguna = Auth::user()->id;
		return $pengguna;		
	}
}