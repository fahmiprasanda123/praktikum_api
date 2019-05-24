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
}
