<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaLabController extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\Kepala_lab::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['Kepala_lab'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id)
    {
        //
         $data = \App\Kepala_lab::where('id_kepala_lab',$id_kepala_lab)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['Kepala_lab'] = $data;
        return response($res);
    }
    else{
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
    
    $data = new \App\mata_praktikum();
    
    $data->mata_praktikum = $mata_praktikum;
    $data->nidn = $nidn;
    $data->id_asisten = $id_asisten;
    $data->npm = $npm;

        if($data->save()){
            $res['message'] = "Success!";
            $res['mp'] = "$data";
            return response($res);
         }
    }
}
