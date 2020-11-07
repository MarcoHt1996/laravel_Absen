<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
        return view('matakuliah',[
            "matakuliah" =>MataKuliah::all()
        ]);
    }
    //
    Public function simpan(Request $request){
        // dd($request);
        \App\Models\MataKuliah::create([
         "id" => $request->id,
         "nama" => $request->nama,
        ]);

        return redirect()->route('matakuliah.index');
 }
}
