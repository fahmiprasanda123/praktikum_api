<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class asisten extends Model
{
    //
    protected $table = 'asisten';

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id_asisten', 'DESC');
    }
        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
