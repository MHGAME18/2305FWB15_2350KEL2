<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
	protected $table = 'file';
	public $fillable = ['nama_file','id_kategori','id_angkatan'];
	protected $guarded =['id'];
	//public $timestamps = false;

	public function pengguna(){
		return $this->belongsToMany(pengguna::class);
	}

	public function admin()
	{
		return $this->belongsTo(admin::class);
	}

	public function member()
	{
		return $this->belongsToMany(member::class);
	}

	public function doperator()
	{
		return $this->belongsTo(doperator::class);
	}

	public function kategori()
	{
		return $this->belongsToMany(kategori::class);
	}

	public function angkatan()
	{
		return $this->hasOne(angkatan::class);
	}

	public function listKategoriFile()
	{
		$out = [];
		foreach ($this->all() as $kate) {
			$out[$kate->id] = "{$kate->nama_kategori}";
		}
		return $out;
	}

	public function pengguna_id(){
		$pengguna = Auth::user()->level;
		if ($pengguna == 2){
			$pengguna = Auth::user()->doperator;
			$pengguna = $pengguna->id;
			return $pengguna;
		}
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