@csrf
<div class="mb-3 col-6">
  <div class="mb-3 col-6">
    <label for="employee_id" class="form-label">Trabajador</label>
    <select class="form-select" aria-label="Default select example" id="employee_id" name="employee_id"
            aria-describedby="employee_id_help">
      @if(!isset($customer))
        <option selected>- Seleccione una opción -</option>
      @endif

      @foreach($employees as $employee)
        <option value="{{$employee['id']}}">{{$employee['firstname']}} {{$employee['lastname']}}</option>
      @endforeach
    </select>
    <div id="employee_id_help" class="form-text">Seleccione un empleado o trabajador</div>

    @error('employee_id')
    <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
    @enderror
  </div>
</div>

<div class="mb-3 col-6">
  <label for="intervened_part" class="form-label">Parte intervenida</label>
  @if(isset($customer))
    <input type="text" class="form-control" id="intervened_part" name="intervened_part"
           aria-describedby="intervened_part_help" value="{{$customer['intervened_part']}}">
  @else
    <input type="text" class="form-control" id="intervened_part" name="intervened_part"
           aria-describedby="intervened_part_help">
  @endif
  <div id="firstname_help" class="form-text">Ingrese su primer y segundo nombre</div>

  @error('intervened_part')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="intervention_description" class="form-label">Descripción del trabajo</label>
  @if(isset($customer))
    <textarea class="form-control" id="intervention_description" name="intervention_description"
              aria-describedby="intervention_description_help">{{$customer['intervention_description']}}</textarea>
  @else
    <textarea class="form-control" id="intervention_description" name="intervention_description"
              aria-describedby="intervention_description_help"></textarea>
  @endif
  <div id="intervention_description_help" class="form-text">Ingrese de forma detallada el trabajo realizado.</div>

  @error('intervention_description')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="part_cost" class="form-label">Costo de la parte intervenida</label>
  @if(isset($customer))
    <input type="text" class="form-control" id="part_cost" name="part_cost"
           aria-describedby="part_cost_help" value="{{$customer['part_cost']}}">
  @else
    <input type="text" class="form-control" id="part_cost" name="part_cost"
           aria-describedby="part_cost_help">
  @endif
  <div id="firstname_help" class="form-text">Si tuvo que reemplazar una parte, indique el costo.</div>

  @error('part_cost')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="workforce_cost" class="form-label">Costo de la mano de obra</label>
  @if(isset($customer))
    <input type="text" class="form-control" id="workforce_cost" name="workforce_cost"
           aria-describedby="workforce_cost_help" value="{{$customer['workforce_cost']}}">
  @else
    <input type="text" class="form-control" id="workforce_cost" name="workforce_cost"
           aria-describedby="workforce_cost_help">
  @endif
  <div id="firstname_help" class="form-text">Ingrese el costo de la mano de obra.</div>

  @error('workforce_cost')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-12">
  <button type="submit" class="btn btn-secondary">Guardar cambios</button>
</div>
