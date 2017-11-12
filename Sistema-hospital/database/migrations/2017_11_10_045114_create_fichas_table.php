<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->integer('idFicha');
            $table->integer('idPaciente')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->date('Ficha_Fecha');
            $table->string('Estado_Paciente',45)->nullable();
            $table->timestamps();
            
            $table->primary(['idFicha','idPaciente']);
            
           // $table->foreign('idPaciente')->references('id')->on('pacientes');
            //$table->foreign('idEmpleado')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
