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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/guia', 'GuiaController@guia')->name('cadastro_guia');
Route::get('/turista', 'TuristaController@turista')->name('cadastro_turista');

Route::resource('passeio','PasseioController');