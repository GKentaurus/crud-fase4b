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

      <div class="row">
      @if(isset($employees) && count($employees) > 0)
          @foreach($employees as $employee)
          <div class="col l3 s12">
            <div class="card">
              <div class="card-content" style="background-color: #6a6a6a;">
                <span class="card-title center-align">{{ $employee['firstname'] }} {{ $employee['lastname'] }}</span>
                <div class="center-align" style="height: 70px; margin-bottom: -60px;">
                  <img src="http://pm1.narvii.com/6875/a7255b42395f1245df50467ebafa79cf1fab8af7r1-1200-1174v2_00.jpg" style="width: 70px;" class="circle">
                </div>
              </div>
              <div class="card-content" style="padding: 35px 24px 5px 24px;">
                <ul class="center-align">
                  <li>{{ $employee['document_type'] }} {{ $employee['document_number'] }}</li>
                </ul>
              </div>
              <div class="card-action">
                <div class="row">
                  <div class="col xl4 l6 s4">
                    <a href="{{ route('employee.show', $employee['id']) }}">Ver</a>
                  </div>
                  <div class="col xl4 l6 s4">
                    <a href="{{ route('employee.edit', $employee['id']) }}">Editar</a>
                  </div>
                  <div class="col xl4 l6 s4">
                    <form action="{{ route('employee.destroy', $employee['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="delbtn" >Eliminar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      @else
        <div class="alert alert-warning">No hay registros</div>
      @endif
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
