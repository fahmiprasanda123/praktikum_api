<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    public function mahasiswa(){
    	return $this->belongsTo('app\mahasiswa');
    }
    public function dosen(){
    	return $this->belongsTo('app\dosen');
    }
}
