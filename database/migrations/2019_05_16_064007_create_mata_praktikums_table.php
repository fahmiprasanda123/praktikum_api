<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataPraktikumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_praktikum', function (Blueprint $table) {
            $table->Increments('id_mata_praktikum');
            $table->string('mata_praktikum',100);
            $table->integer('nidn');
            $table->integer('id_asisten');
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
        Schema::dropIfExists('mata_praktikum');
    }
}
