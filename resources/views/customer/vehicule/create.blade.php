<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Registrar vehículo nuevo</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col s12">
      <form method="post" action="{{ route('customer.vehicule.store', $customer['id']) }}">
        @include('vehicule.form')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
