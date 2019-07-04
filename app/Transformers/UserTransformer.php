<?php

namespace App\Transformers;

use App\User;
use App\Transformers\PostTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'mahasiswa','dosen'
    ];

    public function transform(User $user)
    {
        return [
            'nama'          => $user->nama,
            'username'         => $user->username,
            'registered' => $user->created_at,
        ];
    }
    public function includeMahasiswa(User $user)
    {
        $mahasiswa  = $user->mahasiswa()->latestFirst()->get();

        return $this->collection($mahasiswa, new MahasiswaTransformer);
    }
        public function includeDosen(User $user)
    {
        $dosen  = $user->dosen()->latestFirst()->get();

        return $this->collection($dosen, new DosenTransformer);
    }

}
