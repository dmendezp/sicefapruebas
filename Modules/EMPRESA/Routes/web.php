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

Route::prefix('SenaEmpresa2')->group(function() {
    Route::get('/', 'EMPRESAController@home')->name('home');
    Route::get('Nosotros/', 'EMPRESAController@we')->name('Nosotros');
    Route::get('Contactos/', 'EMPRESAController@contacts')->name('Contactos');

    //Entrevistas
    Route::get('Entrevistas/Registros/', 'InterviewController@index')->name('Registros');
    Route::get('Entrevistas/Postulados/', 'InterviewController@postulate')->name('Postulados');

    //Prestamos
    Route::get('Prestamos/Nuevo/', 'LendingController@index')->name('NuevoPrestamo');
    Route::get('Prestamos/Registrados/', 'LendingController@registrados')->name('PrestamosRegistrados');

    //Asistencia
    Route::get('Asistencias/Registro/', 'AttendanceController@index')->name('AgregarAsistencia');
    Route::get('Asistencias/', 'AttendanceController@registro')->name('Asistencias');



});
