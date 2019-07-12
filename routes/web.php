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
Route::post('/api/v1/auth/register','authcontroller@register');
Route::post('/api/v1/auth/login', 'AuthController@login');


//user saja
Route::get('/api/v1/user','Controlleruser@index');
Route::get('/api/v1/user/{id}','Controlleruser@show');
Route::post('/api/v1/user/store','Controlleruser@store');
Route::put('/api/v1/user/update/{id}','Controlleruser@update');
Route::delete('/api/v1/user/delete/{id}','Controlleruser@destroy');

//user cek token
Route::get('api/v1/user/token', 'Controlleruser@token')->middleware('auth:api');
Route::get('api/v1/user/token/{id}', 'Controlleruser@tokenById')->middleware('auth:api');
//mahasiswa
Route::get('/api/v1/mahasiswa','Controllermahasiswa@index');
Route::get('/api/v1/mahasiswa/{npm}','Controllermahasiswa@show');
Route::post('/api/v1/mahasiswa/store','Controllermahasiswa@store');
Route::put('/api/v1/mahasiswa/updatestatus/{npm}','Controllermahasiswa@updatestatus');

//Dosen
Route::get('/api/v1/dosen','Controllerdosen@index');
Route::get('/api/v1/dosen/{nidn}','Controllerdosen@show');
Route::post('/api/v1/dosen/store','Controllerdosen@store');


//mp
Route::get('/api/v1/matapraktikum','MataPraktikumController@index');
Route::get('/api/v1/matapraktikum/{id_mata_praktikum}','MataPraktikumController@show');
Route::post('/api/v1/matapraktikum/add','MataPraktikumController@store');
Route::put('/api/v1/matapraktikum/update/{id_mata_praktikum}','MataPraktikumController@update');
Route::put('/api/v1/matapraktikum/update_mhs/{id_mata_praktikum}','MataPraktikumController@update_mhs');


//kepala lab
Route::get('/api/v1/kepalalab','KepalaLabController@index');
Route::get('/api/v1/kepalalab/{id_kepala_lab}','KepalaLabController@show');

//laboram
Route::get('/api/v1/laboram','LaboramController@index');
Route::get('/api/v1/laboram/{id_laboram}','LaboramController@show');

//asisten
Route::get('/api/v1/asisten','asistenController@index');
Route::get('/api/v1/asisten/{id_asisten}','asistenController@show');
Route::post('/api/v1/asisten/add','asistenController@add');


//TU
Route::get('/api/v1/TU','TuController@index');
Route::get('/api/v1/TU/{id_tu}','TuController@show');
Route::POST('/api/v1/TU/add','TuController@add');


//modul
Route::get('/api/v1/modul','modulController@index');
Route::get('/api/v1/modul/{id_modul}','modulController@show');
Route::post('/api/v1/modul/store','modulController@store');
Route::get('/api/v1/modul/mp/{id_mata_praktikum}','modulController@show_mp');

//nilai
Route::get('/api/v1/nilai','NilaiController@index');
Route::get('/api/v1/nilai/{id_nilai}','nilaiController@show');
Route::post('/api/v1/nilai/store','nilaiController@store');
Route::get('/api/v1/nilai/npm/{npm}','nilaiController@show_npm');
Route::get('/api/v1/nilai/mp/{id_mata_praktikum}','nilaiController@show_mp');


Route::get('/', function () {
    return view('welcome');
});
