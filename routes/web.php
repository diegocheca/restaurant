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


Route::get('/tu-hermana', function () {
    return 'tu hermana es puta';
});

Route::post('/tu-hermana', function () {
    return 'tu hermana es una puta en 4';
});


Route::get('/prueba_vue', 'PruebaVueController@inicio_vue');

//pdf
Route::name('print')->get('/imprimir', 'PruebaVueController@imprimir');



//tickets
Route::get('/tickets_crear', 'PruebaVueController@crear_ticket');
Route::get('/tickets_ver', 'TicketsController@get');

Route::get('/tickets_get_sin_hacer', 'TicketsController@get_ticket_en_progreso');




//clientes

Route::get('/clientes_get_ticket_todos', 'ClienteController@get_clientes_ticket');
Route::get('/clientes_get_todos_los_datos/{id}', 'ClienteController@get_cliente_todos_los_datos');



//comanda

Route::get('/ver_comanda', 'TicketsController@comanda_ver');
Route::get('/ver_comanda_index', 'TicketsController@comanda_index_componente');


//productos
Route::get('/productos_get_todos', 'ProductoController@get');


//JWT
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
       /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
 });


//productosenticket
Route::post('actualizar_prodtick/{id}/{estado}', 'ProductosenticketController@update_axios');



//iconos

Route::get('/ver_iconos', 'TicketsController@iconos_ver');


//VOYAGER
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
