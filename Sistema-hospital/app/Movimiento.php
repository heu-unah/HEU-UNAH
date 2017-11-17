<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //
    
    protected $table = 'movimientos';
    public $auto_increment = false;
    public $incrementing = false;
    protected $fillable = [
        'idMovimiento','idHabitacion','idEmpleado', 
        'Movimiento_Fecha', 'Movimiento_Descripcion'
    ];
    protected $primaryKey = ['idMovimiento','idFicha'];
    
    public function ficha(){
        return $this->belongsTo('App\Ficha','movFicha');
    }
    
    public function habitacion(){
        return $this->belongsTo('App\Habitacion');
    }
    
    public function empleado(){
        return $this->belongsTo('App\Empleado');
    }
    
    public function paciente(){
        return $this->belongsTo('App\Ficha');
    }
}
