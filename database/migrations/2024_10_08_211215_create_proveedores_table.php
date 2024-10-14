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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('razon_social', 150)->unique(); // Razon Social, máximo 150 caracteres, única y obligatoria
            $table->string('NIT', 20)->unique(); // NIT, máximo 20 caracteres, único y obligatorio
            $table->string('contacto', 100)->nullable(); // Contacto, máximo 100 caracteres, opcional (nullable)
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
