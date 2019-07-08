<?php

namespace App\Transformers;

use App\laboram;
use League\Fractal\TransformerAbstract;

class LaboramTransformer extends TransformerAbstract
{
    public function transform(laboram $laboram)
    {
        return [
            'id_laboram'        => $laboram->id_laboram,
        ];
    }
}
