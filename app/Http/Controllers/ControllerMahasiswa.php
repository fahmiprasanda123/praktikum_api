<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMahasiswa extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\mahasiswa::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['mahasiswa'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($npm)
    {
        //

         $data = \App\Mahasiswa::where('npm',$npm)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['mahasiswa'] = $data;
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
    $npm = $request->input('npm');
    $user_id = $request->input('user_id');
    $semester = $request->input('semester');
    $sks = $request->input('sks');
    $frs = $request->input('frs');
    
    

    $data = new \App\mahasiswa();
    $data->NPM = $npm;
    $data->user_id = $user_id;
    $data->semester = $semester;
    $data->sks = $sks;
    $data->frs = $frs;

    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    }

    public function updatestatus(Request $request, $npm)
{
    //
    $status = $request->input('status');
    $data = \App\mahasiswa::where('npm',$npm)->first();
    $data->status = $status;

    if($data->save()){
        $res['message'] = "Success! update status";
        $res['mahasiswa'] = "$data";
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
}
}
