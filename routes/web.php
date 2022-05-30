<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExcelCSVController;

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

Route::resource('paciente', App\Http\Controllers\PacienteController::class)->middleware('auth');
Route::resource('tratamiento', App\Http\Controllers\TratamientoController::class)->middleware('auth');
Route::resource('consulta', App\Http\Controllers\ConsultaController::class)->middleware('auth');
Route::get('excel-csv-file', [App\Http\Controllers\ExcelCSVController::class, 'index']);
Route::post('import-excel-csv-file', [App\Http\Controllers\ExcelCSVController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{slug}', [App\Http\Controllers\ExcelCSVController::class, 'exportExcelCSV']);
Route::get('download-pdf', [App\Http\Controllers\ConsultaController::class, 'downloadPdf'])->name('download-pdf');

Route::get('/home', [App\Http\Controllers\ConsultaController::class, 'index']);
