<?php

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/pacientes/crear', 'PacienteController@index');
Route::post('/pacientes/crear', 'PacienteController@crear');

Route::get('/habitaciones/crear', 'HabitacionController@index');
Route::post('/habitaciones/crear', 'HabitacionController@crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
