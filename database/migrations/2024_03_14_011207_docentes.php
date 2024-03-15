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
    Schema::create('docentes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('identificacion_docente');
        $table->text('profesion');
        $table->text('nivel_de_estudios');
        $table->unsignedBigInteger('facultad');
        $table->unsignedBigInteger('contrato');
        $table->timestamps();
        
        $table->foreign('identificacion_docente')->references('id')->on('users');
        $table->foreign('facultad')->references('id')->on('facultades');
        $table->foreign('contrato')->references('id')->on('contratos');
    });
}

/**
 * Reverse the migrations.
 */
    public function down(): void
    {
    Schema::dropIfExists('docentes');
    } 
};
