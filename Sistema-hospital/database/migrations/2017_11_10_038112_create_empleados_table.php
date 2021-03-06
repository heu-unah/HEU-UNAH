<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEmpleado');
            $table->string('idPersona',20);
            $table->string('Empleado_Cargo',40)->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->foreign('idPersona')->references('idPersona')->on('personas')->onDelete('cascade');
            
           // $table->foreign('idPersona')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
