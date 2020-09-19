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

Route::get('/', function() { return redirect('/login'); })->name('login');

Route::get('/registrar', 'Auth\RegisterController@index')->name('registrar');

Route::post('/registrar', 'Auth\RegisterController@registrar')->name('registrar_usuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas Cliente

Route::get('/clientes', 'ClienteController@index')->name('listar_clientes');

Route::get('/clientes/novo', 'ClienteController@novo_cliente')->name('novo_cliente');

Route::get('/clientes/{id}', 'ClienteController@visualizar_cliente')->name('visualizar_cliente');

Route::get('/clientes/alterar/{id}', 'ClienteController@alterar_cliente')->name('alterar_cliente');

Route::get('/clientes/excluir/{id}', 'ClienteController@excluir_cliente')->name('excluir_cliente');

Route::post('/alterar_cliente/{id}','ClienteController@alterar')->name('alterar');

Route::post('/excluir_cliente/{id}','ClienteController@excluir')->name('excluir');

Route::post('/salvar_cliente', 'ClienteController@salvar_cliente')->name('salvar_cliente');

// Livros

Route::get('/livros', 'LivroController@index')->name('listar_livros');

Route::get('/livros/autor/{id}', 'LivroController@livros_autor')->name('listar_livros_autor');

Route::get('/livros/editora/{id}', 'LivroController@livros_editora')->name('listar_livros_editora');

Route::get('/livros/novo', 'LivroController@novo_livro')->name('novo_livro');

Route::post('/livros/salvar', 'LivroController@salvar_livro')->name('salvar_livro');

Route::get('/livros/excluir/{id}', 'LivroController@excluir_livro')->name('excluir_livro');

Route::post('/livros/excluir/{id}', 'LivroController@excluir')->name('exclusao_livro');

Route::get('/livros/{id}', 'LivroController@consultar_livro')->name('consultar_livro');

Route::get('/livros/alterar/{id}', 'LivroController@alterar_livro')->name('alterar_livro');

Route::post('/livros/alterar/{id}', 'LivroController@alterar')->name('alteracao_livro');

//USUARIOS

Route::get('/usuarios', 'UsuarioController@index')->name('listar_usuarios');

Route::get('/usuarios/novo', 'UsuarioController@novo_usuario')->name('novo_usuario');

Route::post('/usuarios/novo', 'UsuarioController@registrar')->name('salvar_usuario');

Route::get('/usuarios/alterar/{id}', 'UsuarioController@get_alterar_usuario')->name('get_alterar_usuario');

Route::post('/usuarios/alterar/{id}', 'UsuarioController@alterar_usuario')->name('alterar_usuario');

Route::get('/usuarios/{id}', 'UsuarioController@visualizar_usuario')->name('visualizar_usuario');

Route::get('/usuarios/excluir/{id}', 'UsuarioController@get_excluir_usuario')->name('get_excluir_usuario');

Route::post('/usuarios/excluir/{id}', 'UsuarioController@excluir_usuario')->name('excluir_usuario');