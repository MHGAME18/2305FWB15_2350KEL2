<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class angkatan extends Model
{
	protected $table = 'angkatan';
	protected $guarded =['id'];
	//public $timestamps = false;
	
	public function member()
	{
		return $this->hasOne(member::class);
	}

}