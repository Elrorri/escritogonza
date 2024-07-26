<?php

use Illuminate\Support\Facades\Route;

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
#Crear una API que permita realizar Alta, baja, modificación, listado y búsqueda de Personas

Route::get('/personas', 'PersonasController@index');
Route::get('/personas/{id}', 'PersonasController@show');
Route::post('/personas', 'PersonasController@store');
Route::put('/personas/{id}', 'PersonasController@update');
Route::delete('/personas/{id}', 'PersonasController@destroy');
