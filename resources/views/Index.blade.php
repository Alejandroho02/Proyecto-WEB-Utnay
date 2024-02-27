@extends('Plantilla')
@section('menu')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="Index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="logo" class="w-25"></a>
  
        <!-- Botón de hamburguesa para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Enlaces principales -->
                <li class="nav-item">
                    <a class="nav-link" href="Acercade.html">Acerca de</a>
                </li>
                  <!-- Menú desplegable de Catálogo -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="Catalogo.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Catalogo 
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="Playstation.html">PlayStation</a></li>
                          <li><a class="dropdown-item" href="Tv_Teatro.html">Tv y Teatro en casa</a></li>
                          <li><a class="dropdown-item" href="Camaras.html">Camaras</a></li>
                          <li><a class="dropdown-item" href="Audio.html">Audio</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Contactanos.html">Contactanos</a>
                  </li>
              </ul>
  
            <!-- Barra de búsqueda y Enlace de Inicio de Sesión -->
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" style="width: 300px;">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.html">Inicio de sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </nav>
  @endsection
  @section('contenido')
  <div class="Carrusel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Carruselindex/Captura de pantalla 2024-02-11 102004.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Carruselindex/images (1).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Img/Teamimg.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
  @endsection