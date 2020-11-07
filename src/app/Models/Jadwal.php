<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "tbljadwal";

    protected $fillable = ['id','kelas','matakuliah','nidn','noruang','hari','sesi'];
}
