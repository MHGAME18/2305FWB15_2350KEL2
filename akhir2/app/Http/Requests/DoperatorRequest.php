<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DoperatorRequest extends Request
{
    public function authorize()
    {
    	return true;
    }

    public function rules()
    {
    	$validasi = [
    		'nama'=>'required',
    		'nip'=>'required',
    		'alamat'=>'required',
    		'username'=>'required',
    	];
    	if($this->is('doperator/tambah')){
    		$validasi['password'] = 'required';
    	}
    	return $validasi;
    }
}
