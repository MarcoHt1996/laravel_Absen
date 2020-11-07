<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblabsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblabsensi', function (Blueprint $table) {
            $table->id("id");
            $table->bigInteger("jadwal");
            $table->string("nim",8);
            $table->date("tanggal");
            $table->enum("status",['h','a','i','s']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblabsensi');
    }
}
