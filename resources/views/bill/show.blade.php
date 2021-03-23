<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar factura # {{$bill['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <h2>Información de la Factura</h2>
      <div class="mb-3">
        <label for="vehicule_information" class="form-label">Vehículo intervenido</label>
        <input type="text" class="form-control" id="vehicule_information" name="vehicule_information"
               aria-describedby="vehicule_information" value="{{$vehicule['license_plate']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="customer_information" class="form-label">Propietario del vehículo</label>
        <input type="text" class="form-control" id="customer_information" name="customer_information"
               aria-describedby="customer_information_help"
               value="{{$customer['firstname']}} {{$customer['lastname']}}"
               disabled>
      </div>

      <div class="mb-3">
        <label for="subtotal" class="form-label">Subtotal</label>
        <input type="text" class="form-control" id="subtotal" name="subtotal" aria-describedby="subtotal_help"
               value="{{$bill['total_cost']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="tax" class="form-label">Impuestos (IVA 19%)</label>
        <input type="text" class="form-control" id="tax" name="tax" aria-describedby="tax_help"
               value="{{$bill['total_tax']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="text" class="form-control" id="total" name="total" aria-describedby="total_help"
               value="{{$bill['total_cost'] + $bill['total_tax']}}" disabled>
      </div>
      <div class="mb-3">
        {{--        <a href="{{route('customer.show', $bill['customer_id'])}}" class="btn btn-primary">Ver propietario del vehículo</a>--}}
      </div>
    </div>
    <div class="col-6">
      <h2>Totales de la Factura</h2>
      <div class="mb-3">
        <label for="subtotal" class="form-label">Subtotal</label>
        <input type="text" class="form-control" id="subtotal" name="subtotal" aria-describedby="subtotal_help"
               value="{{$bill['total_cost']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="tax" class="form-label">Impuestos (IVA 19%)</label>
        <input type="text" class="form-control" id="tax" name="tax" aria-describedby="tax_help"
               value="{{$bill['total_tax']}}" disabled>
      </div>

      <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="text" class="form-control" id="total" name="total" aria-describedby="total_help"
               value="{{$bill['total_cost'] + $bill['total_tax']}}" disabled>
      </div>
      <div class="mb-3">
        <a href="{{ route('customer.show', $customer['id']) }}" class="btn btn-info">Ver cliente</a>
        <a href="{{ route('vehicule.show', $vehicule['id']) }}" class="btn btn-info">Ver vehículo</a>
        <a href="{{ route('job.show', $bill->job['id']) }}" class="btn btn-info">Ver OT</a>
      </div>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
