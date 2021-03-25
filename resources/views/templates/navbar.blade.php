<div class="container">
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Taller mecánico SENA</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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

<ul class="sidenav" id="mobile-demo">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#"><span class="white-text">Taller mecánico SENA</span></a>
    </div>
  </li>
  <li>
    <a aria-current="page" href="/">Inicio</a>
  </li>
  <li>
    <div class="collapsible-header">
      Clientes
      <i class="material-icons right">arrow_drop_down</i>
    </div>
    <div class="collapsible-body">
    <li><a class="dropdown-item" href="{{ route('customer.create') }}">Registrar</a></li>
    <li><a class="dropdown-item" href=" {{ route('customer.index') }}">Listado</a></li>
    </div>
  </li>
  <li>
    <div class="collapsible-header">
      Empleados
      <i class="material-icons right">arrow_drop_down</i>
    </div>
    <div class="collapsible-body">
    <li><a class="dropdown-item" href="{{ route('employee.create') }}">Registrar</a></li>
    <li><a class="dropdown-item" href=" {{ route('employee.index') }}">Listado</a></li>
    </div>
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
