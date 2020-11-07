<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\KelasController;
use \App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MataKuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('mahasiswa');
})->name('mahasiswa.index');*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    route::POST('/mahasiswa/simpan',[MahasiswaController::class,'simpan'])
    ->name('mahasiswa.simpan');
    route::get('/mahasiswa',[MahasiswaController::class,'index'])
    ->name('mahasiswa.index');


    route::get('/kelas',[KelasController::class,'index'])
    ->name('kelas.index');
    route::POST('/kelas/simpan',[KelasController::class,'simpan'])
    ->name('kelas.simpan');

    route::get('/dosen',[DosenController::class,'index'])
    ->name('dosen.index');
    route::POST('/dosen/simpan',[DosenController::class,'simpan'])
    ->name('dosen.simpan');

    route::get('/matakuliah',[MataKuliahController::class,'index'])
    ->name('matakuliah.index');
    route::POST('/matakuliah/simpan',[MataKuliahController::class,'simpan'])
    ->name('matakuliah.simpan');

    route::get('/jadwal',[JadwalController::class,'index'])
    ->name('jadwal.index');
    route::POST('/jadwal/simpan',[JadwalController::class,'simpan'])
    ->name('jadwal.simpan');

    route::get('/absensi',[AbsensiController::class,'index'])
    ->name('absensi.index');
    route::POST('/absensi/simpan',[AbsensiController::class,'simpan'])
    ->name('absensi.simpan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
