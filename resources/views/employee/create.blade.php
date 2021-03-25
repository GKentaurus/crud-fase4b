<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Registrar cliente nuevo</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s12">
      <form method="post" action="{{ route('employee.store') }}">
      @include('employee.form')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
