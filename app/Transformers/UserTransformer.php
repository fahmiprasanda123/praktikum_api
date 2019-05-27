<?php

namespace App\Transformers;

use App\User;
use App\Transformers\PostTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{


    public function transform(User $user)
    {
        return [
            
            'nama'          => $user->nama,

            'username'         => $user->username,
        ];
    }
}
