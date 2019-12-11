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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UsuarioController');
Route::resource('alunos', 'AlunoController');
Route::resource('ocorrencias', 'OcorrenciaController');
Route::resource('turmas', 'TurmaController');
Route::resource('niveisacessos', 'NiveisAcessoController');
Route::resource('tiposocorrencias', 'TipoOcorrenciaController');
Route::resource('materias', 'MateriaController');
