@csrf
<div class="input-field col l6 s12">
  <select aria-label="Default select example" id="employee_id" name="employee_id"
          aria-describedby="employee_id_help">
    @if(!isset($employees))
      <option selected>- Seleccione una opción -</option>
    @endif

    @foreach($employees as $employee)
      <option value="{{$employee['id']}}">{{$employee['firstname']}} {{$employee['lastname']}}</option>
    @endforeach
  </select>
  <label for="employee_id">Trabajador</label>
  <span class="helper-text" data-error="wrong" data-success="right">Seleccione un empleado o trabajador</span>

  @error('employee_id')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($jobDetail))
    <input type="text" id="intervened_part" name="intervened_part"
           aria-describedby="intervened_part_help" value="{{$jobDetail['intervened_part']}}">
  @else
    <input type="text" id="intervened_part" name="intervened_part"
           aria-describedby="intervened_part_help">
  @endif
  <label for="intervened_part">Parte intervenida</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese su primer y segundo nombre</span>

  @error('intervened_part')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($jobDetail))
    <textarea id="intervention_description" name="intervention_description"
              aria-describedby="intervention_description_help">{{$jobDetail['intervention_description']}}</textarea>
  @else
    <textarea id="intervention_description" name="intervention_description"
              aria-describedby="intervention_description_help"></textarea>
  @endif
  <label for="intervention_description">Descripción del trabajo</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese de forma detallada el trabajo realizado.</span>

  @error('intervention_description')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($jobDetail))
    <input type="text" id="part_cost" name="part_cost"
           aria-describedby="part_cost_help" value="{{$jobDetail['part_cost']}}">
  @else
    <input type="text" id="part_cost" name="part_cost"
           aria-describedby="part_cost_help">
  @endif
  <label for="part_cost">Costo de la parte intervenida</label>
  <span class="helper-text" data-error="wrong" data-success="right">Si tuvo que reemplazar una parte, indique el costo.</span>

  @error('part_cost')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($jobDetail))
    <input type="text" id="workforce_cost" name="workforce_cost"
           aria-describedby="workforce_cost_help" value="{{$jobDetail['workforce_cost']}}">
  @else
    <input type="text" id="workforce_cost" name="workforce_cost"
           aria-describedby="workforce_cost_help">
  @endif
  <label for="workforce_cost">Costo de la mano de obra</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese el costo de la mano de obra.</span>

  @error('workforce_cost')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-12">
  <button type="submit" class="btn waves-effect waves-light green">Guardar cambios</button>
</div>
