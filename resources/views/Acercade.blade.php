@extends('Plantilla')

@section('Navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="logo" class="logo"></a>   
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
                    <!-- Menú desplegable de Catalogo -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/catalogo" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/playstation">PlayStation</a></li>
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
    <div class="container mt-3">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Acerca De</li>
          </ol>
      </nav>
  </div>
@endsection

@section('Carrusel')
    <style>
        /* Estilos adicionales */
        #slider-container {
            margin-top: 20px;
        }
      /* Estilos personalizados */
      .texto-centrado {
        text-align: center;
      }
      h2 {
        font-weight: bold;
        font-size: 35px;
      }

    </style>

 
  <h2 class="texto-centrado">Acerca De Sony</h2>
 
    <div id="slider-container" class="container">
        <!-- Carrusel -->
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/PRUEBA SONY.jpg" class="d-block w-100" alt="Silent Hill 2 yei">
                </div>
                <div class="carousel-item">
                    <img src="img/PRUEBA SONYY.jpg" class="d-block w-100" alt="Silent Hill 2 supi">
                </div>
                <div class="carousel-item">
                    <img src="img/prueba sonyyy.jpg" class="d-block w-100" alt="mgs 3 Yyei.jpeg">
                </div>
                <div class="carousel-item">
                   <img src="img/prueba sonyyyy.jpg" class="d-block w-100" alt="mgs 3 yupi.jpg">
               </div>
                <!--  carousel-item  -->
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
@endsection

@section('Content')
    <style>
      /* Estilos personalizados aquí */
      body {
        font-size: 14px; /* Tamaño de fuente más pequeño */
      }
      .news-item {
        margin-left: 20px; /* Alineación más a la derecha */
        margin-top: 2em; /* Margen superior de dos líneas */
        text-align: center;
      }
      .neew{
        margin-left: 20px; /* Alineación más a la derecha */
        margin-top: 2em; /* Margen superior de dos líneas */
        text-align: center;
      }
      .texto-estilizado {
        text-align: center;
        font-size: 13px;
        line-height: 1.5;
        font-family: "Arial", sans-serif;
        margin-top: 30px; /* Ajusta el valor según la cantidad de espacio */
      }
    </style>
    
  <div class="texto-estilizado">
      Sony es una multinacional japonesa fundada en 1946 cuyas principales líneas de negocio son la electrónica de consumo y la producción musical y cinematográfica, aunque provee incluso de servicios financieros y de seguros en Japón y Filipinas.
    </div>
   
 
  <h1 class="neew">Comunicado de prensa</h1>
 
 
  <div class="news-item">
    <p><strong>22 de enero de 2024</strong></p>
    <p>Sony llegó a un acuerdo con World Athletics para el patrocinio</p>
  </div>
 
  <div class="news-item">
    <p><strong>8 de enero de 2024</strong></p>
    <p>Sony Corporation anuncia el desarrollo de un sistema de creación de contenido espacial, equipado con un visor XR de alta calidad y controladores dedicados a la interacción con objetos 3D</p>
  </div>
 
  <div class="news-item">
    <p><strong>8 de noviembre de 2023</strong></p>
    <p>Resultados financieros consolidados del segundo trimestre finalizado el 30 de septiembre de 2023</p>
  </div>
 
  <div class="news-item">
    <p><strong>9 de octubre de 2023</strong></p>
    <p>Sony anuncia el lanzamiento del clasificador de células espectrales FP7000 que admite clasificación de parámetros altos con más de 44 colores</p>
  </div>
 
  <div class="news-item">
    <p><strong>19 de septiembre de 2023</strong></p>
    <p>Sony y KDDI triunfan en la transmisión estable de juegos en 5G SA en condiciones de multitud</p>
  </div>
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


