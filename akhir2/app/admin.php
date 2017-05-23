<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	protected $table = 'admin';
	//public $timestamps = false;
	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
	}

	public function file()
	{
		return $this->hasMany(file::class);
	}


	// public function getUserNameAttribute()
	// {
	// 	return $this->pengguna->username;
	// }
	// public function listMahasiswaDanNim()
	// {
	// 	$out = [];
	// 	foreach ($this->all() as $mhs) {
	// 		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
	// 	}
	// 	return $out;
	// }
}