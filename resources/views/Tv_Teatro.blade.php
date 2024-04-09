@extends('Plantilla')

@section('Navbar')
<link rel="stylesheet" type="text/css" href="{{asset('css/tv_teatro.css')}}">
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
                    <!-- Menú desplegable de Catalogo -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/catalogo" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/playstation">PlayStation</a></li>
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
                <li class="breadcrumb-item active" aria-current="page">Tv y Teatro en casa</li>
            </ol>
        </nav>
    </div>
@endsection

@section('Content')
   <!-- Aqui van los apartados de cada contenido -->
    <div>
        <div id="Televisores">
            <div>
                <br>
                <p style="font-size: 30px;">Televisores</p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/tele1.png') }}" class="card-img-top" alt="tele1">
                            <div class="card-body">
                                <h5 class="card-title">X90L| BRAVIA XR | Full Array LED | 4K Ultra HD | Smart TV (Google TV)</h5>
                                <p class="card-text">
                                    MODELO XR-75X90L UCM
                                    Pulgadas
                                    FANTASTICO DISEÑO DISCRETO: borde invisible
                                    SONIDO E IMAGEN EN ARMONÍA: Acoustic Multi-Audio™
                                    POTENCIA DE JUEGO: Menú de juego
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $35,900 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/tele2.png') }}" class="card-img-top" alt="tele2">
                            <div class="card-body">
                                <h5 class="card-title">X77L | 4K Ultra HD | Smart TV (Google TV)</h5>
                                <p class="card-text">
                                    MODELO KD-75X77L
                                    72 Pulgadas
                                    TRANSMITE Y COMPARTE: Apple AirPlay 2
                                    GRAVES INTENSOS: X-Balanced Speaker™
                                    TU ENTRETENIMIENTO FAVORITO: Con ayuda de Google
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $20,000 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/tele3.png') }}" class="card-img-top" alt="tele3">
                            <div class="card-body">
                                <h5 class="card-title">A80L| BRAVIA XR | OLED | 4K Ultra HD | Smart TV (Google TV)</h5>                                
                                <p class="card-text">
                                    MODELO XR-55A80L UCM   
                                    55 Pulgadas
                                    MENOS IMPACTO EN EL MEDIOAMBIENTE: Panel Eco
                                    EL SONIDO PROCEDE DIRECTAMENTE DE LA PANTALLA: Acoustic Surface Audio+™
                                    TU JUEGO: Menú de juego
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $30,000 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="p-3 mb-2 bg-info-subtle text-emphasis-info" id="Teatroscasa">
            <div>
                <br>
                <p style="font-size: 30px;">Teatros en casa</p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/sonido1.png') }}" class="card-img-top" alt="sonido1">
                            <div class="card-body">
                                <h5 class="card-title">Barra de sonido de 2.1 canales con potente subwoofer inalámbrico | HT-S400</h5>
                                <p class="card-text">
                                    MODELO HT-S400//C LA9
                                    S-Force PRO Front Surround
                                    Diálogos nítidos con X-Balanced Speaker Unit
                                    Potente subwoofer inalámbrico
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $5.199 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/sonido2.png') }}" class="card-img-top" alt="sonido2">
                            <div class="card-body">
                                <h5 class="card-title">Sistema de cine en casa con tecnología 360 Spatial Sound Mapping y Dolby Atmos®/DTS:X® | HT-A9</h5>
                                <p class="card-text">
                                    MODELO HT-A9//M LA9
                                    Tecnología 360 Spatial Sound Mapping con hasta 12 altavoces virtuales
                                    La extensa área de escucha inunda de sonido toda la habitación
                                    El campo sonoro optimizado y la conexión inalámbrica ofrecen un diseño flexible con un ajuste de sonido ideal
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $28,999 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/sonido3.png') }}" class="card-img-top" alt="sonido3">
                            <div class="card-body">
                                <h5 class="card-title">Sistema de Teatro en Casa de 5.1 canales con bocinas traseras inalámbricas | HT-S40R</h5>
                                <p class="card-text">
                                    MODELO HT-S40R//Z LA9
                                    Potencia de salida total de 600 W
                                    Auténtico sonido surround de 5.1 canales
                                    Bocinas traseras inalámbricas
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $7,499 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div id="Bluray">
            <div>
                <br>
                <p style="font-size: 30px;">Reproductores de Blu-ray disc y DVD</p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/dvd1.png') }}" class="card-img-top" alt="dvd1">
                            <div class="card-body">
                                <h5 class="card-title">Reproductor de Blu-ray Disc con mejora 4K</h5>
                                <p class="card-text">
                                    MODELO BDP-S6700/BME32
                                    Mejora 4K (24p)
                                    Audio inalámbrico de alta calidad con LDAC™
                                    Disfruta de una gran variedad de servicios de música y video
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $4,799 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/dvd2.png') }}" class="card-img-top" alt="dvd2">
                            <div class="card-body">
                                <h5 class="card-title">Reproductor de Blu-ray™ 4K Ultra HD | UBP-X700 con High-Resolution Audio</h5>
                                <p class="card-text">
                                    MODELO UBP-X700/BM E32
                                    Reproduce discos Blu-ray™ 4K Ultra HD
                                    Disfruta de la música en High-Resolution Audio desde cualquier fuente
                                    Amplia cobertura de servicios de transmisión de música y video
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $5,899 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('Img/tv_treatro/dvd3.png') }}" class="card-img-top" alt="dvd3">
                            <div class="card-body">
                                <h5 class="card-title">Reproductor de Blu-ray Disc™ con super Wi-Fi®</h5>
                                <p class="card-text">
                                    MODELO 
                                    Full HD 1080p
                                    Transmisión rápida con super Wi-Fi®
                                    Duplica el smartphone o tablet en TV
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $3,499 pesos</button>
                                </div>
                            </div>
                        </div>
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


