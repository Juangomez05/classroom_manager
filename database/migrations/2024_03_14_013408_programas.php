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
        Schema::create('programas', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('codigo_programa');
            $table->string('nombre_programa');
            $table->string('anio_pensum');
            $table->string('tipo_Programa');
            $table->string('tipo_grado');
            $table->unsignedBigInteger('facultad');
            $table->unsignedBigInteger('coordinador');
            $table->timestamps();
            
            $table->foreign('facultad')->references('id')->on('facultades');
            $table->foreign('coordinador')->references('id')->on('coordinadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
