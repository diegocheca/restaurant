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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
