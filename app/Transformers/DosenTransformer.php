<?php

namespace App\Transformers;

use App\dosen;
use League\Fractal\TransformerAbstract;

class DosenTransformer extends TransformerAbstract
{
    public function transform(dosen $dosen)
    {
        return [
            'nidn'        => $dosen->nidn,
        ];
    }
}
