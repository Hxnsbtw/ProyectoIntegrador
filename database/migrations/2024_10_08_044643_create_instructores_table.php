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
    Schema::create('instructores', function (Blueprint $table) {
        $table->id(); // Clave primaria
        $table->string('nombre', 100); // Nombre, máximo 100 caracteres, obligatorio
        $table->string('apellido', 100); // Apellido, máximo 100 caracteres, obligatorio
        $table->string('Identificacion', 50)->unique(); // Número de Identificación, único, máximo 50 caracteres, obligatorio
        $table->string('celular', 20)->nullable(); // Celular, máximo 20 caracteres, opcional (nullable)
        $table->string('correo', 150)->nullable (); // Correo, único, máximo 150 caracteres, obligatorio
        $table->string('Especializacion', 150)->nullable(); // Especialización, máximo 150 caracteres, opcional (nullable)
        
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructores');
    }
};
