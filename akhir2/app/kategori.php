<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
	protected $table = 'kategori';
	protected $guarded =['id'];
	//public $timestamps = false;
	public function file()
	{
		return $this->hasOne(file::class);
	}


}