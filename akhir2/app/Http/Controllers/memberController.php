<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;

use App\Http\Requests;
use App\member;
use App\pengguna;
use App\angkatan;

class memberController extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('role:1');
    // }

   public function awal()
    {
        $semuaMember = member::all();
        return view('adminMember.awal', ['data' => member::all()]);
    }
    
    public function tambah()
    {
        $member = new Member;
        $angkatan = new Angkatan;
        return view('adminMember.tambah', compact('nama', 'nim', 'angkatan'));
    }
    
    public function simpan(Request $input)
    {
    $pengguna = new Pengguna($input->only('username','password','level'));
        if ($pengguna->save()) {
            $member = new member;
            // ($input->only('nama','nim','id_angkatan'))
            $member->nama = $input->nama;
            $member->nim = $input->nim;
            $member->angkatan = $input->angkatan;
            if ($pengguna->member()->save($member)) $this->informasi = 'Berhasil Disimpan';   
        }
            return redirect('admin/member/awal');  
    }

    public function edit($id)
    {
        $member = member::find($id);
        $angkatan = new Angkatan;
        return view('adminMember.edit', compact('nama', 'nim', 'angkatan'))->with(array('member'=>$member));
    }

    public function lihat($id)
    {
        $member = member::find($id);
        return view('adminMember.lihat')->with(array('member'=>$member));
    }

    public function update($id, Request $input)
    {
        $member = member::find($id);
        $member->nama = $input->nama;
            $member->nim = $input->nim;
            $member->angkatan = $input->angkatan;
        if(!is_null($input->username))
        {
            $pengguna = $member->pengguna->fill($input->only('username','level'));
            if(!empty($input->password)) $pengguna->password = $input->password;
            if ($member->save() && $pengguna->save()) $this->informasi='Berhasil Simpan Data';
        }else{
            $this->informasi = 'Tidak Berhasil Simpan Data';
        }
        return redirect('admin/member/awal')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $member = member::find($id);
        if($member->pengguna()->delete())
        {
            if($member->delete()) $this->informasi = 'Berhasi Hapus Data';
        }
        return redirect('admin/member/awal')->with(['informasi' => $this->informasi]);
    }
}
