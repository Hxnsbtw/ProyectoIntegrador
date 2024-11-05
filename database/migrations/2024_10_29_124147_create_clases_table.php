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
        Schema::create('clases', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('descripcion', 255); // Descripción de la clase
            $table->date('fecha'); // Fecha de la clase
            $table->time('hora_inicio'); // Hora de inicio de la clase
            $table->integer('duracion'); // Duración de la clase en minutos
            $table->string('tipo_clase', 100); // Tipo de clase (ej. yoga, spinning, etc.)

    // Claves foráneas para relacionar con cliente e instructor
            $table->unsignedBigInteger('cliente_id'); // Relacionar cliente
            // Definición de las relaciones
            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')
            ->onDelete('cascade');

            $table->unsignedBigInteger('instructor_id'); // Relacionar instructor
            // Definición de las relaciones
            $table->foreign('instructor_id')
            ->references('id')
            ->on('instructores')
            ->onDelete('cascade');

            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
