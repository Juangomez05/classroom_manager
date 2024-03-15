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
        Schema::create('horarios', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('modalidad');
            $table->string('modulo');
            $table->timestamps(); 
            $table->unsignedBigInteger('id_asignaciones_grupos');
            $table->foreign('id_asignaciones_grupos')->references('id')->on('asignaciones_grupos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
