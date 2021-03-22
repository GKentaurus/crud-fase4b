@csrf

<div class="mb-3 col-6">
  <label for="license_plate" class="form-label">Matrícula</label>
  @if(isset($vehicule))
    <input type="text" class="form-control" id="license_plate" name="license_plate" aria-describedby="license_plate_help" value="{{$vehicule['license_plate']}}">
  @else
    <input type="text" class="form-control" id="license_plate" name="license_plate" aria-describedby="license_plate_help">
  @endif
  <div id="license_plate_help" class="form-text">Ingrese la matricula o placa del vehículo</div>

  @error('license_plate')
  <div class="alert alert-danger p-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="brand" class="form-label">Marca</label>
  @if(isset($vehicule))
    <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brand_help" value="{{$vehicule['brand']}}">
  @else
    <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brand_help">
  @endif
  <div id="brand_help" class="form-text">Ingrese su primer y segundo apellido</div>

  @error('brand')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="model" class="form-label">Modelo</label>
  @if(isset($vehicule))
    <input type="text" class="form-control" id="model" name="model"aria-describedby="model_help" value="{{$vehicule['model']}}">
  @else
    <input type="text" class="form-control" id="model" name="model"aria-describedby="model_help">
  @endif

  <div id="model_help" class="form-text">Ingrese el modelo del vehículo.</div>
  @error('model')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-6">
  <label for="color" class="form-label">Color</label>
  @if(isset($vehicule))
    <input type="text" class="form-control" id="color" name="color"aria-describedby="color_help" value="{{$vehicule['color']}}">
  @else
    <input type="text" class="form-control" id="color" name="color"aria-describedby="color_help">
  @endif

  <div id="color_help" class="form-text">Ingrese color del vehículo.</div>
  @error('color')
  <div class="alert alert-danger pt-0 pb-0">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3 col-2">
  <button type="submit" class="btn btn-secondary">Guardar cambios</button>
</div>
