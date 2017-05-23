<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

use App\pengguna;

class penggunaController extends Controller
{
//     public function __construct()
//     {
//         $this->middleware('auth');
//         $this->middleware('role:1');
//     }

   public function awal()
    {
    	return view ('admin.awal', ['data'=>pengguna::all()]);
    }
    public function tambah()
    {
    	return view ('admin.tambah');
    }
    public function simpan(Request $input)
    {
        // $this->validate($input,[
        //     'username'=>'required',
        //     'password'=>'required',
        // ]);
    	$pengguna = new Pengguna();
    	$pengguna->username = $input->username;
    	$pengguna->password = $input->password;
    	$pengguna->level = $input->level;
     	$informasi = $pengguna->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('admin/awal')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $pengguna = pengguna::find($id);
        return view('admin.edit')->with(array('pengguna'=>$pengguna));
    }
    public function lihat($id)
    {
        $pengguna = pengguna::find($id);
        return view('admin.lihat')->with(array('pengguna'=>$pengguna));
    }
    public function update($id, Request $input)
    {
        $pengguna = pengguna::find($id);
        $pengguna->username = $input->username;
        $pengguna->password = $input->password;
        $pengguna->level = $input->level;
        $informasi = $pengguna->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('admin/awal')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $pengguna = pengguna::find($id);
        $informasi = $pengguna->delete() ? 'Data berhasi dihapus' : 'Data gagal dihapus';
        return redirect('admin/awal')->with(['informasi'=>$informasi]);
    }
    
}
