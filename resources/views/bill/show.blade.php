<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Consultar factura # {{$bill['id']}}</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row cont">
    <div class="col l12">
      <h3>Información de la factura # {{$bill['id']}}</h3>
      <div class="col l4 s6">
        <h5>Información del cliente</h5>
          <p class="white-text">
          {{$customer['firstname']}} {{$customer['lastname']}}
          <br>
          {{$customer['document_type']}} {{$customer['document_number']}}
          <br>
          {{$customer['address']}}
          <br>
          {{$customer['phone_number']}}
          </p>
    </div>
    <div class="col l4 s6 offset-l4" style="text-align-last: end;">
      <h5>Información del vehículo</h5>
        <p class="white-text">
          {{$vehicule['brand']}} {{$vehicule['model']}}
          <br>
          {{$vehicule['color']}}
          <br>
          {{$vehicule['license_plate']}}
        </p>
    </div>
    <div class="col s12">
      <table class="striped highlight responsive-table">
        <thead>
          <tr>
            <th>OT #</th>
            <th>Parte intervenida</th>
            <th>Mecánico</th>
            <th>Costo de la parte</th>
            <th>Mano de obra</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          @foreach($job->jobDetails as $detail)
          <tr>
            <td>{{$detail['job_id']}}</td>
            <td>{{$detail['intervened_part']}}</td>
            <td>{{$detail->employee['firstname'] . ' ' . $detail->employee['lastname']}}</td>
            <td>${{$detail['part_cost']}}</td>
            <td>${{$detail['workforce_cost']}}</td>
            <td>${{$detail['part_cost'] + $detail['workforce_cost']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col l4 s12 offset-l8" style="text-align-last: end;">
      <h5>Totales de la Factura</h5>
      <p class="white-text">
        Subtotal: ${{$bill['total_cost']}}
        <br>
        Impuestos (IVA 19%): ${{$bill['total_tax']}}
        <br>
        Total: ${{$bill['total_cost'] + $bill['total_tax']}}
      </p>
    </div>
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
</body>
@include('templates.footer')
</html>
