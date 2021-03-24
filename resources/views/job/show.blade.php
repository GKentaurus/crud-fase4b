<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar OT # {{$job['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-5">
      <h2>Información de la Orden de Trabajo</h2>
      <div class="mb-3">
        <label for="license_plate" class="form-label">Vehículo</label>
        <input type="text" class="form-control" id="license_plate" name="license_plate"
               aria-describedby="license_plate_help" value="{{$job->vehicule['license_plate']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="brand" class="form-label">Propietario</label>
        <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brand_help"
               value="{{$job->vehicule->customer['firstname']}} {{$job->vehicule->customer['lastname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="model" class="form-label">Fecha de ingreso</label>
        <input type="text" class="form-control" id="model" name="brand" aria-describedby="model"
               value="{{$job['created_at']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="model" class="form-label">Última actualización</label>
        <input type="text" class="form-control" id="model" name="brand" aria-describedby="model"
               value="{{$job['updated_at']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="subtotal" class="form-label">Subtotal de la OT</label>
        <input type="number" class="form-control" id="subtotal" name="brand" aria-describedby="subtotal"
               value="{{$totalOT}}" disabled>
      </div>
      @if($totalOT > 0 && $job['active_job'])
        <div class="mb-3">
          <form method="post" action="{{ route('job.update', $job['id']) }}">
            @csrf
            @method('PUT')
            <button class="btn btn-success" type="submit">Finalizar OT</button>
          </form>
        </div>
      @elseif($totalOT == 0 && $job['active_job'])
        <form method="post" action="{{ route('job.destroy', $job['id']) }}">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Cancelar OT</button>
        </form>
      @elseif(isset($bill))
        <a href="{{ route('bill.show', $bill['id']) }}" class="btn btn-info">Ver factura</a>
      @endif

    </div>
    <div class="col-7">
      <div class="mb-2">
        <h2>Contenido de la OT</h2>
        @if($job['active_job'])
          <a href="{{ route('job.detail.create', $job['id']) }}" class="btn btn-success">Añadir trabajo</a>
        @endif
        @include('job.detail.index')
      </div>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
