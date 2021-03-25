@if(isset($vehicule->jobs) && count($vehicule->jobs) > 0)
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
    @foreach($vehicule->jobs as $job)
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
