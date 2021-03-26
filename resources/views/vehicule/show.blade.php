<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar vehículo # {{$vehicule['license_plate']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col l5 s12">
      <h3>Información del Vehiculo</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="license_plate" name="license_plate" aria-describedby="license_plate_help" value="{{$vehicule['license_plate']}}" disabled>
        <label for="license_plate">Placa</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="brand" name="brand" aria-describedby="brand_help" value="{{$vehicule['brand']}}" disabled>
        <label for="brand">Marca</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="model" name="brand" aria-describedby="model" value="{{$vehicule['model']}}" disabled>
        <label for="model">Modelo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="color" name="color" aria-describedby="color_help" value="{{$vehicule['color']}}" disabled>
        <label for="color">Color</label>
      </div>
      <div class="input-field col l6 s12">
        <a href="{{route('customer.show', $vehicule['customer_id'])}}" class="btn btn-primary">Ver propietario</a>
      </div>
    </div>
    <div class="col l7 s12">
      <div class="col s12">
        <h3>Órdenes de trabajo relacionadas</h3>
        <form action="{{ route('vehicule.job.store', $vehicule['id']) }}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-sm btn-success">Crear OT</button>
        </form>
        @include('vehicule.job.index')
      </div>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
