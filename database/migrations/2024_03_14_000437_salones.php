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
        Schema::create('salones', function (Blueprint $table) {
            $table->id();
            $table->string('numero_de_salon');
            $table->string('capacidad');
            $table->text('equipamiento');
            $table->string('ubicacion_sede');
            $table->integer('disponibilidad_nocturna');
            $table->integer('disponibilidad_diurna');
            $table->string('estado',2);
            $table->text('prioridad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salones');
    }
};
