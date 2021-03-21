<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Edición de empleado "{{$employee['firstname']}} {{$employee['lastname']}}"</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <form class="row g-3" method="post" action="{{ route('employees.update', $employee['id']) }}">
        @method('PUT')
        @include('employees.form')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
