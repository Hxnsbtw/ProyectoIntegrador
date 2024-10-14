@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{$proveedor->razon_social}}</h2>
                <p> {{$proveedor->NIT}}</p>
                <p> {{$proveedor->contacto}}</p>
            </div>
        
    
        </div>

</section>
 
    
</div>
@endsection