<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('idPersona',20)->primary();
            $table->string('Persona_Nombre',20);
            $table->string('Persona_Apellido',20);
            $table->char('Persona_Genero',1);
            $table->integer('Persona_Estatura');
            $table->integer('Persona_Edad');
            $table->string('Persona_Descripcion',200)->nullable();
            $table->string('Persona_Tes',100)->nullable();
            $table->char('Tipo_Sangre',3)->nullable();
            $table->string('Observaciones',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
