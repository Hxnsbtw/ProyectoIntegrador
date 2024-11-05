@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
   <h2 class="titulo-tabla">Listado de Clases</h2>
   <table>
       <thead>
           <tr>
               <th>ID</th>
               <th>Descripción</th>
               <th>Fecha</th>
               <th>Duración</th>
               <th>Hora de Inicio</th>
               <th>Tipo de Clase</th>
               <th>Cliente</th>
               <th>Instructor</th>
               <th>Opciones</th>
           </tr>
       </thead>
       <tbody class="tabla-clases">
         @foreach ($clases as $clase)
         <tr>
             <td>{{ $clase->id }}</td>
             <td>{{ $clase->descripcion }}</td>
             <td>{{ $clase->fecha }}</td>
             <td>{{ $clase->duracion }} min</td>
             <td>{{ $clase->hora_inicio }}</td>
             <td>{{ $clase->tipo_clase }}</td>
             <td>
               @if ($clase->cliente)
                  {{ $clase->cliente->nombre }} {{ $clase->cliente->apellido }}
               @else
                  Sin cliente asignado
               @endif
             </td>
             <td>
               @if ($clase->instructor)
                  {{ $clase->instructor->nombre }} {{ $clase->instructor->apellido }}
               @else
                  Sin instructor asignado
               @endif
             </td>
             <td>
              <a href="{{ route('clases.show', [$clase->id]) }}">
                <img src="{{ asset('Assets/view.png') }}" alt="Ver">   
              </a>
              <a href="{{ route('clases.edit', [$clase->id]) }}">
                <img src="{{ asset('Assets/edit.png') }}" alt="Editar">
              </a>
              <a href="{{ route('clases.destroy', [$clase->id]) }}">
                
              </a>
              <form action="{{ route('clases.destroy', $clase->id) }}" method="POST" onsubmit="return confirmarEliminacion()">
                 @csrf
                 @method('DELETE')
                 <input type="image" src="{{ asset('Assets/delete.png') }}" alt="Eliminar">
              </form>
              <script>
                 function confirmarEliminacion() {
                     return confirm('¿Seguro deseas eliminar?');
                 }
              </script>
             </td>
         </tr>
         @endforeach
       </tbody>
   </table>
</section>
@endsection
