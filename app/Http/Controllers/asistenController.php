<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asistenController extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\asisten::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['asisten'] = $data;
        return response($res);
    }else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_asisten) {
        //

         $data = \App\asisten::where('id_asisten',$id_asisten)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['asisten'] = $data;
        return response($res);
    }else{
        $res['message'] = "Failed!";
        return response($res);
    	}
    }
         public function add(Request $request)
    {
        //
            
            $user_id = $request->input('user_id');
    
    

    $data = new \App\asisten();
    $data->user_id = $user_id;
    
        if($data->save()){
            $res['message'] = "Success! Menambahkan data asisten";
            $res['asisten'] = "$data";
            return response($res);
         }
    }
}
