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

Route::prefix('/hdc')->group(function() {
    Route::get('/index', 'HDCController@index');

    Route::get('/inicio', [Modules\HDC\Http\Controllers\HDCController::class, 'inicio'])->name('inicio');
    Route::get('/contacto', [Modules\HDC\Http\Controllers\HDCController::class, 'contacto'])->name('contacto');
});