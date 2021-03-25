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
    <div class="col-12 tabla">
      <h1>Listado de clientes</h1>
      @isset($customerName)
        <div class="col-12 alert alert-info">
          El cliente {{$customerName}} ha sido eliminado.
        </div>
      @endisset

      @if(isset($customers) && count($customers) > 0)
        <table class="table">
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
                <a href="{{ route('customer.show', $customer['id']) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('customer.edit', $customer['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('customer.destroy', $customer['id']) }}" method="POST" class="d-inline">
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
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
