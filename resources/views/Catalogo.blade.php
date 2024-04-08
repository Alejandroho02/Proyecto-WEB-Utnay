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
                    <li>                        
                        <a class="nav-link" href="/acercade">Acerca De</a>
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
                <li class="breadcrumb-item active" aria-current="page">Catalogo</li>
            </ol>
        </nav>
    </div>
@endsection

@section('Content')
   <!-- Encabezado llamativo -->
   <div class="container section-heading">
        <div class="text-center">
            <h1>Descubre nuestros servicios</h1>
            <p>Explora nuestra amplia gama de productos y disfruta de una experiencia única.</p>
        </div>
    </div>

    <!-- Contenido de la página -->
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <!-- Tarjeta de catálogo 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/Catalogo/playstation.png') }}" class="card-img-top" alt="PlayStation">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation</h5>
                        <p class="card-text">Descubre la mejor experiencia de juego con PlayStation. Sumérgete en mundos increíbles y vive aventuras emocionantes. ¡No te pierdas nuestros últimos lanzamientos!</p>
                        <a href="/playstation" class="btn btn-primary btn-custom">Ver más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de catálogo 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/Catalogo/tvyteatro.png') }}" class="card-img-top" alt="TV y Teatro en Casa">
                    <div class="card-body">
                        <h5 class="card-title">TV y Teatro en Casa</h5>
                        <p class="card-text">Disfruta del entretenimiento en la comodidad de tu hogar con nuestra selección de televisores y sistemas de teatro en casa. Vive la experiencia del cine en casa.</p>
                        <a href="/tv_teatro" class="btn btn-primary btn-custom">Ver más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de catálogo 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/Catalogo/camaras.png') }}" class="card-img-top" alt="Cámaras">
                    <div class="card-body">
                        <h5 class="card-title">Cámaras</h5>
                        <p class="card-text">Captura tus momentos más especiales con nuestras cámaras de alta calidad. Desde cámaras compactas hasta cámaras profesionales, tenemos todo lo que necesitas para capturar cada detalle.</p>
                        <a href="/camaras" class="btn btn-primary btn-custom">Ver más</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de catálogo 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/Catalogo/audio.jpg') }}" class="card-img-top" alt="Audio">
                    <div class="card-body">
                        <h5 class="card-title">Audio</h5>
                        <p class="card-text">Sumérgete en un sonido envolvente con nuestros sistemas de audio de alta fidelidad. Desde altavoces portátiles hasta sistemas de sonido para el hogar, descubre la mejor calidad de audio para tu música y películas favoritas.</p>
                        <a href="/audio" class="btn btn-primary btn-custom">Ver más</a>
                    </div>
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


