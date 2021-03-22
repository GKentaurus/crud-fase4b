<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de Facturas</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <h1>Listado de Facturas</h1>
      @if(isset($bills) && count($bills) > 0)
        <table class="table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Razón Social</th>
            <th scope="col">Vehículo</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($bills as $bill)
            <tr>
              <th scope="row">{{ $bill['id'] }}</th>
              <td>{{ $bill['Dirigido a'] }}</td>
              <td>{{ $bill['document_type'] }} {{ $bill['document_number'] }}</td>
              <td>{{ $bill['address'] }}</td>
              <td>{{ $bill['phone_number'] }}</td>
              <td>
                <a href="{{ route('customer.show', $bill['id']) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('customer.edit', $bill['id']) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('customer.destroy', $bill['id']) }}" method="POST" class="d-inline">
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
