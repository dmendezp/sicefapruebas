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

Route::prefix('cafeto')->group(function() {
    Route::get('/index', 'CAFETOController@index')->name('cafeto.index');
    Route::get('/developers', 'CAFETOController@developers')->name('cafeto.developers');
});
