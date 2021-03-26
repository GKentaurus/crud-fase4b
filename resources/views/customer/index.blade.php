<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de clientes</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s12 tabla">
      <h2><i class="fas fa-user-circle"></i> Listado de clientes</h2>
      @isset($customerName)
        <div class="col s12 alert alert-info">
          El cliente {{$customerName}} ha sido eliminado.
        </div>
      @endisset

      @if(isset($customers) && count($customers) > 0)
        <table class="table responsive-table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Documento</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($customers as $customer)
            <tr>
              <th scope="row">{{ $customer['id'] }}</th>
              <td>{{ $customer['firstname'] }} {{ $customer['lastname'] }}</td>
              <td>{{ $customer['document_type'] }} {{ $customer['document_number'] }}</td>
              <td>{{ $customer['address'] }}</td>
              <td>{{ $customer['phone_number'] }}</td>
              <td>
                <div class="group-button">
                  <a href="{{ route('customer.show', $customer['id']) }}" class="btn btn-small waves-effect waves-light blue darken-1">Ver</a>
                  <a href="{{ route('customer.edit', $customer['id']) }}" class="btn btn-small waves-effect waves-light amber">Editar</a>
                  <form action="{{ route('customer.destroy', $customer['id']) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-small waves-effect waves-light red darken-4">Eliminar</button>
                  </form>
                </div>
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
