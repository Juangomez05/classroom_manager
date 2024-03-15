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
        Schema::create('reservas', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->unsignedBigInteger('salon');
            $table->unsignedBigInteger('horario');
            $table->date('dia');
            $table->time('horainicio');
            $table->time('horafinal');
            $table->timestamps(); //Importante tener el timestamps para almacenar la fecha del cambio

            //Crear una llave foranea 
            $table->foreign('salon')->references('id')->on('salones')->onDelete('cascade');
            $table->foreign('horario')->references('id')->on('horarios')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
