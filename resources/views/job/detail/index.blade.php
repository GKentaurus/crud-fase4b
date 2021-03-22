@if(isset($job->jobDetails) && count($job->jobDetails) > 0)
  <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Parte</th>
      <th scope="col">Costo total</th>
      <th scope="col">Fecha/Hora</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($job->jobDetails as $detail)
      <tr>
        <th scope="row">{{ $detail['id'] }}</th>
        <td>{{ $detail['intervened_part'] }}</td>
        <td>{{ $detail['part_cost'] + $detail['workforce_cost'] }}</td>
        <td>{{ $detail['created_at'] }}</td>
        <td>
          <a href="{{ route('job.detail.show', [$job['id'], $detail['id']]) }}" class="btn btn-sm btn-primary">Ampliar</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@else
  <div class="alert alert-warning">No hay registros</div>
@endif
