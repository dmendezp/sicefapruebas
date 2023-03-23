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

Route::prefix('/bienestar')->group(function() {
    Route::get('/index', 'BIENESTARController@index');

});
Route::prefix('/bienestar')->group(function() {
    Route::get('/APEalimentacion', 'BIENESTARController@APEalimentacion')->name('bienestar.APEalimentacion');
});

Route::prefix('/bienestar')->group(function() {
    Route::get('/APEinterno', 'BIENESTARController@APEinterno')->name('bienestar.APEinterno');
});
