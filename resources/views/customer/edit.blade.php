<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Editar cliente # {{$customer['firstname']}} {{$customer['lastname']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <form class="row g-3" method="post" action="{{ route('customer.update', $customer['id']) }}">
        @method('PUT')
        @include('customer.form')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
