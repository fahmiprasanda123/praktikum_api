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
}
