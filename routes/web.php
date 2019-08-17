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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nuevo', 'VehiculoController@create');
Route::post('/crear','VehiculoController@store');
Route::get('/show','VehiculoController@show');
Route::get('/shows','VehiculoController@shows');


Route::get('/{codigo}', 'VehiculoController@login');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
