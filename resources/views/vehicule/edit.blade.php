<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Editar vehículo # {{$vehicule['license_plate']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s12">
      <form method="post" action="{{ route('vehicule.update', $vehicule['id']) }}">
        @method('PUT')
        @include('vehicule.form')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
