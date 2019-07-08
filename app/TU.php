<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
class TU extends Model
{
    //
    protected $table = 'tu';
            public function scopeLatestFirst($query)
    {
        return $query->orderBy('id_tu', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
