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

Route::get('/', function() { return redirect('/login'); });

Route::get('/registrar', 'Auth\RegisterController@index')->name('registrar');

Route::post('/registrar', 'Auth\RegisterController@registrar')->name('registrar_usuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas Cliente

Route::get('/clientes', 'ClienteController@index')->name('listar_clientes');

Route::get('/novo_cliente', 'ClienteController@novo_cliente')->name('novo_cliente');

Route::get('/clientes/{id}', 'ClienteController@visualizar_cliente')->name('visualizar_cliente');

Route::get('/clientes/alterar/{id}', 'ClienteController@alterar_cliente')->name('alterar_cliente');

Route::get('/clientes/excluir/{id}', 'ClienteController@excluir_cliente')->name('excluir_cliente');

Route::post('/alterar_cliente/{id}','ClienteController@alterar')->name('alterar');

Route::post('/excluir_cliente/{id}','ClienteController@excluir')->name('excluir');

Route::post('/salvar_cliente', 'ClienteController@salvar_cliente')->name('salvar_cliente');

// Livros

Route::get('/livros', function() {
    $livros = App\Livro::find(1);

    return $livros->editora;
});