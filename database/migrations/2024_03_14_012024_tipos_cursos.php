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
        Schema::create('tipos_cursos', function (Blueprint $table) {

            //Tipo de contrato
            $table->id();
            $table->string('nombre_tipos_cursos');
            $table->text('descripcion')->nullable();
            $table->timestamps(); //Importante tener el timestamps para almacenar la fecha del cambio
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_cursos');
    }
};
