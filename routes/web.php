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


Route::get('/', 'App\Http\Controllers\ProductosController@index')->name('productos.index');
Route::get('/productos/crear', 'App\Http\Controllers\ProductosController@create')->name('productos.create');
Route::post('/productos/store', 'App\Http\Controllers\ProductosController@store')->name('productos.store');
Route::get('/productos/editar', 'App\Http\Controllers\ProductosController@edit')->name('productos.edit');
Route::put('/productos/update', 'App\Http\Controllers\ProductosController@update')->name('productos.update');
Route::delete('/productos/destroy', 'App\Http\Controllers\ProductosController@destroy')->name('productos.destroy');

