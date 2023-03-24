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

Route::prefix('/agroindustria')->group(function() {
    Route::get('/index', 'AGROINDUSTRIAController@index');

    Route::get('/unidd', 'AGROINDUSTRIAController@unidd');

    Route::get('/movimientos', 'AGROINDUSTRIAController@movimientos');
});