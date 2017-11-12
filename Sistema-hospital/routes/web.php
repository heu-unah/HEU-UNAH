<?php


Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('pacientes/home', 'PacienteController@home');
//Route::get('pacientes/home', 'PacienteController@getTasks');
Route::get('api/pacientes', function(){
	//return DataTables::eloquent(App\Paciente::query())->make(true);
	return datatables()->eloquent(App\Paciente::query())->toJson();
});
Route::get('/pacientes/crear', 'PacienteController@mostrarFormCrear');
Route::post('/pacientes/crear', 'PacienteController@crear');

Route::get('/habitaciones/crear', 'HabitacionController@index');
Route::post('/habitaciones/crear', 'HabitacionController@crear');

Route::get('personas/crear', 'PersonaController@index');
Route::post('personas/crear', 'PersonaController@crear');


Route::get('empleados/crear', 'EmpleadoController@index');
Route::post('empleados/crear', 'EmpleadoController@crear');


Route::get('fichas/crear', 'FichaController@index');
Route::post('fichas/crear', 'FichaController@crear');


Route::get('movimientos/crear', 'MovimientoController@index');
Route::post('movimientos/crear', 'MovimientoController@crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
