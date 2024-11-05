@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{$cliente->nombre}}</h2>
                <p> {{$cliente->apellido}}</p>
                <p> {{$cliente->NumeroIdentificacion}}</p>
                <p> {{$cliente->correo}}</p>
                <p> {{$cliente->celular}}</p>
                <p> {{$cliente->peso}}</p>
                <p> {{$cliente->altura}}</p>
                <p> {{$cliente->fecha_ingreso}}</p>
            </div>
        </div>
</section>
</div>
@endsection