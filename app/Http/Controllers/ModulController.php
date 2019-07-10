<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    //
    public function index()
    {
        //
        $data = \App\modul::all();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['modul'] = $data;
        return response($res);
    }
    else{
        $res['message'] = "Empty!";
        return response($res);
    	}
    }

        public function show($id_modul)
    {
        //
         $data = \App\modul::where('id_modul',$id_modul)->get();

    if(count($data) > 0){ //mengecek apakah data kosong atau tidak
        $res['message'] = "Success!";
        $res['modul'] = $data;
        return response($res);
    }else{
	        $res['message'] = "Failed!";
	        return response($res);
    	}
    }
        public function store(Request $request)
    {
        //
            $id_praktikum = $request->input('id_praktikum');
    $file = $request->input('file');
    
    $data = new \App\modul();
    $data->id_praktikum = $id_praktikum;
    $data->file = $file;
    
    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    }
}
