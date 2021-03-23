<div class="container">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Taller mecánico SENA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Clientes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('customer.create') }}">Registrar</a></li>
                  <li><a class="dropdown-item" href=" {{ route('customer.index') }}">Listado</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Empleados
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('employee.create') }}">Registrar</a></li>
                  <li><a class="dropdown-item" href=" {{ route('employee.index') }}">Listado</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vehicule.index') }}">Vehículos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('job.index') }}">Trabajos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('bill.index') }}">Facturas</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
