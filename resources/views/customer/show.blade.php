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
    <div class="col l4 s12">
      <h3>Información del cliente</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="firstname" name="firstname" aria-describedby="firstname_help"
        value="{{$customer['firstname']}}" disabled>
        <label for="firstname">Nombres</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="lastname" name="lastname" aria-describedby="lastname_help"
        value="{{$customer['lastname']}}" disabled>
        <label for="lastname">Apellidos</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="document_type" name="lastname" aria-describedby="document_type"
        value="{{$customer['document_type']}}" disabled>
        <label for="document_type">Tipo de documento</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="number" id="document_number" name="document_number"
        aria-describedby="document_number_help" value="{{$customer['document_number']}}" disabled>
        <label for="document_number">Número de documento</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="address" name="address" aria-describedby="address_help"
        value="{{$customer['address']}}" disabled>
        <label for="address">Dirección de facturación</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="tel" id="phone_number" name="phone_number"
        aria-describedby="phone_number_help" value="{{$customer['phone_number']}}" disabled>
        <label for="phone_number">Teléfono</label>
      </div>
    </div>
    <div class="col l8 s12">
      <div class="col s12">
        <h3>Vehículos asociados</h3>
        <a href="{{ route('customer.vehicule.create', $customer['id']) }}" class="btn waves-effect waves-light green">Añadir vehículo</a>
      </div>
      @include('customer.vehicule.index')
      <div class="col s12">
        <h3>Facturas asociadas</h3>
      </div>
      @include('customer.bill.index')
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
