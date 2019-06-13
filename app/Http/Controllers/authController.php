<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Transformers\UserTransformer;

class authController extends Controller
{
    //
     public function register(Request $request, User $user)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'username'      => 'required',
            'email'     => 'required|email|unique:user',
            'password'  => 'required|min:6',
            'status_flag'      => 'required',
        ]);

        $user = $user->create([
            'nama'      => $request->nama,
            'username'      => $request->username,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'status_flag'  => $request->status_flag,
            'api_token' => bcrypt($request->email)
        ]);

        $response = fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta([
                'token' => $user->api_token,
            ])
            ->toArray();

        return response()->json($response, 201);
    }
}
