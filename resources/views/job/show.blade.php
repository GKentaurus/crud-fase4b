<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar OT # {{$job['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col l5 s12">
      <h3>Información de la Orden de Trabajo</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="license_plate" name="license_plate"
        aria-describedby="license_plate_help" value="{{$job->vehicule['license_plate']}}" disabled>
        <label for="license_plate">Vehículo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="brand" name="brand" aria-describedby="brand_help"
        value="{{$job->vehicule->customer['firstname']}} {{$job->vehicule->customer['lastname']}}" disabled>
        <label for="brand">Propietario</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="model" name="brand" aria-describedby="model"
        value="{{$job['created_at']}}" disabled>
        <label for="model">Fecha de ingreso</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="model" name="brand" aria-describedby="model"
        value="{{$job['updated_at']}}" disabled>
        <label for="model">Última actualización</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="subtotal" name="brand" aria-describedby="subtotal"
        value="{{$totalOT}}" disabled>
        <label for="subtotal">Subtotal de la OT</label>
      </div>
      @if($totalOT > 0 && $job['active_job'])
        <div class="col s12">
          <form method="post" action="{{ route('job.update', $job['id']) }}">
            @csrf
            @method('PUT')
            <button class="btn waves-effect waves-light light-green" type="submit">Finalizar OT</button>
          </form>
        </div>
      @elseif($totalOT == 0 && $job['active_job'])
        <form method="post" action="{{ route('job.destroy', $job['id']) }}">
          @csrf
          @method('DELETE')
          <button class="btn waves-effect waves-light red darken-2" type="submit">Cancelar OT</button>
        </form>
      @elseif(isset($bill))
        <a href="{{ route('bill.show', $bill['id']) }}" class="btn waves-effect waves-light blue darken-1">Ver factura</a>
      @endif

    </div>
    <div class="col l7 s12">
      <div class="col s12">
        <h3>Contenido de la OT</h3>
        @if($job['active_job'])
          <a href="{{ route('job.detail.create', $job['id']) }}" class="btn waves-effect waves-light green">Añadir trabajo</a>
        @endif
        @include('job.detail.index')
      </div>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
