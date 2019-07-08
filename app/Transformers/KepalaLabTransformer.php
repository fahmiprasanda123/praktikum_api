<?php

namespace App\Transformers;

use App\Kepala_lab;
use League\Fractal\TransformerAbstract;

class KepalaLabTransformer extends TransformerAbstract
{
    public function transform(Kepala_lab $kepala_lab)
    {
        return [
            'id_kepala_lab'        => $kepala_lab->id_kepala_lab,
        ];
    }
}
