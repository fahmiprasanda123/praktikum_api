<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMataPraktikum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::table('mata_praktikum',function(Blueprint $table){
            $table->text('npm')->after('id_asisten');
          
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
        Schema::table('mata_praktikum',function(Blueprint $table){
            $table->dropColumn('npm');
                    });

    }
}
