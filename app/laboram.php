<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;
class laboram extends Model
{
    //
    protected $table = 'laboram';
        public function scopeLatestFirst($query)
    {
        return $query->orderBy('id_laboram', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
