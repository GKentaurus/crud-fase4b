
@if(isset($customer->vehicules) && count($customer->vehicules) > 0)
  <table class="table responsive-table">
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
          <a href="{{ route('vehicule.show', $vehicule['id']) }}" class="btn waves-effect waves-light blue darken-1">Ver</a>
          <a href="{{ route('vehicule.edit', $vehicule['id']) }}" class="btn waves-effect waves-light amber">Editar</a>
          <form action="{{ route('vehicule.destroy', $vehicule['id']) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn waves-effect waves-light red darken-4">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@else
  <div class="alert alert-warning">No hay registros</div>
@endif
