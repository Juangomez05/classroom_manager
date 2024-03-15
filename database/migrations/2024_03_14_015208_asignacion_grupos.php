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
        Schema::create('asignaciones_grupos', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('grupo');
            $table->text('descripcion');
            $table->timestamps(); //Importante tener el timestamps para almacenar la fecha del cambio

            //Crear una llave foranea 
            $table->unsignedBigInteger('id_cursos');
            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade');

            //Crear una llave foranea 
            $table->unsignedBigInteger('id_docentes');
            $table->foreign('id_docentes')->references('id')->on('docentes')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones_grupos');
    }
};
