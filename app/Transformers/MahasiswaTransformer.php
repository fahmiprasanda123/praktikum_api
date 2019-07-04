<?php

namespace App\Transformers;

use App\mahasiswa;
use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
    public function transform(mahasiswa $mahasiswa)
    {
        return [
            'NPM'        => $mahasiswa->NPM,
            'semester'   => $mahasiswa->semester,
            'sks'   => $mahasiswa->sks,
            'frs'   => $mahasiswa->frs,
            'status'   => $mahasiswa->status,
        ];
    }
}
