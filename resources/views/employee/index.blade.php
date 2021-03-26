<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de empleados</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s12 tabla">
      <h2><i class="fas fa-id-card-alt"></i> Listado de empleados</h2>
      @isset($employeeName)
        <div class="col s12 alert alert-info">
          El empleado{{$employeeName}} ha sido eliminado.
        </div>
      @endisset

      @if(isset($employees) && count($employees) > 0)
        <table class="table responsive-table">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Documento</th>
            <th scope="col">Acciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($employees as $employee)
            <tr>
              <th scope="row">{{ $employee['id'] }}</th>
              <td>{{ $employee['firstname'] }} {{ $employee['lastname'] }}</td>
              <td>{{ $employee['document_type'] }} {{ $employee['document_number'] }}</td>
              <td>
                <div class="group-button">
                  <a href="{{ route('employee.show', $employee['id']) }}" class="btn btn-small waves-effect waves-light blue darken-1">Ver</a>
                  <a href="{{ route('employee.edit', $employee['id']) }}" class="btn btn-small waves-effect waves-light amber">Editar</a>
                  <form action="{{ route('employee.destroy', $employee['id']) }}" method="POST" class="d-inline">
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
