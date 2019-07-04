<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
class mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('NPM', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
