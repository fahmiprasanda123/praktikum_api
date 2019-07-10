<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use Auth;
class ControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function token(User $user)
    {
        $user = $user->find(Auth::user()->id);

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->includeMahasiswa()
            ->includeLaboram()
            ->includeDosen()
            ->includeAsisten()
            ->includekepala_lab()
            ->includeTu()
            ->toArray();
    }

     public function tokenById(User $user, $id)
    {
        $user = $user->find($id);

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->includeMahasiswa()
            ->includeLaboram()
            ->includeDosen()
            ->includeAsisten()
            ->includekepala_lab()
            ->includeTu()
            ->toArray();
    }

    public function index(User $user)
    {
        //
        $users  = $user->all();

    // if(count($users) > 0){ //mengecek apakah data kosong atau tidak
    //     $res['message'] = "Success!";
    //     $res['user'] = $users;
    //     return response($res);
    // }
    // else{
    //     $res['message'] = "Empty!";
    //     return response($res);
    // }

         return fractal()
            ->collection($users)
            ->transformWith(new UserTransformer)
            ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $nama = $request->input('nama');
    $username = $request->input('username');
    $email = $request->input('email');
    $password = $request->input('password');
    $status_flag = $request->input('status_flag');
    $level = $request->input('level');
    

    $data = new \App\user();
    $data->nama = $nama;
    $data->username = $username;
    $data->email = $email;
    $data->status_flag = $status_flag;
    $data->level = $level;
    $data->password = bcrypt($password);
    $data->api_token = bcrypt($email);

    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         $data = \App\User::where('id',$id)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['user'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id)
{
    //
    $nama = $request->input('nama');
    $username = $request->input('username');
    $email = $request->input('email');
    $password = $request->input('password');
    $status_flag = $request->input('status_flag');
    $level = $request->input('level');
    

    $data = \App\user::where('id',$id)->first();
    $data->nama = $nama;
    $data->username = $username;
    $data->email = $email;
    $data->status_flag = $status_flag;
    $data->level = $level;
    $data->password = bcrypt($password);
    $data->api_token = bcrypt($email);

    if($data->save()){
        $res['message'] = "Success!";
        $res['user'] = "$data";
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = \App\User::where('id',$id)->first();

    if($data->delete()){
        $res['message'] = "Success!";
        $res['user'] = "$data";
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
    }
}
