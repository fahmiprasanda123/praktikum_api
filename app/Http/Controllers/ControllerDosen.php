<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDosen extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\dosen::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['dosen'] = $data;
        return response($res);
    }else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($nidn) {
        //

         $data = \App\dosen::where('nidn',$nidn)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['dosen'] = $data;
        return response($res);
    }else{
        $res['message'] = "Failed!";
        return response($res);
    	}
    }
    public function store(Request $request)
    {
        //
            $nidn = $request->input('nidn');
    $user_id = $request->input('user_id');
    

    $data = new \App\dosen();
    $data->nidn = $nidn;
    $data->user_id = $user_id;
    

    if($data->save()){
        $res['message'] = "Success! Menambahkan data dosen";
         $res['value'] = "Nidn : $data->nidn";
        return response($res);
    }
    }
}
