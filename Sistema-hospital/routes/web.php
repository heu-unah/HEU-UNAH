<?php


Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});



/*Route::get('api/pacientes', function(){
	return datatables()->eloquent(App\Paciente::query())->toJson();
});*/
Route::get('api/pacientes', 'PacienteController@getJoinData');
Route::get('api/empleados', function(){
	return datatables()->eloquent(App\Empleado::query())->toJson();
});
Route::get('api/habitaciones', function(){
	return datatables()->eloquent(App\Habitacion::query())->toJson();
});
Route::get('api/personas', function(){
	return datatables()->eloquent(App\Persona::query())->toJson();
});
Route::get('api/movimientos', function(){
	return datatables()->eloquent(App\Movimiento::query())->toJson();
});
Route::get('api/fichas', function(){
	return datatables()->eloquent(App\Ficha::query())->toJson();
});

/*
Route::get('pacientes/home', 'PacienteController@home');
Route::get('/pacientes/crear', 'PacienteController@mostrarFormCrear');
Route::post('/pacientes/crear', 'PacienteController@crear');
*/

Route::get('/habitaciones/home', 'HabitacionController@home');
Route::get('/habitaciones/crear', 'HabitacionController@mostrarFormCrear');
Route::post('/habitaciones/crear', 'HabitacionController@crear');

/*
Route::get('personas/home', 'PersonaController@home');
Route::get('personas/crear', 'PersonaController@mostrarFormCrear');
Route::post('personas/crear', 'PersonaController@crear');
Route::get('personas/editar/{id}','PersonaController@editar');

/*
Route::get('personas/editar/{id}',function($id){
    return $id;
});

Route::resource('personas/actualizar/', 'PersonaController@update');
/*
Route::get('personas/actualizar/{id}', function($id){
    return $id;
});
*/

//Route::post('personas/actualizar/{id}', 'PersonaController@update');

Route::resource('personas','Persona3Controller' /*['only'=> ['index','create','store','edit']]*/);
Route::resource('pacientes','Paciente2Controller');

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

