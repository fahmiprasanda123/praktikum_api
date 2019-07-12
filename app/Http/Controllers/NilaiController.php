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
    $angka = $request->input('angka_akhir');
    $huruf = $request->input('huruf_mutu');
    
    $data = new \App\nilai();
    $data->npm = $npm;
    $data->id_mata_praktikum = $id_mata_praktikum;
    $data->keaktifan = $keaktifan;
    $data->tugas = $tugas;
    $data->ujian = $ujian;
    $data->kehadiran = $kehadiran;
    $data->angka_akhir = $angka;
    $data->huruf_mutu = $huruf;
    
    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    }
     public function show_npm($npm)
    {
        //
         $data = \App\nilai::where('npm',$npm)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['nilai'] = $data;
        return response($res);
    }else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    public function show_mp($id_mata_praktikum)
    {
        //
         $data = \App\nilai::where('id_mata_praktikum',$id_mata_praktikum)->get();

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
