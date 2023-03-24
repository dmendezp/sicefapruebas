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

Route::middleware('auth:api')->get('/th', function (Request $request) {
    return $request->user();
});
Route::get('/format', function () {
    return view('format');
})->middleware(['auth', 'verified'])->name('format');

Route::get('/income', function () {
    return view('income');
})->middleware(['auth', 'verified'])->name('income');