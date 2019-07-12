<?php

namespace App\Transformers;

use App\User;
use App\Transformers\PostTransformer;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'mahasiswa','dosen','laboram','asisten','kepala_lab','tu'
    ];

    public function transform(User $user)
    {
        return [
            'id' =>$user->id,
            'nama'          => $user->nama,
            'username'         => $user->username,
            'email' => $user->email,
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

    public function includeLaboram(User $user)
    {
        $laboram  = $user->laboram()->latestFirst()->get();

        return $this->collection($laboram, new LaboramTransformer);
    } 
     public function includeAsisten(User $user)
    {
        $asisten  = $user->asisten()->latestFirst()->get();

        return $this->collection($asisten, new AsistenTransformer);
    } 

         public function includeKepalaLab(User $user)
    {
        $kepala_lab  = $user->kepala_lab()->latestFirst()->get();

        return $this->collection($kepala_lab, new KepalaLabTransformer);
    } 

         public function includeTu(User $user)
    {
        $Tu  = $user->TU()->latestFirst()->get();

        return $this->collection($Tu, new TuTransformer);
    }     

}
