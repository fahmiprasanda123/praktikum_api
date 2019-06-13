<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'username', 'email','status_flag','password', 'api_token'
    ];

    public function mahasiswa(){
    	return $this->belongsTo('app\mahasiswa');
    }
    public function dosen(){
    	return $this->belongsTo('app\dosen');
    }
    public function matapraktikum(){
    	return $this->belongsTo('app\mata_praktikum');
    }
}
