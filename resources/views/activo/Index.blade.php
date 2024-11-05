@extends('layouts.plantilla')

@section('contenido')
    
<section class="container-tabla">
   <h2 class="titulo-tabla"> Listado de Activos</h2>
   <table>
       <thead>
           <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Imagen</th>
               <th>Serial</th>
               <th>Estado</th>
               <th>Proveedor</th>
               <th>Opciones</th>
           </tr>
       </thead>
       <tbody class="tabla-productos">
         @foreach ($activos as $activo)
         <tr>                
             <td>{{ $activo->id }}</td>
             <td>{{ $activo->nombre }}</td>
             <td>
               <img src="{{ asset('Assets/' . $activo->imagen) }}" alt="{{ $activo->imagen }}" width="100">
             </td>
             <td>{{ $activo->serial }}</td>
             <td>{{ $activo->estado }}</td>
             <td>
               @if ($activo->proveedor)
                  {{ $activo->proveedor->razon_social }}
               @else
                  Sin proveedor
               @endif
             </td>
             <td>
              <a href="{{ route('activo.show', [$activo->id]) }}">
                <img src={{asset('Assets/view.png')}} alt="">   
              </a>
              <a href="{{ route('activo.edit', [$activo->id]) }}">
                <img src={{asset('Assets/edit.png')}} alt="">
              </a>
              <form action="{{ route('activo.destroy', $activo->id) }}" method="POST" onsubmit="return confirmarEliminacion()">
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
