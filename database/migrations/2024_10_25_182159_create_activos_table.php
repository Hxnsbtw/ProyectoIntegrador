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
        Schema::create('activos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 100);
        $table->string('serial', 50)->unique();
        $table->string('imagen');
        $table->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
        
        // Agregando la columna de referencia para el proveedor
        $table->unsignedBigInteger('proveedor_id')->nullable();
        $table->foreign('proveedor_id')
        ->references('id')
        ->on('proveedores')
        ->cascadeOnUpdate()
        ->nullOnDelete();

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
