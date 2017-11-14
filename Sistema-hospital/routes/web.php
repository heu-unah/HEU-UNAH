<?php


Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});


/*Route::get('pacientes/buscarNombre', 'PacienteController@buscarNombre');
Route::get('api/pacientes', function(){
	return datatables()->eloquent(App\Paciente::query())->toJson();
});*/
Route::get('pacientes/home', 'PacienteController@home');
Route::get('pacientes/buscar', 'PacienteController@buscar');
Route::get('/pacientes/crear', 'PacienteController@mostrarFormCrear');
Route::post('/pacientes/crear', 'PacienteController@crear');

Route::get('/habitaciones/home', 'HabitacionController@home');
Route::get('/habitaciones/crear', 'HabitacionController@mostrarFormCrear');
Route::post('/habitaciones/crear', 'HabitacionController@crear');

Route::get('personas/home', 'PersonaController@home');
Route::get('personas/crear', 'PersonaController@mostrarFormCrear');
Route::post('personas/crear', 'PersonaController@crear');
Route::get('personas/editar/{id}','PersonaController@editar');

//Route::put('personas/actualizar/{id}', 'PersonaController@update');

Route::PUT('personas/update', 'PersonaController@update');


Route::get('empleados/home', 'EmpleadoController@home');
Route::get('empleados/crear', 'EmpleadoController@mostrarFormCrear');
Route::post('empleados/crear', 'EmpleadoController@crear');


Route::get('fichas/home', 'FichaController@home');
Route::get('fichas/crear', 'FichaController@mostrarFormCrear');
Route::post('fichas/crear', 'FichaController@crear');


Route::get('movimientos/home', 'MovimientoController@home');
Route::get('movimientos/crear', 'MovimientoController@mostrarFormCrear');
Route::post('movimientos/crear', 'MovimientoController@crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

