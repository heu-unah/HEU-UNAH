<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    //
    protected $table = 'habitaciones';
    protected $fillable = [
        'habitacion_numero', 'habitacion_area'
    ];
    
    protected $primaryKey = 'id';
    
    public function movimientos(){
        
        return $this->hasMany('App\Movimiento','id');
    }
}
