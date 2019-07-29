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
    return view('index');
});

Route::get('/escolha_login', function () {
    return view('escolha_login');
});

Route::get('/passeio', function () {
    return view('passeio');
});
#Rota do turista

Route::prefix('turista')->group(function () {
    Route::get('/login', function () {
    	return view('login_turista');
	});


	/*Route::get('/cadastro', function () {
    	return view('cadastro_turista');
	}); */

	Route::get('/authentication', 'TuristaController@authentication')->name('authentication_turista');
});
Route::resource('turistas', 'TuristaController');
Route::resource('guias', 'GuiaController');
Route::resource('passeios', 'PasseioController');

#Rotas do guia
Route::prefix('guia')->group(function () {
 //    Route::get('/login', function () {
 //    	return view('login_guia');
	// });


	Route::get('/cadastro', function () {
    	return view('cadastro_guia');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/GuiaAuthenticate', 'GuiaController@authenticate')->name('authenticate_guia');
Route::get('/login_guia', function () {
        return view('login_guia');
    });
