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

     public function store(Request $request)
    {
        //
            
    $mata_praktikum = $request->input('mata_praktikum');
    $nidn = $request->input('nidn');
    $id_asisten = $request->input('id_asisten');
    $npm = $request->input('npm');
    $jadwal = $request->input('jadwal');
    
    $data = new \App\mata_praktikum();
    
    $data->mata_praktikum = $mata_praktikum;
    $data->nidn = $nidn;
    $data->id_asisten = $id_asisten;
    $data->npm = $npm;
    $data->jadwal = $jadwal;

        if($data->save()){
            $res['message'] = "Success!";
            $res['mp'] = "$data";
            return response($res);
         }
    }
}
