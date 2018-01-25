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

Route::get('/home', 'HomeController@view')->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/allRest', 'MultiController@todosRestaurantes');
//Route::get('/all', 'MultiController@view');
Route::get('/rest', 'MultiController@rest');
Route::get('/local', 'MultiController@local');
Route::get('/ementa', 'MultiController@ementa');
Route::get('/horario', 'MultiController@horario');
Route::get('/reservar', 'MultiController@reserva');
Route::get('/filtro', 'MultiController@filtro');



/*
Route::get('/show-all-restaurants', 'pesquisasController@getAllRestaurants');

Route::post('/show-rest-ementa', 'pesquisasController@getFiltro');

Route::post('/reserva', 'pesquisasController@getReserva');

Route::get('/show','pesquisasController@show');*/

