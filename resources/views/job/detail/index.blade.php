@if(isset($job->jobDetails) && count($job->jobDetails) > 0)
  <table class="table responsive-table">
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
        <td>${{ $detail['part_cost'] + $detail['workforce_cost'] }}</td>
        <td>{{ $detail['created_at'] }}</td>
        <td>
          <div class="group-button">
            <a href="{{ route('job.detail.show', [$job['id'], $detail['id']]) }}"
               class="btn btn-small waves-effect waves-light blue darken-1">Ver</a>
            @if($job['active_job'])
              <a href="{{ route('job.detail.edit', [$job['id'], $detail['id']]) }}"
                 class="btn btn-small waves-effect waves-light amber">Editar</a>
              <form action="{{ route('job.detail.destroy', [$job['id'], $detail['id']]) }}" method="POST"
                    class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-small waves-effect waves-light red darken-4">Eliminar</button>
              </form>
            @endif
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@else
  <div class="alert alert-warning">No hay registros</div>
@endif
