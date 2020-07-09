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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','FruteriaController@indice');
Route::get('listado frutas/','FruteriaController@listado_frutas');
//Route::get('listar/','FruteriaController@listar',['id' => 7]);
Route::get('borrar/{id}','FruteriaController@borrar');
//Route::get('sss/{id}','FruteriaController@listar');
Route::get('detalle/{id}','FruteriaController@detalles');
Route::get('actualizar/{id}','FruteriaController@actualizar');
Route::get('actualizar_fruta','FruteriaController@actualizar_fruta');
Route::Post('actualizar_fruta','FruteriaController@actualizar_fruta');
Route::Post('nueva_fruta','FruteriaController@nueva_fruta');
Route::Get('nueva_fruta','FruteriaController@nueva_fruta');
Route::Post('guardar','FruteriaController@save');


