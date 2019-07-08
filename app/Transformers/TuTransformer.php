<?php

namespace App\Transformers;

use App\TU;
use League\Fractal\TransformerAbstract;

class TuTransformer extends TransformerAbstract
{
    public function transform(Tu $Tu)
    {
        return [
            'id_tu'        => $Tu->id_tu,
            'user_id'        => $Tu->user_id,
        ];
    }
}
