<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuController extends Controller
{
    //
     public function index()
    {
        //
        $data = \App\TU::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['TU'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_tu)
    {
        //
         $data = \App\TU::where('id_tu',$id_tu)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['TU'] = $data;
        return response($res);
    }else{
	        $res['message'] = "Failed!";
	        return response($res);
    	}
    }
    public function add(Request $request)
    {
            $user_id = $request->input('user_id');
    $data = new \App\TU;
    $data->user_id = $user_id;
    
        if($data->save()){
            $res['message'] = "Success! Menambahkan data TU";
            $res['TU'] = "$data";
            return response($res);
         }
    }
}