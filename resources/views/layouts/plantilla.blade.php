<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="{{asset('Assets/Home/Logogym.jpg')}}" type="Assets/Home/jpg">
    <link rel="stylesheet" href={{asset("css/styles.css") }} />
    <link rel="stylesheet" href={{asset('css/estilos-tablas.css')}}>  
    <link rel="stylesheet" href={{asset('css/estilos-formularios.css')}}>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Panel de Control</title>
  </head>

  <body>
    <div class="conteiner">
      <div class="topbar">
        <div class="logo">
          <h2>S U G U S</h2>
        </div>
        <div class="search">
          <input type="text" id="search" placeholder="Buscar aqui" />
          <label for="search"> <i class="fas fa-search"></i></label>
        </div>
        <i class="fas fa-bell"></i>
        <div class="user">
          <img src={{asset('Assets/Dashboard/user1.png')}} alt="" />
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>

      <!-- slidebar   -->

      <div class="slidebar">
        <ul>
          <li>
            <a href="#">
              <i class="fas fa-th-large"></i>
              <div href="{{route('dashboard')}}">Dashboard</div>
            </a>
          </li>

          <!-- Sección de Clientes con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-users"></i>
              <div>Clientes</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('clientes.index')}}">Gestionar Clientes</a></li>
              <li><a href="#agregar-clientes">Agregar Clientes</a></li>
            </ul>
          </li>

          <!-- Sección de Usuarios con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-user"></i>
              <div>Usuarios</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#gestionar-usuarios">Gestionar Usuarios</a></li>
              <li><a href="#agregar-usuarios">Agregar Usuarios</a></li>
            </ul>
          </li>

          <!-- Sección de Instructores con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-chalkboard-teacher"></i>
              <div>Instructores</div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#gestionar-instructores">Gestionar Instructores</a>
              </li>
              <li><a href="#agregar-instructores">Agregar Instructores</a></li>
            </ul>
          </li>

          <!-- Sección de Inventario con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-warehouse"></i>
              <div>Inventario</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#gestionar-inventario">Gestionar Inventario</a></li>
              <li><a href="#agregar-inventario">Agregar Inventario</a></li>
            </ul>
          </li>

          <!-- Sección de Proveedor con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-truck"></i>
              <div>Proveedores</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('proveedores.index')}}">Gestionar Proveedores</a></li>
              @can('proveedores.create')
              <li><a href="{{route('proveedores.create')}}">Agregar Proveedor</a></li>
              @endcan
            </ul>
          </li>

          <!-- Sección de Análisis con submenú -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-chart-bar"></i>
              <div>Análisis</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#reporte-clientes">Reporte de Clientes</a></li>
              <li><a href="#reporte-usuarios">Reporte de Usuarios</a></li>
              <li>
                <a href="#reporte-instructores">Reporte de Instructores</a>
              </li>
              <li><a href="#reporte-inventario">Reporte de Inventario</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle">
              <i class="fas fa-cog"></i>
              <div>Configuración</div>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('profile.edit')}}">Perfil</a></li>
              <li>
                <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="Salir del Sistema" class="logout-link">
            </form>
              </li>
            </ul>
          </li>

          <li>
            <a href="#">
              <i class="fas fa-question"></i>
              <div>Ayuda</div>
            </a>
          </li>
        </ul>
      </div>

      <div class="main">
        <!-- AQUI SE COLOCA TODOS LOS ELEMENTOS CAMBIANTES -->
        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script src="{{asset('js/chart1.js')}}"></script>
    <script src="{{asset('js/chart2.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
