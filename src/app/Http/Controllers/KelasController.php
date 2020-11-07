<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Kelas;

class KelasController extends Controller
{

    public function index(){
        return view('kelas',[
            "kelas" =>Kelas::all()
        ]);
    }
    //
    public function simpan(Request $request){
        // dd($request);
        \App\Models\Kelas::create([
         "id" => $request->id,
         "namakelas" => $request->namakelas,
         "sesi" => $request->sesi,
         "jurusan" => $request->jurusan,
        ]);

        return redirect()->route('kelas.index');
 }
 }

