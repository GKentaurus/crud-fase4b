<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de clientes</title>
</head>
<body>
@include('templates.navbar')
<div class="container mt-3">
  <div class="row">
    <div class="col s12 tabla">
      <h2><i class="fas fa-user-circle"></i> Listado de clientes</h2>
      @isset($customerName)
        <div class="col s12 alert alert-info">
          El cliente {{$customerName}} ha sido eliminado.
        </div>
      @endisset
      <div class="row">
      @if(isset($customers) && count($customers) > 0)
          @foreach($customers as $customer)
          <div class="col l3 s12">
            <div class="card">
              <div class="card-content" style="background-color: #6a6a6a;">
                <span class="card-title center-align">{{ $customer['firstname'] }} {{ $customer['lastname'] }}</span>
                <div class="center-align" style="height: 70px; margin-bottom: -60px;">
                  <img src="http://pm1.narvii.com/6875/a7255b42395f1245df50467ebafa79cf1fab8af7r1-1200-1174v2_00.jpg" style="width: 70px;" class="circle">
                </div>
              </div>
              <div class="card-content" style="padding: 35px 24px 5px 24px;">
                <ul class="center-align">
                  <li>{{ $customer['document_type'] }} {{ $customer['document_number'] }}</li>
                  <li>{{ $customer['address'] }}</li>
                  <li><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ $customer['phone_number'] }}</li>
                </ul>
              </div>
              <div class="card-action">
                <div class="row">
                  <div class="col xl4 l6 s4">
                    <a href="{{ route('customer.show', $customer['id']) }}">Ver</a>
                  </div>
                  <div class="col xl4 l6 s4">
                    <a href="{{ route('customer.edit', $customer['id']) }}">Editar</a>
                  </div>
                  <div class="col xl4 l6 s4">
                    <form action="{{ route('customer.destroy', $customer['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="delbtn" >Eliminar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      @else
        <div class="alert alert-warning">No hay registros</div>
      @endif
    </div>
  </div>
</div>
@include('templates.footer')
</body>
</html>
