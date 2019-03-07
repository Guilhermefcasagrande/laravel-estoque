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
Route::get('/', function(){
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/produtos', "ProdutoController@lista");
Route::get('/produtos/json', "ProdutoController@listaJson");
Route::get('/produtos/novo', "ProdutoController@novo");
// Route::post('/produtos/adiciona', "ProdutoController@adiciona");

// Permite que sejam enviadas dois tipos de requisição para a rota
Route::match(array("GET","POST"), '/produtos/adiciona', "ProdutoController@adiciona");
// Define que o parametro da rota deverá ser um número
Route::get('/produtos/mostra/{id}', "ProdutoController@mostra")->where("id", "[0-9]+");
