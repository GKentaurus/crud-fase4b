<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Registrar Órden de trabajo nuevo</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <form class="row g-3" method="post" action="{{ route('vehicule.job.store', $vehicule->id) }}">
        <input type="hidden" name="vehicule_id" value="{{$vehicule->id}}">
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
