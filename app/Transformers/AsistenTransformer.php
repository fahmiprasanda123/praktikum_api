<?php

namespace App\Transformers;

use App\asisten;
use League\Fractal\TransformerAbstract;

class AsistenTransformer extends TransformerAbstract
{
    public function transform(asisten $asisten)
    {
        return [
            'id_asisten'        => $asisten->id_asisten,
        ];
    }
}
