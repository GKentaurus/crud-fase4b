<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar factura # {{$bill['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col l12 cont">
      <h3>Información de la factura</h3>
      <h3>Información del cliente</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="customer_information" name="customer_information"
               aria-describedby="customer_information_help"
               value="{{$customer['firstname']}} {{$customer['lastname']}}"
               disabled>
        <label for="customer_information">Propietario del vehículo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="customer_information" name="customer_information"
               aria-describedby="customer_information_help"
               value="{{$customer['document_type']}} {{$customer['document_number']}}"
               disabled>
        <label for="customer_information">Identificación del propietario</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="customer_information" name="customer_information"
               aria-describedby="customer_information_help"
               value="{{$customer['address']}}"
               disabled>
        <label for="customer_information">Dirección de facturación</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="customer_information" name="customer_information"
               aria-describedby="customer_information_help"
               value="{{$customer['phone_number']}}"
               disabled>
        <label for="customer_information">Número telefónico</label>
      </div>
    </div>
    <div class="col l12 cont">
      <h3>Información del vehículo</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="vehicule_information" name="vehicule_information"
               aria-describedby="vehicule_information" value="{{$vehicule['license_plate']}}" disabled>
        <label for="vehicule_information">Matrícula del vehículo</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="vehicule_information" name="vehicule_information"
               aria-describedby="vehicule_information" value="{{$vehicule['brand']}}" disabled>
        <label for="vehicule_information">Marca</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="vehicule_information" name="vehicule_information"
               aria-describedby="vehicule_information" value="{{$vehicule['model']}}" disabled>
        <label for="vehicule_information">Modelo</label>
      </div>

      <div class="input-field col l12">
        <input type="text" id="vehicule_information" name="vehicule_information"
               aria-describedby="vehicule_information" value="{{$vehicule['color']}}" disabled>
        <label for="vehicule_information">Color</label>
      </div>
    </div>
    <div class="col s12">
      <h1>Desglose</h1>
      @foreach($job->jobDetails as $detail)
        <div>OT # {{$detail['job_id']}}</div>
        <div>Detalle de # {{$detail['id']}}</div>
        <div>Mecánico: {{$detail->employee['firstname'] . ' ' . $detail->employee['lastname']}}</div>
        <div>Parte intervenida {{$detail['intervened_part']}}</div>
        <div>Costo de la parte: {{$detail['part_cost']}}</div>
        <div>Mano de obra: {{$detail['workforce_cost']}}</div>
        <div>Subtotal: {{$detail['part_cost'] + $detail['workforce_cost']}}</div>
        <hr>
      @endforeach
    </div>
    <div class="col l12 cont">
      <h3>Totales de la Factura</h3>
      <div class="input-field col l6 s12">
        <input type="text" id="subtotal" name="subtotal" aria-describedby="subtotal_help"
               value="{{$bill['total_cost']}}" disabled>
        <label for="subtotal">Subtotal</label>
      </div>

      <div class="input-field col l6 s12">
        <input type="text" id="tax" name="tax" aria-describedby="tax_help"
               value="{{$bill['total_tax']}}" disabled>
        <label for="tax">Impuestos (IVA 19%)</label>
      </div>

      <div class="input-field col s12">
        <input type="text" id="total" name="total" aria-describedby="total_help"
               value="{{$bill['total_cost'] + $bill['total_tax']}}" disabled>
        <label for="total">Total</label>
      </div>
      <div class="col l12" style="display: contents;">
        <a href="{{ route('customer.show', $customer['id']) }}"
           class="btn btn-small waves-effect waves-light blue darken-1">Ver cliente</a>
        <a href="{{ route('vehicule.show', $vehicule['id']) }}"
           class="btn btn-small waves-effect waves-light blue darken-1">Ver vehículo</a>
        <a href="{{ route('job.show', $bill->job['id']) }}"
           class="btn btn-small waves-effect waves-light blue darken-1">Ver OT</a>
      </div>
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
