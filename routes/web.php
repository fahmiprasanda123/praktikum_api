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
Route::get('/user','Controlleruser@index');
Route::get('/user/{id}','Controlleruser@show');
Route::post('/user/store','Controlleruser@store');
Route::post('/user/update/{id}','Controlleruser@update');
Route::post('/user/delete/{id}','Controlleruser@destroy');

Route::get('/', function () {
    return view('welcome');
});
