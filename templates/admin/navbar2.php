<nav class="navbar navbar-expand-lg navbar-light bg-light navegacion">
  <div class="container-fluid">
    <a class="navbar-brand" target="_blank" href="https://www.bonice.com.mx/">Bonice</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./../../page/admin/inicioad.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Almacen
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./../../page/admin/agregarad2.php?bo2=0">Agregar un Producto</a></li>
            <li><a class="dropdown-item" href="./../../page/admin/actualizarad.php?bo=0">Actualizar o Eliminar Productos</a></li>
            <li><a class="dropdown-item" href="./../../page/admin/catalogoad.php">Mostrar todos los Productos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./../../page/admin/ventasad.php">Historial de Ventas</a></li>
            <li><a class="dropdown-item" href="./../../page/admin/estadisad.php">Estadisticas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Empleados
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./../../page/admin/agread.php?boe2=0">Agregar empleados</a></li>
            <li><a class="dropdown-item" href="./../../page/admin/actuad.php?boe=0">Actualizar o Eliminar Empleado</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex cerrar">
          <a class="nav-link cerrar" href="./../destruir.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
              class="bi bi-door-closed-fill" viewBox="0 0 16 16">
              <path
                d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
            </svg>
            Cerrar
          </a>
      </form>
    </div>
  </div>
</nav>