<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Kepala_lab extends Model
{
    //
    protected $table = 'kepala_lab';
            public function scopeLatestFirst($query)
    {
        return $query->orderBy('id_kepala_lab', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
