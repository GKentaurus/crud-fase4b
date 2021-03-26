
<div class="container">
<nav class="blue darken-4">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo"><div class="hide-on-med-and-down">Taller mecánico SENA</div> <div class="hide-on-large-only">Taller</div> </a>
      <a href="/" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a aria-current="page" href="/">Inicio</a>
        </li>
        <li>
          <a class="dropdown-trigger" data-target="dropdown_cliente">
            Clientes
            <i class="material-icons right">arrow_drop_down</i>
          </a>
          <ul id="dropdown_cliente" class="dropdown-content">
            <li><a class="dropdown-item" href="{{ route('customer.create') }}">Registrar</a></li>
            <li><a class="dropdown-item" href=" {{ route('customer.index') }}">Listado</a></li>
          </ul>
        </li>
        <li>
          <a class="dropdown-trigger" data-target="dropdown_empleado">
            Empleados
            <i class="material-icons right">arrow_drop_down</i>
          </a>
          <ul id="dropdown_empleado" class="dropdown-content">
            <li><a class="dropdown-item" href="{{ route('employee.create') }}">Registrar</a></li>
            <li><a class="dropdown-item" href=" {{ route('employee.index') }}">Listado</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('vehicule.index') }}">Vehículos</a>
        </li>
        <li>
          <a href="{{ route('job.index') }}">Trabajos</a>
        </li>
        <li>
          <a href="{{ route('bill.index') }}">Facturas</a>
        </li>
    </ul>
  </div>
</nav>
</div>

<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown();
    $('select').formSelect();
  });
</script>

<ul class="sidenav" id="mobile-demo">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="https://img5.goodfon.com/wallpaper/nbig/0/b6/sinii-seryi-metallik-material-design-linii-background.jpg">
      </div>
      <a href="#user"><img class="circle" src="http://pm1.narvii.com/6875/a7255b42395f1245df50467ebafa79cf1fab8af7r1-1200-1174v2_00.jpg"></a>
      <a href="#"><span class="white-text">Taller mecánico SENA</span></a>
    </div>
  </li>
  <li>
    <a aria-current="page" href="/"><i class="fas fa-home"></i> Inicio</a>
  </li>
  <ul class="collapsible">
    <li>
      <a class="collapsible-header">
        <i class="fas fa-user-circle"></i> Clientes <i class="material-icons right">arrow_drop_down</i>
      </a>
      <div class="collapsible-body">
        <ul>
          <li><a href="{{ route('customer.create') }}">Registrar</a></li>
          <li><a href=" {{ route('customer.index') }}">Listado</a></li>
        </ul>
      </div>
    </li>
    <li>
      <a class="collapsible-header">
        <i class="fas fa-id-card-alt"></i> Empleados <i class="material-icons right">arrow_drop_down</i>
      </a>
      <div class="collapsible-body">
        <ul>
          <li><a href="{{ route('employee.create') }}">Registrar</a></li>
          <li><a href=" {{ route('employee.index') }}">Listado</a></li>
        </ul>
      </div>
    </li>
  </ul>
  <li>
    <a href="{{ route('vehicule.index') }}"><i class="fas fa-car"></i> Vehículos</a>
  </li>
  <li>
    <a href="{{ route('job.index') }}"><i class="fas fa-tools"></i> Trabajos</a>
  </li>
  <li>
    <a href="{{ route('bill.index') }}"><i class="fas fa-file-invoice-dollar"></i> Facturas</a>
  </li>
</ul>
<br>