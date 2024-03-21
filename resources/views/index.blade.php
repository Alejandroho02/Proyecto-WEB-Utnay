@extends('plantilla')

@section('Navbar')
    <div class="container navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/Sony_logo.png') }}" alt="Sony Logo" class="logo">
                </a>

                <!-- Botón de hamburguesa para pantallas pequeñas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menú de navegación -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Enlaces principales -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/acercade') }}">Acerca de</a>
                        </li>
                        <!-- Menú desplegable de Catálogo -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/playstation') }}">PlayStation</a></li>
                                <li><a class="dropdown-item" href="{{ url('/tv_teatro') }}">TV y Teatro en Casa</a></li>
                                <li><a class="dropdown-item" href="{{ url('/camaras') }}">Cámaras</a></li>
                                <li><a class="dropdown-item" href="{{ url('/audio') }}">Audio</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contactanos') }}">Contáctanos</a>
                        </li>
                    </ul>

                    <!-- Barra de búsqueda y Enlace de Inicio de Sesión -->
                    <form class="d-flex navbar-search-form">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    
                    <!-- Enlace de Inicio de Sesión -->
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                                    </li>
                                @endif
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('Carrusel')
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

@section('Content')
<p class="h2 text-center">Nuestra seleccion para ti</p><br>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="Carruselindex/82cf1284-2a54-4c63-b3c7-a216c6f4c19f___76fa68f3e45095f74cfda5a530d3397b.webp" alt="" class="card-img-top w-40">
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="Carruselindex/img4.webp" alt="" class="card-img-top w-40 h-80" >
      </div>
    </div>
  </div>
</div>
@endsection

@section('Footer')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Enlaces rápidos</h5>
                <ul class="footer-links">
                    <li><a href="Index.html">Inicio</a></li>
                    <li><a href="Catalogo.html">Catalogo</a></li>
                    <li><a href="Acercade.html">Acerca de nosotros</a></li>
                </ul>
            </div>
            <div class="col-md-3">
              <h5>Noticias e Información</h5>
              <ul class="footer-links">
                  <li><a href="http://www.sony-latin.com/corporate/SOLA/acerca/centrodeprensa/comunicados.html">Centro de prensa</a></li>
                  <li><a href="https://www.sony.com.mx/corporate/MX/legal/derechosreservados.html">Derechos reservados</a></li>
                  <li><a href="https://www.sony.com.mx/corporate/MX/legal/avisodeprivacidad.ht">Politicas de privacidad</a></li>
                </ul>
          </div>
          <div class="col-md-3">
            <h5>Comunidad</h5>
            <ul class="footer-links">
                <li><a href="http://blog.latam.playstation.com/?smcid=gwo">Blog Playstation</a></li>
                <li><a href="https://www.facebook.com/comunidadalpha/">Comunidad Alpha</a></li>
                <li><a href="http://community.sony.com/?profile.language=es&XID=M:gwt:footer">Ayuda con mi producto</a></li>
            </ul>
        </div>
            <div class="col-md-3">    
              <a href="Contactanos.html" class="btn btn-outline-dark btn-lg text-white border-white">Comparte tu opinión</a>
              <div class="footer-social-icons"><br>
                <a href="https://www.facebook.com/Sony" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/Sony" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/sony" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
        </div>
    </div>
    <hr class="mt-4" style="border-top: 1px solid white;">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="Logo" class="footer-logo">
            </div>
            <div class="col-md-6 text-end">
                <p>© 2024 Sony. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
@endsection