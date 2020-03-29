<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//TODO EN TIEMPO REAL
Route::get('todos','TaskController@fetchAll');
Route::post('todos','TaskController@store');
Route::delete('todos/{id}','TaskController@delete');


//ROUTE'S PARA consumir desde vue - crear ticket
Route::post('ticket', 'TicketsController@store');
Route::get('ticket', 'TicketsController@get');
Route::delete('ticket/{id}', 'TicketsController@delete');

//ROUTE'S PARA consumir desde vue - CLIENTE//
Route::get('/cliente', 'TaskController@index');
Route::put('/cliente/actualizar', 'TaskController@update');
Route::post('cliente', 'ClienteController@store');
Route::delete('/cliente/borrar/{id}', 'TaskController@destroy');
Route::get('/cliente/buscar', 'TaskController@show');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
