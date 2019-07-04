<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboramController extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\laboram::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['laboram'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_laboram)
    {
        //
         $data = \App\laboram::where('id_laboram',$id_laboram)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['laboram'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
    }
}
