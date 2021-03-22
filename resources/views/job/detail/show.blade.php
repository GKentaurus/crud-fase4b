<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar detalles de OT # {{$job['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <h2>Información de la intervención # {{$jobDetail['id']}} de la OT # {{$jobDetail['job_id']}}</h2>
      <div class="mb-3">
        <label for="intervened_part" class="form-label">Parte intervenida</label>
        <input type="text" class="form-control" id="intervened_part" name="intervened_part" aria-describedby="intervened_part_help" value="{{$jobDetail['intervened_part']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="intervention_description" class="form-label">Descripción del trabajo</label>
        <textarea class="form-control" id="intervention_description" name="intervention_description" aria-describedby="intervention_description_help" disabled>{{$jobDetail['intervention_description']}}</textarea>
      </div>

      <div class="mb-3">
        <label for="part_cost" class="form-label">Costo de la parte (si hubo cambio)</label>
        <input type="number" class="form-control" id="part_cost" name="part_cost" aria-describedby="part_cost" value="{{$jobDetail['part_cost']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="workforce_cost" class="form-label">Costo de la mano de obra</label>
        <input type="number" class="form-control" id="workforce_cost" name="workforce_cost"aria-describedby="workforce_cost_help" value="{{$jobDetail['workforce_cost']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="total_intervention" class="form-label">Total de la intervención</label>
        <input type="number" class="form-control" id="total_intervention" name="total_intervention" aria-describedby="total_intervention" value="{{$jobDetail['part_cost'] + $jobDetail['workforce_cost']}}" disabled>
      </div>

    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
