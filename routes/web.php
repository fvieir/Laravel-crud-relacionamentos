<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

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

Route::resource('/categorias' , 'App\Http\Controllers\CategoriaController');
Route::resource('/produtos'   , 'App\Http\Controllers\ProdutoController');

Route::get('/categorias/produtos/{id}','App\Http\Controllers\CategoriaController@produtos')->name('categorias.produtos');
