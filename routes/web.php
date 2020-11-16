<?php

//use Illuminate\Support\Facades\Route;

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

Route::post('disciplinas', [\App\Http\Controllers\DisciplinaController::class, 'index']);

Route::post('cursadas', [\App\Http\Controllers\DisciplinasConcluidasController::class, 'create']);
Route::get('cursadas/{diciplina}', [\App\Http\Controllers\DisciplinasConcluidasController::class, 'index']);
Route::delete('cursadas', [\App\Http\Controllers\DisciplinasConcluidasController::class, 'destroy']);
