<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de trabajos</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s6">
      <h2>Listado de trabajos activos</h2> <small>({{ $openJobs->count() }} trabajos pendientes)</small>
      @if(isset($openJobs) && count($openJobs) > 0)
        <table class="table responsive-table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Vehículo</th>
            <th scope="col">Propietario</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($openJobs as $job)
            <tr>
              <th scope="row">{{ $job['id'] }}</th>
              <td>{{ $job->vehicule['license_plate'] }}</td>
              <td>{{ $job->vehicule->customer['firstname'] }} {{ $job->vehicule->customer['lastname'] }}</td>
              <td>
                <a href="{{ route('job.show', $job['id']) }}" class="btn waves-effect waves-light blue darken-1">Ver OT</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      @else
        <div class="alert alert-warning">No hay registros</div>
      @endif
    </div>
    <div class="col s6">
      <h2>Listado de trabajos cerrados</h2><small>({{ $closedJobs->count() }} trabajos cerrados)</small>
      @if(isset($closedJobs) && count($closedJobs) > 0)
        <table class="table responsive-table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Vehículo</th>
            <th scope="col">Propietario</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($closedJobs as $job)
            <tr>
              <th scope="row">{{ $job['id'] }}</th>
              <td>{{ $job->vehicule['license_plate'] }}</td>
              <td>{{ $job->vehicule->customer['firstname'] }} {{ $job->vehicule->customer['lastname'] }}</td>
              <td>
                <a href="{{ route('job.show', $job['id']) }}" class="btn waves-effect waves-light blue darken-1">Ver OT</a>
                <a href="{{ route('job.show', $job['id']) }}" class="btn waves-effect waves-light blue darken-1">Ver Factura</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      @else
        <div class="alert alert-warning">No hay registros</div>
      @endif
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
