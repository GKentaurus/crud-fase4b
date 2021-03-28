<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('templates.header')
  <title>Listado de Vehículos</title>
</head>
<body>
@include('templates.navbar')
<div class="container">
  <div class="row">
    <div class="col s12 tabla">
      <h2><i class="fas fa-car"></i> Listado de Vehículos</h2>
      
      <div class="row">
      @if(isset($vehicules) && count($vehicules) > 0)
          
          @foreach($vehicules as $vehicule)
          <div class="col l3 s12">
            <div class="card">
              <div class="card-content" style="background-color: #6a6a6a;">
                <span class="card-title center-align">{{ $vehicule['brand'] }} {{ $vehicule['model'] }}</span>
                <div class="center-align" style="height: 70px; margin-bottom: -60px;">
                  <img src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428" style="width: 70px;" class="circle">
                </div>
              </div>
              <div class="card-content" style="padding: 35px 24px 5px 24px;">
                <ul class="center-align">
                  <li>Placa: {{ $vehicule['license_plate'] }}</li>
                  <li>Color: {{ $vehicule['color'] }}</li>
                </ul>
              </div>
              <div class="card-action">
                <div class="row">
                  <div class="col xl3 l6 s3">
                    <form action="{{ route('vehicule.job.store', $vehicule['id']) }}" method="POST" class="d-inline">
                      @csrf
                      <button type="submit" class="delbtn">Crear OT</button>
                    </form>
                  </div>
                  <div class="col xl2 l6 s3">
                    <a href="{{ route('vehicule.show', $vehicule['id']) }}">Ver</a>
                  </div>
                  <div class="col xl3 l6 s3">
                    <a href="{{ route('vehicule.edit', $vehicule['id']) }}">Editar</a>
                  </div>
                  <div class="col xl3 l6 s3">
                    <form action="{{ route('vehicule.destroy', $vehicule['id']) }}" method="POST" class="d-inline">
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
