<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoperatorRequest;
use App\doperator;
use App\pengguna;

class doperatorController extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';

   public function awal()
    {
        $semuaDoperator = doperator::all();
        return view('adminDoperator.awal', ['data' => doperator::all()]);
    }
    
    public function tambah()
    {
        return view('adminDoperator.tambah');
    }
    
    public function simpan(Request $input)
    {
    $pengguna = new Pengguna($input->only('username','password','level'));
        if ($pengguna->save()) {
            $doperator = new doperator;
            $doperator->nama = $input->nama;
            $doperator->nip = $input->nip;
            $doperator->telepon = $input->telepon;
            if ($pengguna->doperator()->save($doperator)) $this->informasi = 'Berhasil Disimpan';   
        }
            return redirect('admin/doperator/awal');  
    }

    public function edit($id)
    {
        $doperator = doperator::find($id);
        return view('adminDoperator.edit')->with(array('doperator'=>$doperator));
    }

    public function lihat($id)
    {
        $doperator = doperator::find($id);
        return view('adminDoperator.lihat')->with(array('doperator'=>$doperator));
    }

    public function update($id, Request $input)
    {
        $doperator = doperator::find($id);
        $doperator->nama = $input->nama;
        $doperator->nip = $input->nip;
        $doperator->telepon = $input->telepon;
        if(!is_null($input->username))
        {
            $pengguna = $doperator->pengguna->fill($input->only('username','level'));
            if(!empty($input->password)) $pengguna->password = $input->password;
            if ($doperator->save() && $pengguna->save()) $this->informasi='Berhasil Simpan Data';
        }else{
            $this->informasi = 'Berhasil Simpan Data';
        }
        return redirect('admin/doperator/awal')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $doperator = doperator::find($id);
        if($doperator->pengguna()->delete())
        {
            if($doperator->delete()) $this->informasi = 'Berhasil Hapus Data';
        }
        return redirect('admin/doperator/awal')->with(['informasi' => $this->informasi]);
    }
    
}
