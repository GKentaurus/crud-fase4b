@if(isset($employee->jobDetails) && count($employee->jobDetails) > 0)
  <table class="table responsive-table">
    <thead>
    <tr>
      <th scope="col">OT #</th>
      <th scope="col">Detalle #</th>
      <th scope="col">Vehículo</th>
      <th scope="col">Mano de obra</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employee->jobDetails as $jobDetail)
      <tr>
        <th scope="row">{{ $jobDetail->job['id'] }}</th>
        <td>{{ $jobDetail['id'] }}</td>
        <td>{{ $jobDetail->job->vehicule['license_plate'] }}</td>
        <td>{{ $jobDetail['workforce_cost'] }}</td>
        <td>
          <a href="{{ route('job.detail.show', [$jobDetail->job['id'], $jobDetail['id']]) }}" class="btn btn-small waves-effect waves-light blue darken-1">Ver</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@else
  <div class="alert alert-warning">No hay registros</div>
@endif
