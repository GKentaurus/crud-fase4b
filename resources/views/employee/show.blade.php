<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Información de empleado "{{$employee['firstname']}} {{$employee['lastname']}}"</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col l5 s12">
      <h2>Información del empleado</h2>
      <div class="input-field col l6 s12">
        <input type="text" id="firstname" name="firstname" aria-describedby="firstname_help" value="{{$employee['firstname']}}" disabled>
        <label for="firstname">Nombres</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="lastname" name="lastname" aria-describedby="lastname_help" value="{{$employee['lastname']}}" disabled>
        <label for="lastname">Apellidos</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="document_type" name="lastname" aria-describedby="document_type" value="{{$employee['lastname']}}" disabled>
        <label for="document_type">Tipo de documento</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="document_number" name="document_number"aria-describedby="document_number_help" value="{{$employee['document_number']}}" disabled>
        <label for="document_number">Número de documento</label>
      </div>
    </div>
    <div class="col l7 s12">
      <div class="col s12">
        <h2>Trabajos realizados</h2>
      </div>
      @include('employee.job-detail.index')
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
