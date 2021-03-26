<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Control de registro - Taller mecánico "SENA"</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <h1 class="title">Dashboard</h1>
  <div class="row">
    <div class="col l3 s12">
      <a href="{{ route('job.index') }}">
        <div class="card" style="width: 18rem; height: 140px;">
          <div class="card-content white-text">
            <span class="card-title"><i class="fas fa-tools"></i> Trabajos</span>
            <p class="text">
              <span class="cant">{{ $totalOpenJobs}}</span>
              <br>
              Pendientes
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col l3 s12">
      <a href="{{ route('job.index') }}">
        <div class="card" style="width: 18rem; height: 140px;">
          <div class="card-content white-text">
            <span class="card-title"><i class="fas fa-tools"></i> Trabajos</span>
            <p class="text">
              <span class="cant">{{ $totalClosedJobs}}</span>
              <br>
              Finalizados
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col l3 s12">
      <a href="{{ route('vehicule.index') }}">
        <div class="card" style="width: 18rem; height: 140px;">
          <div class="card-content white-text">
            <span class="card-title"><i class="fas fa-car"></i> Vehiculos</span>
            <p class="text">
              <span class="cant">{{ $totalVehicules}}</span>              
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col l3 s12">
      <a href="{{ route('customer.index') }}">
        <div class="card" style="width: 18rem; height: 140px;">
          <div class="card-content white-text">
            <span class="card-title"><i class="fas fa-user-circle"></i> Clientes</span>
            <p class="text">
              <span class="cant">{{ $totalCustomers}}</span>
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col l3 s12">
      <a href="{{ route('customer.index') }}">
        <div class="card" style="width: 18rem; height: 140px;">
          <div class="card-content white-text">
            <span class="card-title"><i class="fas fa-id-card-alt"></i> Empleados</span>
            <p class="text">
              <span class="cant">{{ $totalEmployees}}</span>
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
{{--  Footer --}}
  @include('templates.footer')
</body>
</html>
