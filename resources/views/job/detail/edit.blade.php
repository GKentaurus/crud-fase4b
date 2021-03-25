<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Editar Detalle de OT</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col s12">
      <form method="post" action="{{ route('job.detail.update', [$job['id'], $jobDetail['id']]) }}">
        @include('job.detail.form')
        @method('PUT')
      </form>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
