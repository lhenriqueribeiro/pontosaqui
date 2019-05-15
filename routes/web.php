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

//
Route::get('/contato','ContatoController@index');
Route::post('/contato/enviar','ContatoController@enviar');

//
Route::resource('/cadastro','CadastroController');

//
Route::resource('/produtos','ProdutosController');
Route::post('/produtos/busca','ProdutosController@busca');
Route::post('/produtos/ordem','ProdutosController@ordem');
