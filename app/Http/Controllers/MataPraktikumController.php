<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataPraktikumController extends Controller
{
    public function index(){
        //
        $data = \App\mata_praktikum::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['mp'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_mata_praktikum){
        //

         $data = \App\mata_praktikum::where('id_mata_praktikum',$id_mata_praktikum)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['mp'] = $data;
        return response($res);
    }else{
        $res['message'] = "Failed!";
        return response($res);
    	}
    }
}
