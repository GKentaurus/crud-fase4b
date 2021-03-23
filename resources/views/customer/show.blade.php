<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar cliente # {{$customer['firstname']}} {{$customer['lastname']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-4">
      <h2>Información del cliente</h2>
      <div class="mb-3">
        <label for="firstname" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname_help"
               value="{{$customer['firstname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="lastname" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname_help"
               value="{{$customer['lastname']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="document_type" class="form-label">Tipo de documento</label>
        <input type="text" class="form-control" id="document_type" name="lastname" aria-describedby="document_type"
               value="{{$customer['document_type']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="document_number" class="form-label">Número de documento</label>
        <input type="number" class="form-control" id="document_number" name="document_number"
               aria-describedby="document_number_help" value="{{$customer['document_number']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Dirección de facturación</label>
        <input type="text" class="form-control" id="address" name="address" aria-describedby="address_help"
               value="{{$customer['address']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="phone_number" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" id="phone_number" name="phone_number"
               aria-describedby="phone_number_help" value="{{$customer['phone_number']}}" disabled>
      </div>
    </div>
    <div class="col-8">
      <div class="mb-2">
        <h2>Vehículos asociados</h2>
        <a href="{{ route('customer.vehicule.create', $customer['id']) }}" class="btn btn-success">Añadir vehículo</a>
      </div>
      @include('customer.vehicule.index')
      <div class="mb-2">
        <h2>Facturas asociadas</h2>
      </div>
      @include('customer.bill.index')
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
