<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkelas', function (Blueprint $table) {
            $table->id("id");
            $table->string("namakelas",50);
            $table->enum("sesi",['pagi','malam']);
            $table->enum("jurusan",['TI','SI']);
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
        Schema::dropIfExists('tblkelas');
    }
}
