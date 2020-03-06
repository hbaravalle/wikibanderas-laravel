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

// Welcome por defecto
Route::get('/', function() { return view('welcome'); });

Auth::routes();

// Index, listado de paises
Route::get('/paises', 'PaisController@listadoPaises');

// Agregar película
Route::get('/pais/agregar', function() { return view('agregarPais'); });
Route::post('/pais/agregar', 'PaisController@agregar');

// Detalle Pais
Route::get('/pais/{id}', 'PaisController@buscarPais');

// BorrarPais
Route::get('/pais/borrar/{id}', 'PaisController@detalleBorrarPais');
Route::post('/pais/borrar/{id}', 'PaisController@borrarPais');

// Continentes
Route::get('/continentes', 'ContinenteController@listadoContinentes');


Route::get('/home', 'HomeController@index')->name('home');
