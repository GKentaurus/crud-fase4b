<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Control de registro - Taller mecánico "SENA"</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  
<div class="row">
    <div class="col-12">
      <h1 class="title">Dashboard</h1>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Trabajos</h5>
            <p class="card-text">
              <span class="cant">{{ $totalOpenJobs}}</span>
              <br>
              Pendientes
            </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Trabajos</h5>
            <p class="card-text">
              <span class="cant">{{ $totalClosedJobs}}</span>
              <br>
              Finalizados
            </p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Trabajos</h5>
            <p class="card-text">
              <span class="cant">{{ $totalVehicules}}</span>
              <br>
              Vehiculos
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
{{--  Footer --}}
  @include('templates.footer')
</div>
</body>
</html>
