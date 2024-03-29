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


Route::resource('cliente', 'clientecontroller');

Route::resource('categoria', 'CategoriaController');

Route::resource('factura', 'Facturacontroller');

Route::resource('empleado', 'Empleadocontroller');



Route::get('/categoria', 'Categoriacontroller@index');
Route::post('/categoria', 'Categoriacontroller@store');

Route::get('/servicio', 'Serviciocontroller@index');
Route::post('/servicio', 'Serviciocontroller@store');


Route::post('/factura', 'Facturacontroller@store');

//Route::get('/empleado', 'Empleadocontroller@getempleado');
Route::post('/empleado', 'Empleadocontroller@store');

Route::get('/descripcion', 'DescripcionController@getdescripcion');
