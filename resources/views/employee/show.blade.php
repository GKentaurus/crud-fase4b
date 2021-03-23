<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Información de empleado "{{$employee['firstname']}} {{$employee['lastname']}}"</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-5">
      <h2>Información del empleado</h2>
      <div class="mb-3">
        <label for="firstname" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname_help" value="{{$employee['firstname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="lastname" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname_help" value="{{$employee['lastname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="document_type" class="form-label">Tipo de documento</label>
        <input type="text" class="form-control" id="document_type" name="lastname" aria-describedby="document_type" value="{{$employee['lastname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="document_number" class="form-label">Número de documento</label>
        <input type="number" class="form-control" id="document_number" name="document_number"aria-describedby="document_number_help" value="{{$employee['document_number']}}" disabled>
      </div>
    </div>
    <div class="col-7">
      <div class="mb-2">
        <h2>Trabajos realizados</h2>
      </div>
      @include('employee.job-detail.index')
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
