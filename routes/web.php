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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'tudo@index');

Route::get('/descrever_vaga', 'tudo@descrever_vaga');
Route::post('/descrever_vaga', 'tudo@vagaTemp');
Route::get('/descrever_vaga_get', 'tudo@vagaTempGET');
Route::get('/ofertas', 'tudo@ofertas');


Route::get('/vaga', 'tudo@vaga1');
Route::get('/{idVaga}', 'tudo@vaga')->where('idVaga', '[0-9]+');
