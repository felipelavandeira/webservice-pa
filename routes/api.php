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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'UserController@login');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');
    Route::get('/alunos', 'UserController@list');
    Route::get('/aulas', 'AulaController@list');
    Route::get('/cursos', 'CursoController@list');
    Route::get('/disciplinas', 'DisciplinaController@list');
    Route::get('/faltas', 'FaltaController@list');
    Route::get('/notas', 'NotaController@list');
    Route::get('/professores', 'ProfessorController@list');

    Route::get('/alunos/{id}', 'UserController@show');
    Route::get('/cronogramas/{id}/', 'CursoController@cronograma');
    Route::get('/dia/{id}/{date}', 'UserController@data');
    Route::get('/faltas/{id}', 'NotaController@list');

    Route::get('aula', 'AulaController@listDay');
});