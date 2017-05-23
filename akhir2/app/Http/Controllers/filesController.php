<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Storage;
use DB;
use Validator;
use Input;
use App\file;
use App\kategori;
use App\angkatan;
use App\pengguna;


class filesController extends Controller{
    protected $informasi = 'Gagal Upload Data';
    public function awal(){
        $file = file::paginate(50);
        return view('files.awal', ['file' => $file]);
    }

     public function lihat($id)
    {
        $file = file::find($id);
        return view('files.lihat')->with(array('file'=>$file));
    }

    public function handleUpload(Request $input){
            $this->validate($input,[
                    'kategori' => 'required',
                    'pengguna' => 'required',
                ]);


            $file = $input->file('file');
            $fileName = $file->getClientOriginalName();
            $allowedFileTypes = config('app.allowedFileTypes');
            $rules = [
                'file'=>'required|mimes:'.$allowedFileTypes
            ];
            $this->validate($input, $rules);
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if ($uploaded){
                $berkas = file::create([
                    'nama_file'       =>  $fileName,
                    'id_kategori'     =>  $input->kategori,
                ]);
                    $berkas->pengguna_id =  $input->pengguna;
                if ($berkas->save()) $this->informasi = 'Berhasil Upload Data';
                return redirect('/upload/awal')->with(['informasi'=>$this->informasi]);
            }


            // if ($uploaded) {
            //     file::create([
            //          'nama_file'=>$fileName    
            //         ]);
            // }

        // $file = new file(array(
        //         'id_kategori'=> $input->get('id_kategori'),
        //         'id_angkatan'=> $input->get('id_angkatan'),
        //     ));
        // $file->save();
        // $fileName = $file->id .'.'.
        // $input->file('file')->getClientOriginalExtension();
        // $input->file('file')->move(
        //     base_path() . '/public/files', $fileName
        //     );
            
        // return redirect()->to('/upload');
    }

    public function upload()
    {
        $directory = config('app.fileDestinationPath');
        $files = Storage::files($directory);
        $kategori = new kategori;
        $pengguna = new pengguna;
        return view('files.upload',compact('kategori', 'pengguna' ,'files'));
        //return view('files.upload')->with(array('files' => $files));
    }

    public function download($id){
        $file = file::find($id);
        $file = $file->nama_file;
        $destinationPath = config('app.fileDestinationPath').'/'.$file;
        $response = \Response::download(resource_path($destinationPath));
        return $response;
        
    }

    public function hapus($id){
        $file = file::find($id);
        //Storage::delete(config('app.fileDestinationPath').'/'.$file->nama_file);
        if($file->delete());
        return redirect()->to('/upload');
    }
    public function about()
    {
        return view('pop-up');
    }
}
