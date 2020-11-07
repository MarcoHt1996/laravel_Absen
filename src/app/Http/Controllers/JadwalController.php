<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        return view('jadwal',[
            "jadwal" =>Jadwal::all()
        ]);
    }
    //
    Public function simpan(Request $request){
        // dd($request);
        \App\Models\Jadwal::create([
         "id" => $request->id,
         "kelas" => $request->kelas,
         "matakuliah" => $request->matakuliah,
         "nidn" => $request->nidn,
         "noruang" => $request->noruang,
         "hari" => $request->hari,
         "sesi" => $request->sesi,
        ]);

        return redirect()->route('jadwal.index');
 }
}

