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
            public function store(Request $request)
    {
        //
            $npm = $request->input('npm');
            $id_mata_praktikum = $request->input('id_mata_praktikum');
    $keaktifan = $request->input('keaktifan');
    $tugas = $request->input('tugas');
    $ujian = $request->input('ujian');
    $kehadiran = $request->input('kehadiran');
    
    $data = new \App\nilai();
    $data->npm = $npm;
    $data->id_mata_praktikum = $id_mata_praktikum;
    $data->keaktifan = $keaktifan;
    $data->tugas = $tugas;
    $data->ujian = $ujian;
    $data->kehadiran = $kehadiran;
    
    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    }
}
