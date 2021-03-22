
@if(isset($customer->vehicules) && count($customer->vehicules) > 0)
  <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Matrícula</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customer->vehicules as $vehicule)
      <tr>
        <th scope="row">{{ $vehicule['id'] }}</th>
        <td>{{ $vehicule['license_plate'] }}</td>
        <td>{{ $vehicule['brand'] }}</td>
        <td>{{ $vehicule['model'] }}</td>
        <td>{{ $vehicule['color'] }}</td>
        <td>
          <form action="{{ route('vehicule.job.store', $vehicule['id']) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-success">Crear OT</button>
          </form>
          <a href="{{ route('vehicule.show', $vehicule['id']) }}" class="btn btn-sm btn-info">Ver</a>
          <a href="{{ route('vehicule.edit', $vehicule['id']) }}" class="btn btn-sm btn-primary">Editar</a>
          <form action="{{ route('vehicule.destroy', $vehicule['id']) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@else
  <div class="alert alert-warning">No hay registros</div>
@endif
