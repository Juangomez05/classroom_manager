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
        Schema::create('contratos', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('nombre_contrato');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('bolsas_horas');
            $table->integer('horas_academicas')->default(0);
            $table->integer('horas_investigacion')->default(0);
            $table->integer('horas_gestion')->default(0);
            $table->integer('horas_relacionamiento_con_entorno')->default(0);
            $table->integer('horas_por_asignar')->default(0);
            $table->timestamps(); //Importante tener el timestamps para almacenar la fecha del cambio
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
