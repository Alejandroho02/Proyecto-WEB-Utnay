@extends('plantilla')

@section('Navbar')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0,0,0);">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/Sony_logo.png" alt="" style="margin-right: 10px; width: 100px; height: auto;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0"> <!-- Formulario para el campo de búsqueda -->
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="Index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="logo" class="logo"></a>
          
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
                      <ul class="navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endif
                        @endif
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
                        </ul>
                    </div>
                </div>
            </div>
          </nav>
@endsection