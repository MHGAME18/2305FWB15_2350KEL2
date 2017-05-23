<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model{
	protected $table = 'member';
	protected $guarded =['id'];
	//public $timestamps = false;
	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
	}

	public function getUserNameAttribute()
	{
		return $this->pengguna->username;
	}

	public function file()
	{
		return $this->belongsToMany(file::class);
	}

	public function kategori()
	{
		return $this->hasOne(kategori::class);
	}

	public function angkatan()
	{
		return $this->belongsTo(angkatan::class);
	}

	public function listMemberDanNim()
	{
		$out = [];
		foreach ($this->all() as $mhs) {
			$out[$mhs->id] = "{$mhs->angkatan}";
		}
		return $out;
	}

	// public function getUserNameAttribute()
	// {
	// 	return $this->pengguna->username;
	// }
	// public function listMemberDanNim()
	// {
	// 	$out = [];
	// 	foreach ($this->all() as $mhs) {
	// 		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
	// 	}
	// 	return $out;
	// }
}