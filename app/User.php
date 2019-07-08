<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
use App\Dosen;
use App\laboram;
use App\asisten;
use App\Kepala_lab;
use App\TU; 


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
    public function laboram(){
        return $this->hasMany(laboram::class);
    }

    public function ownslaboram(laboram $laboram)
    {
        return auth()->id() === $laboram->user->id;
    }
    public function asisten(){
        return $this->hasMany(asisten::class);
    }
    public function ownsasisten(asisten $asisten)
    {
        return auth()->id() === $asisten->user->id;
    }

    public function kepala_lab(){
        return $this->hasMany(kepala_lab::class);
    }
    public function ownskepala_lab(kepala_lab $kepala_lab)
    {
        return auth()->id() === $kepala_lab->user->id;
    }
    public function Tu(){
        return $this->hasMany(TU::class);
    }
    public function ownsTu(TU $TU)
    {
        return auth()->id() === $TU->user->id;
    }
}
