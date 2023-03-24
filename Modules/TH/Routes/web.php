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

Route::prefix('/th')->group(function() {
    Route::get('/index', 'THController@index');
    Route::get('/contract', 'THController@contract');
    Route::get('/format', 'THController@format');
});
