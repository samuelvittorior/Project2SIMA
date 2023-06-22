<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalkuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalkuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_makul');
            $table->string('hari',10);
            $table->string('jam',5);      
            $table->string('ruangan',10);   
            $table->string('kelas',5);  
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
        Schema::dropIfExists('jadwalkuliah');
    }
}
