<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Crear una tabla en la base de datos
        Schema::create('cursos', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('codigo_curso');
            $table->string('nombre_curso');
            $table->string('modalidad');
            $table->integer('creditos');
            $table->string('modulo');
            $table->integer('creditos_por_semestre');
            $table->integer('creditos_totales');
            $table->string('tipologia');
            $table->integer('cursos_por_semestre');
            $table->timestamps(); //Importante tener el timestamps para almacenar la fecha del cambio

            //Crear una llave foranea 
            $table->unsignedBigInteger('id_tipos_cursos');
            $table->foreign('id_tipos_cursos')->references('id')->on('tipos_cursos')->onDelete('cascade');

            //Crear una llave foranea 
            $table->unsignedBigInteger('id_programas');
            $table->foreign('id_programas')->references('id')->on('programas')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
