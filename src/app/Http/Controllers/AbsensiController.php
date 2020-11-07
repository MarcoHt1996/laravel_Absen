<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(){
        return view('absensi',[
            "absensi" =>Absensi::all()
        ]);
    }
    //
    Public function simpan(Request $request){
        // dd($request);
        \App\Models\Absensi::create([
         "id" => $request->id,
         "jadwal" => $request->jadwal,
         "nim" => $request->nim,
         "tanggal" => $request->tanggal,
         "status" => $request->status,
        ]);

        return redirect()->route('absensi.index');
 }
}
