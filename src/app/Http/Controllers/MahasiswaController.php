<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa',[
            "mahasiswa" =>Mahasiswa::all()
        ]);
    }
    //
    public function simpan(Request $request){
       // dd($request);
       \App\Models\Mahasiswa::create([
        "nim" => $request->nim,
        "nama" => $request->nama,
        "telepon" => $request->telepon,
        "email" => $request->email,
       ]);

       return redirect()->route('mahasiswa.index');
}
}
