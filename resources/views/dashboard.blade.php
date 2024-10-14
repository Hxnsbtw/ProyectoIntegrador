@extends('layouts.plantilla')

@section('contenido')
    
<div class="cards">
    <div class="card">
      <div class="card-content">
        <div class="number">1217</div>
        <div class="card-name">Clientes</div>
      </div>
      <div class="icon-box">
        <i class="fas fa-users"></i>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="number">42</div>
        <div class="card-name">Instructores</div>
      </div>
      <div class="icon-box">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="number">71</div>
        <div class="card-name">Usuarios</div>
      </div>
      <div class="icon-box">
        <i class="fas fa-user"></i>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="number">$4500</div>
        <div class="card-name">Ganancias</div>
      </div>
      <div class="icon-box">
        <i class="fas fa-dollar-sign"></i>
      </div>
    </div>
  </div>
  <div class="charts">
    <div class="chart">
      <h2>Ganancias (Pasados 12 meses)</h2>
      <div>
        <canvas id="lineChart"></canvas>
      </div>
    </div>
    <div class="chart" id="doughnut-chart">
      <h2>Empleados</h2>
      <div>
        <canvas id="doughnut"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

