<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makul', function (Blueprint $table) {
            $table->id();
            $table->string('kode_makul',5)->unique(); 
            $table->string('mata_kuliah',30); 
            $table->integer('sks'); 
            $table->integer('semester'); 
            $table->string('jurusan',40); 
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
        Schema::dropIfExists('makul');
    }
}
