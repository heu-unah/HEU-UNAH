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

Route::get('personas/crear', 'PersonaController@index');
Route::post('personas/crear', 'PersonaController@crear');


Route::get('empleados/crear', 'PersonaController@index');
Route::post('empleados/crear', 'PersonaController@crear');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
