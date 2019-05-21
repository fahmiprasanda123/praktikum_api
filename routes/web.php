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

//user saja
Route::get('/user','Controlleruser@index');
Route::get('/user/{id}','Controlleruser@show');
Route::post('/user/store','Controlleruser@store');
Route::put('/user/update/{id}','Controlleruser@update');
Route::delete('/user/delete/{id}','Controlleruser@destroy');

//mahasiswa
Route::get('/mahasiswa','Controllermahasiswa@index');
Route::get('/mahasiswa/{npm}','Controllermahasiswa@show');

Route::get('/', function () {
    return view('welcome');
});
