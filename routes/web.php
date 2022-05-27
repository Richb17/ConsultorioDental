<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\ConsultaController::class, 'index']);


Route::get('/nuevoPaciente', [App\Http\Controllers\PacienteController::class, 'create']);
Route::get('/verPacientes', [App\Http\Controllers\PacienteController::class, 'index']);
Route::get('/guardarPaciente', [App\Http\Controllers\PacienteController::class, 'store']);
Route::get('/eliminarPaciente/{id}', [App\Http\Controllers\PacienteController::class, 'destroy']);
Route::get('/editarPaciente/{id}', [App\Http\Controllers\PacienteController::class, 'edit']);
Route::get('/guardarEdicionPaciente', [App\Http\Controllers\PacienteController::class, 'update']);

Route::get('/nuevoTratamiento', [App\Http\Controllers\TratamientoController::class, 'create']);
Route::get('/verTratamientos', [App\Http\Controllers\TratamientoController::class, 'index']);
Route::get('/guardarTratamiento', [App\Http\Controllers\TratamientoController::class, 'store']);
Route::get('/eliminarTratamiento/{id}', [App\Http\Controllers\TratamientoController::class, 'destroy']);
Route::get('/editarTratamiento/{id}', [App\Http\Controllers\TratamientoController::class, 'edit']);
Route::get('/guardarEdicionTratamiento', [App\Http\Controllers\TratamientoController::class, 'update']);


#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
