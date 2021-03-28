<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar detalles de OT # {{$job['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Información de la intervención # {{$jobDetail['id']}} de la OT # {{$jobDetail['job_id']}}</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="intervened_part" name="intervened_part" aria-describedby="intervened_part_help" value="{{$jobDetail->employee['firstname'] . ' ' . $jobDetail->employee['lastname']}}" disabled>
        <label for="intervened_part">Empleado que hizo el trabajo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="intervened_part" name="intervened_part" aria-describedby="intervened_part_help" value="{{$jobDetail['intervened_part']}}" disabled>
        <label for="intervened_part">Parte intervenida</label>
      </div>

      <div class="input-field col l6 s12">
        <textarea id="intervention_description" name="intervention_description" class="materialize-textarea" aria-describedby="intervention_description_help" disabled>{{$jobDetail['intervention_description']}}</textarea>
        <label for="intervention_description">Descripción del trabajo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="part_cost" name="part_cost" aria-describedby="part_cost" value="{{$jobDetail['part_cost']}}" disabled>
        <label for="part_cost">Costo de la parte (si hubo cambio)</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="workforce_cost" name="workforce_cost"aria-describedby="workforce_cost_help" value="{{$jobDetail['workforce_cost']}}" disabled>
        <label for="workforce_cost">Costo de la mano de obra</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="total_intervention" name="total_intervention" aria-describedby="total_intervention" value="{{$jobDetail['part_cost'] + $jobDetail['workforce_cost']}}" disabled>
        <label for="total_intervention">Total de la intervención</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="created_at" name="created_at" aria-describedby="created_at" value="{{$jobDetail['created_at']}}" disabled>
        <label for="created_at">Fecha/Hora de creación</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="updated_at" name="updated_at" aria-describedby="updated_at" value="{{$jobDetail['updated_at']}}" disabled>
        <label for="updated_at">Fecha/Hora de actualización</label>
      </div>

    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
