<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class dosen extends Model
{
    //
    protected $table = 'dosen';
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('Nidn', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
