<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index(){
        return view('dosen',[
            "dosen" =>Dosen::all()
        ]);
    }
    //
    Public function simpan(Request $request){
        // dd($request);
        \App\Models\Dosen::create([
         "nidn" => $request->nidn,
         "nama" => $request->nama,
         "telepon" => $request->telepon,
         "email" => $request->email,
        ]);

        return redirect()->route('dosen.index');
 }
}
