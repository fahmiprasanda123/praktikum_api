<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\nilai::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['nilai'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_nilai)
    {
        //
         $data = \App\nilai::where('id_nilai',$id_nilai)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['nilai'] = $data;
        return response($res);
    }else{
	        $res['message'] = "Failed!";
	        return response($res);
    	}
    }
}
