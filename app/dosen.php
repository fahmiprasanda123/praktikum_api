<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosen';
        public function user(){
    	return $this->hasMany('app\User');
    }
}
