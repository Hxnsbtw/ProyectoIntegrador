@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{ $clases->descripcion }}</h2>
                <p>Fecha: {{ $clases->fecha }}</p>
                <p>Duración: {{ $clases->duracion }}</p>
                <p>Hora de Inicio: {{ $clases->hora_inicio }}</p>
                <p>Tipo de Clase: {{ $clases->tipo_clase }}</p>
                <p>Cliente: {{ $clases->cliente->nombre ?? 'Sin asignar' }}</p>
                <p>Instructor: {{ $clases->instructor->nombre ?? 'Sin asignar' }}</p>
            </div>
        </div>
    </div>
</section>

@endsection