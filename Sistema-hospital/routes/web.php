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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
