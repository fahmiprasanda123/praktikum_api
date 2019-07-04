<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//auth
Route::post('/auth/register','authcontroller@register');
Route::post('/auth/login', 'AuthController@login');


//user saja
Route::get('/user','Controlleruser@index');
Route::get('/user/{id}','Controlleruser@show');
Route::post('/user/store','Controlleruser@store');
Route::put('/user/update/{id}','Controlleruser@update');
Route::delete('/user/delete/{id}','Controlleruser@destroy');

//user cek token
Route::get('user/api/token', 'Controlleruser@token')->middleware('auth:api');
Route::get('user/api/token/{id}', 'Controlleruser@tokenById')->middleware('auth:api');
//mahasiswa
Route::get('/mahasiswa','Controllermahasiswa@index');
Route::get('/mahasiswa/{npm}','Controllermahasiswa@show');

//Dosen
Route::get('/dosen','Controllerdosen@index');
Route::get('/dosen/{nidn}','Controllerdosen@show');


//mp
Route::get('/matapraktikum','MataPraktikumController@index');
Route::get('/matapraktikum/{id_mata_praktikum}','MataPraktikumController@show');
Route::post('/matapraktikum/add','MataPraktikumController@store');


//kepala lab
Route::get('/kepalalab','KepalaLabController@index');
Route::get('/kepalalab/{id_kepala_lab}','KepalaLabController@show');

//laboram
Route::get('/laboram','LaboramController@index');
Route::get('/laboram/{id_laboram}','LaboramController@show');

//asisten
Route::get('/asisten','asistenController@index');
Route::get('/asisten/{id_asisten}','asistenController@show');


//TU
Route::get('/TU','TuController@index');
Route::get('/TU/{id_tu}','TuController@show');


//modul
Route::get('/modul','modulController@index');
Route::get('/modul/{id_modul}','modulController@show');

//nilai
Route::get('/nilai','NilaiController@index');
Route::get('/nilai/{id_nilai}','nilaiController@show');



Route::get('/', function () {
    return view('welcome');
});
