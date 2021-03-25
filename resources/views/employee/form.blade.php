@csrf

<div class="input-field col l6 s12">
  @if(isset($employee))
  <input type="text" id="firstname" name="firstname" aria-describedby="firstname_help" value="{{$employee['firstname']}}">
  @else
  <input type="text" id="firstname" name="firstname" aria-describedby="firstname_help">
  @endif
  <label for="firstname">Nombres</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese su primer y segundo nombre</span>
  
  @error('firstname')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($employee))
  <input type="text" id="lastname" name="lastname" aria-describedby="lastname_help" value="{{$employee['lastname']}}">
  @else
  <input type="text" id="lastname" name="lastname" aria-describedby="lastname_help">
  @endif
  <label for="lastname">Apellidos</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese su primer y segundo apellido</span>

  @error('lastname')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  <select aria-label="Default select example" id="document_type" name="document_type"
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
  <label for="document_type">Tipo de documento</label>
  <span class="helper-text" data-error="wrong" data-success="right">Seleccione su tipo de documento</span>
  
  @error('document_type')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($employee))
  <input type="number" id="document_number" name="document_number"aria-describedby="document_number_help" value="{{$employee['document_number']}}">
  @else
  <input type="number" id="document_number" name="document_number"aria-describedby="document_number_help">
  @endif
  <label for="document_number">Número de documento</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese el número de documento, sin guiones ni puntos.</span>

  @error('document_number')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="col l6 s12">
  <button type="submit" class="btn waves-effect waves-light green">Guardar cambios</button>
</div>
