@csrf

<div class="input-field col l6 s12">
  @if(isset($vehicule))
    <input type="text" id="license_plate" name="license_plate" aria-describedby="license_plate_help" value="{{$vehicule['license_plate']}}">
  @else
    <input type="text" id="license_plate" name="license_plate" aria-describedby="license_plate_help">
  @endif
  <label for="license_plate">Matrícula</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese la matricula o placa del vehículo</span>

  @error('license_plate')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($vehicule))
    <input type="text" id="brand" name="brand" aria-describedby="brand_help" value="{{$vehicule['brand']}}">
  @else
    <input type="text" id="brand" name="brand" aria-describedby="brand_help">
  @endif
  <label for="brand">Marca</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese su primer y segundo apellido</span>

  @error('brand')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($vehicule))
    <input type="text" id="model" name="model"aria-describedby="model_help" value="{{$vehicule['model']}}">
  @else
    <input type="text" id="model" name="model"aria-describedby="model_help">
  @endif
  <label for="model">Modelo</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese el modelo del vehículo.</span>

  @error('model')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="input-field col l6 s12">
  @if(isset($vehicule))
    <input type="text" id="color" name="color"aria-describedby="color_help" value="{{$vehicule['color']}}">
  @else
    <input type="text" id="color" name="color"aria-describedby="color_help">
  @endif
  <label for="color">Color</label>
  <span class="helper-text" data-error="wrong" data-success="right">Ingrese color del vehículo.</span>

  @error('color')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-2">
  <button type="submit" class="btn waves-effect waves-light green">Guardar cambios</button>
</div>
