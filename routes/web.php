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

// Route::get('/', function () {
//     return view('front');
// });

Route::group(['prefix' => '/'], function(){
    // Route::get('', ['as' => '/', 'uses' => 'textosController@index']);
    Route::get('', ['as' => '/', 'uses' => 'App\Http\Controllers\textosController@index']);
    Route::post('/save', ['as' => 'textos.salvar', 'uses' => 'App\Http\Controllers\textosController@salvar']);
    Route::get('{}/editar', ['as' => 'textos.editar', 'uses' => 'App\Http\Controllers\textosController@editar']);
    Route::put('{id}/editarsalvar', ['as' => 'textos.editarsalvar', 'uses' => 'App\Http\Controllers\textosController@atualizar']);
    Route::get('{id}/excluir', ['as' => 'textos.excluir', 'uses' => 'App\Http\Controllers\textosController@excluir']);
});
