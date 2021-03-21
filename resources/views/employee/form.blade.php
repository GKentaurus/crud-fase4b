@csrf

<div class="mb-3 col-6">
  <label for="firstname" class="form-label">Nombres</label>
  @if(isset($employee))
    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname_help" value="{{$employee['firstname']}}">
  @else
    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname_help">
  @endif
  <div id="firstname_help" class="form-text">Ingrese su primer y segundo nombre</div>

  @error('firstname')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="lastname" class="form-label">Apellidos</label>
  @if(isset($employee))
    <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname_help" value="{{$employee['lastname']}}">
  @else
    <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname_help">
  @endif
  <div id="lastname_help" class="form-text">Ingrese su primer y segundo apellido</div>

  @error('lastname')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="document_type" class="form-label">Tipo de documento</label>
  <select class="form-select" aria-label="Default select example" id="document_type" name="document_type"
          aria-describedby="document_type_help">
    @if(!isset($employee))
      <option selected>- Seleccione una opción -</option>
    @endif

    @if(isset($employee) && $employee['document_type'] == 'C.C.')
      <option value="C.C." selected>C.C. - Cédula de Ciudadanía</option>
    @else
      <option value="C.C.">C.C. - Cédula de Ciudadanía</option>
    @endif

    @if(isset($employee) && $employee['document_type'] == 'C.E.')
      <option value="C.E." selected>C.E. - Cédula de Extranjería</option>
    @else
      <option value="C.E.">C.E. - Cédula de Extranjería</option>
    @endif

    @if(isset($employee) && $employee['document_type'] == 'NIT')
      <option value="NIT" selected>NIT</option>
    @else
      <option value="NIT">NIT</option>
    @endif
  </select>
  <div id="document_type_help" class="form-text">Seleccione su tipo de documento</div>

  @error('document_type')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="document_number" class="form-label">Número de documento</label>
  @if(isset($employee))
    <input type="number" class="form-control" id="document_number" name="document_number"aria-describedby="document_number_help" value="{{$employee['document_number']}}">
  @else
    <input type="number" class="form-control" id="document_number" name="document_number"aria-describedby="document_number_help">
  @endif

  <div id="document_number_help" class="form-text">Ingrese el número de documento, sin guiones ni puntos.</div>
  @error('document_number')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-2">
  <button type="submit" class="btn btn-secondary">Guardar cambios</button>
</div>
