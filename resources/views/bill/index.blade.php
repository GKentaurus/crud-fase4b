<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de Facturas</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col s12 tabla">
      <h1>Listado de Facturas</h1>
      @if(isset($bills) && count($bills) > 0)
        <table class="table responsive-table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">OT</th>
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($bills as $bill)
            <tr>
              <th scope="row">{{ $bill['id'] }}</th>
              <td>{{ $bill->customer['firstname'] }} {{ $bill->customer['lastname'] }}</td>
              <td>{{ $bill->job['id'] }}</td>
              <td>{{ $bill['created_at'] }}</td>
              <td>{{ $bill['total_cost'] + $bill['total_tax'] }}</td>
              <td>
                <a href="{{ route('bill.show', $bill['id']) }}" class="btn btn-small waves-effect waves-light blue darken-1">Ver</a>
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
