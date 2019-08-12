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

Auth::routes();


Route::get('/home', 'HomeController@index');
Route::prefix('guia')->group(function() {
  Route::get('/login', 'GuiaLoginController@showLoginForm')->name('guia.login');
  Route::post('/login', 'GuiaLoginController@login')->name('guia.login.submit');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('guia.logout');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/escolha_login', function () {
    return view('escolha_login');
});

Route::get('/passeio', [

    'as'    =>  'passeio',
    'uses'  =>  'PasseioController@consultaTurista'

]);

Route::get('/visualizar_passeio/{id}', [

    'as'    =>  'visualizar_passeio',
    'uses'  =>  'PasseioController@visualizarPasseio'

]);

//Route::get('/passeio', function () {
//    return view('passeio');
//});

Route::resource('users', 'UserController');
Route::resource('guias', 'GuiaController');
Route::resource('passeios', 'PasseioController');

Route::get('/cadastro', function () {
    return view('cadastro_guia');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
