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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre', 100); // Nombre, máximo 100 caracteres, obligatorio
            $table->string('apellido', 100); // Apellido, máximo 100 caracteres, obligatorio
            $table->string('NumeroIdentificacion', 50)->unique(); // Número de Identificación, único, máximo 50 caracteres, obligatorio
            $table->string('correo', 150)->unique(); // Correo, único, máximo 150 caracteres, obligatorio
            $table->string('celular', 20)->nullable(); // Celular, máximo 20 caracteres, opcional (nullable)
            $table->float('peso')->nullable(); // Peso, opcional
            $table->float('altura')->nullable(); // Altura, opcional
            $table->date('fecha_ingreso')->nullable(); // Fecha de ingreso, opcional
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
