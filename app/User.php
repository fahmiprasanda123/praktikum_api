<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
use App\Dosen;


class User extends Authenticatable
{
    //
     use Notifiable;
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'username', 'email','status_flag','password','api_token'
    ];

public function mahasiswa()
        {
            return $this->hasMany(mahasiswa::class);
        }
public function ownsmahasiswa(mahasiswa $mahasiswa)
    {
        return auth()->id() === $mahasiswa->user->id;
    }

    public function dosen(){
    	return $this->hasMany(dosen::class);
    }

    public function ownsdosen(dosen $dosen)
    {
        return auth()->id() === $dosen->user->id;
    }
    public function matapraktikum(){
    	return $this->belongsTo('app\mata_praktikum');
    }
}
