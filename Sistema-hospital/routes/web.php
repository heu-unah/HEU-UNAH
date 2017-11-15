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



//Route::get('/habitaciones/home', 'HabitacionController@home');
//Route::get('/habitaciones/crear', 'HabitacionController@mostrarFormCrear');
//Route::post('/habitaciones/crear', 'HabitacionController@crear');



Route::get('personas/home', 'Persona3Controller@home'); //metodo de busqueda de personas por nombre
Route::resource('personas','Persona3Controller'); //rutas del crud, se ven con "php artisan route:list"

Route::get('/pacientes/buscar', 'Paciente2Controller@buscar');
Route::get('pacientes/home', 'Paciente2Controller@home'); //metodo de busqueda de pacientes por nombre
Route::resource('pacientes','Paciente2Controller'); //rutas del crud de pacientes
//Route::get('pacientes/buscar', 'Paciente2Controller@buscar');


Route::resource('empleados', 'Empleado3Controller');

Route::get('empleados/home', 'Empleado3Controller@home');

Route::resource('habitaciones', 'Habitacion2Controller');

//Route::get('empleados/crear', 'EmpleadoController@mostrarFormCrear');
//Route::post('empleados/crear', 'EmpleadoController@crear');


Route::get('fichas/home', 'FichaController@home');
Route::get('fichas/crear', 'FichaController@mostrarFormCrear');
Route::post('fichas/crear', 'FichaController@crear');


Route::get('movimientos/home', 'MovimientoController@home');
Route::get('movimientos/crear', 'MovimientoController@mostrarFormCrear');
Route::post('movimientos/crear', 'MovimientoController@crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

