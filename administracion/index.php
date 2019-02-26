<?php
@session_start();
if(!isset($_SESSION['user@metodista'])){
    header("location: /".$config['rutaBase']."/");
}elseif($_SESSION['role'] != 'administradores'){
    header("location: ".$_SESSION['location']);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Metodista</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="administradores" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administradores
        </a>
        <div class="dropdown-menu" aria-labelledby="administradores">
          <a class="dropdown-item" href="#">Agregar un Administrador</a>
          <a class="dropdown-item" href="#">Gestionar Administradores</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="grados" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Grados
        </a>
        <div class="dropdown-menu" aria-labelledby="grados">
          <a class="dropdown-item" href="#">Agregar un grado</a>
          <a class="dropdown-item" href="#">Agregar una sección</a>
          <a class="dropdown-item" href="#">Administrar grados</a>
          <a class="dropdown-item" href="#">Administrar secciones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Ver Notas Por Sección</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="docentes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Docentes
        </a>
        <div class="dropdown-menu" aria-labelledby="docentes">
          <a class="dropdown-item" href="#">Agregar un docente</a>
          <a class="dropdown-item" href="#">Gestionar docentes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Asignar Secciones</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="estudiantes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estudiantes
        </a>
        <div class="dropdown-menu" aria-labelledby="estudiantes">
          <a class="dropdown-item" href="#">Matricular Estudiantes</a>
          <a class="dropdown-item" href="#">Gestionar Estudiantes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Promover Estudiantes</a>
          <a class="dropdown-item" href="#">Ver Notas</a>
          <a class="dropdown-item" href="#">Ver Ficha de Matrícula</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="materias" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Materias
        </a>
        <div class="dropdown-menu" aria-labelledby="materias">
          <a class="dropdown-item" href="#">Agregar una Materia</a>
          <a class="dropdown-item" href="#">Gestionar Materias</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cerrar Sesión</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Ingrese un Carnet" aria-label="Search">
      <button class="btn btn-raised btn-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>