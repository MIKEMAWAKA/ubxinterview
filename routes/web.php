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

Route::get('/', function () {
    return view('welcome');
});

Route::post('importExcel', [App\Http\Controllers\ExcelhandleController::class, 'importExcel'])->name('importExcel');
//Route::get('/excelupload', [App\Http\Controllers\ExcelhandleController::class, 'importExcel']);
Route::get('/data', [App\Http\Controllers\ExcelhandleController::class, 'getdata']);
