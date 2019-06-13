<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserAddFlag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('user',function(Blueprint $table){
            $table->string('status_flag')->after('password');
            $table->string('level')->after('api_token');
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
         Schema::table('user',function(Blueprint $table){
            $table->dropColumn('status_flag');
            $table->dropColumn('level');
        });
    }
}
