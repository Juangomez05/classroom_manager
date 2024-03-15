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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_user');
            $table->string('apellido_user')->nullable();
            $table->string('telefono_user')->nullable();
            $table->string('correo')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contrasenia');
            $table->string('tipo_de_usuario');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
