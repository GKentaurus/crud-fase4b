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
      <h1>Hola k ase</h1>
      <div class="col-4">
        <div class="card" style="width: 18rem;background-color: #ff7800;box-shadow: 4px 4px 8px #606060;">
          <div class="card-body">
            <h5 class="card-title">Trabajos</h5>
            <p class="card-text">
              Pendientes <h5>({{ $openJobs->count()}})</h5>
              Finalizados <h5> </h5>
            </p>
            <a href="#" class="card-link">Ver</a>
          </div>
        </div>
      </div>
      <div class="col-4"></div>
      <div class="col-4"></div>
    </div>
  </div>
{{--  Footer --}}
  @include('templates.footer')
</div>
</body>
</html>
