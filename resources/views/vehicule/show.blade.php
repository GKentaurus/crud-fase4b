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
    <div class="col-5">
      <h2>Información del Vehiculo</h2>
      <div class="mb-3">
        <label for="license_plate" class="form-label">Placa</label>
        <input type="text" class="form-control" id="license_plate" name="license_plate" aria-describedby="license_plate_help" value="{{$vehicule['license_plate']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="brand" class="form-label">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brand_help" value="{{$vehicule['brand']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="model" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="model" name="brand" aria-describedby="model" value="{{$vehicule['model']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" name="color" aria-describedby="color_help" value="{{$vehicule['color']}}" disabled>
      </div>
      <div class="mb-3">
        <a href="{{route('customer.show', $vehicule['customer_id'])}}" class="btn btn-primary">Ver propietario del vehículo</a>
      </div>
    </div>
    <div class="col-7">
      <div class="mb-2">
        <h2>Órdenes de trabajo relacionadas</h2>
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
