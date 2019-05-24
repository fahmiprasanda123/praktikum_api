<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_praktikum extends Model
{
    //
    protected $table = 'mata_praktikum';
    public function user(){
    	return $this->hasMany('app\User');
    }
    public function asisten(){
    	return $this->hasMany('app\asisten');
    }
    public function dosen(){
    	return $this->hasMany('app\dosen');
    }
}
