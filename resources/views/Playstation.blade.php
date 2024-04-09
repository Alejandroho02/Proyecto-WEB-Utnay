@extends('Plantilla')

@section('Navbar')
<link rel="stylesheet" type="text/css" href="{{asset('css/tv_teatro.css')}}">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/"><img style="width: 50%; height: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="logo" class="logo"></a>   
            <!-- Botón de hamburguesa para pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Enlaces principales -->
                    <li>                        
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li>                        
                        <a class="nav-link" href="/acercade">Acerca De</a>
                    </li>
                    <!-- Menú desplegable de Catalogo -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/catalogo" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/tv_teatro">Tv y Teatro en casa</a></li>
                            <li><a class="dropdown-item" href="/camaras">Camaras</a></li>
                            <li><a class="dropdown-item" href="/audio">Audio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactanos">Contactanos</a>
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
                    </ul>
                </div>
            </div>
        </div>
    </nav>
            <!-- Breadcrumbs -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/catalogo" class="breadcrumb-link">Catalogo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Playstation</li>
            </ol>
        </nav>
    </div>
@endsection

@section('Content')
<style>
    /* Estilos personalizados aquí */
    .playstation-section {
      padding: 50px 0;
      background-color: #f3f3f3;
    }
    .playstation-container {
      max-width: 1200px;
      margin: auto;
    }
    .playstation-title {
      text-align: center;
      margin-bottom: 50px;
    }
    .playstation-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease-in-out;
    }
    .playstation-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .playstation-card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .playstation-card-body {
      padding: 20px;
    }
    .playstation-card-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .playstation-card-text {
      font-size: 16px;
      color: #555;
    }
    .playstation-card-price {
      font-size: 18px;
      font-weight: bold;
      color: #007bff;
      cursor: pointer;
      text-decoration: none; /* Eliminar subrayado */
    }
    .playstation-card:hover .playstation-card-price {
      text-decoration: none; /* Eliminar subrayado en hover */
    }
  </style>
<section class="playstation-section">
  <div class="container playstation-container">
    <h2 class="playstation-title">PlayStation</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="playstation-card">
          <a href="producto1.html">
            <img src="img/p5.jpg" class="card-img-top" alt="...">
            <div class="playstation-card-body">
              <h5 class="playstation-card-title">PlayStation 5</h5>
              <p class="playstation-card-text">Descubre la nueva generación de consolas PlayStation 5. Juega como nunca antes con gráficos impresionantes y carga ultrarrápida.</p>
              <p class="playstation-card-price">$499.99</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="playstation-card">
          <a href="producto2.html">
            <img src="https://blog.latam.playstation.com/tachyon/sites/3/2022/05/a1bf34eb098b3b29e0ae4d436db7cf25449f4276.jpg?resize=1088%2C612&crop_strategy=smart" class="card-img-top" alt="...">
            <div class="playstation-card-body">
              <h5 class="playstation-card-title">PlayStation Plus</h5>
              <p class="playstation-card-text">Disfruta de juegos gratuitos, descuentos exclusivos y más con PlayStation Plus, la suscripción premium de PlayStation.</p>
              <p class="playstation-card-price">$59.99/año</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="playstation-card">
          <a href="producto3.html">
            <img src="img/accesorios.jpg" class="card-img-top" alt="...">
            <div class="playstation-card-body">
              <h5 class="playstation-card-title">Accesorios</h5>
              <p class="playstation-card-text">Encuentra los mejores accesorios para tu consola PlayStation, incluyendo mandos, auriculares, y más.</p>
              <p class="playstation-card-price">Desde $19.99</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('Footer')
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Enlaces rápidos</h5>
                <ul class="footer-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/catalogo">Catalogo</a></li>
                    <li><a href="/acercade">Acerca de nosotros</a></li>
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
              <a href="/contactanos" class="btn btn-outline-dark btn-lg text-white border-white">Comparte tu opinión</a>
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


