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
        Schema::create('facultades', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('codigo_facultad');
            $table->date('nombre_facultad');
            $table->unsignedBigInteger('decano_facultad');
            $table->timestamps();
            
            $table->foreign('decano_facultad')->references('id')->on('decanos');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultades');
    }
};
