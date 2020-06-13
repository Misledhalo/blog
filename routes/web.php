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
    return view('auth.login');
});
//Route::get('/empleados', 'EmpleadosController@index' );
//Route::get('/empleados/create', 'EmpleadosController@create');
//Route::get('/empleados/edit', 'EmpleadosController@edit');

Route::resource('empleados', 'EmpleadosController')->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('trabajadores', 'trabajadoresController');
Route::resource('movies', 'moviesController')->middleware('auth');
Route::resource('series', 'SeriesController');
Route::resource('animes', 'AnimesController');
Route::resource('serie', 'SerieController')->middleware('auth');
Route::resource('libros', 'LibrosController')->middleware('auth');