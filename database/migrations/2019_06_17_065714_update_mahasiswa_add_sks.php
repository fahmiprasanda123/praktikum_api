<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMahasiswaAddSks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('mahasiswa',function(Blueprint $table){
            $table->string('sks')->after('semester');
            $table->string('frs')->after('sks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
            Schema::table('mahasiswa',function(Blueprint $table){
            $table->dropColumn('sks');
            $table->dropColumn('frs');
        });
    }
}
