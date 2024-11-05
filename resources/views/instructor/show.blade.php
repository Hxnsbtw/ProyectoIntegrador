@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{$instructor->nombre}}</h2>
                <p> {{$instructor->apellido}}</p>
                <p> {{$instructor->Identificacion}}</p>
                <p> {{$instructor->celular}}</p>
                <p> {{$instructor->correo}}</p>
                <p> {{$instructor->Especializacion}}</p>
            </div>
        </div>
</section>
</div>
@endsection