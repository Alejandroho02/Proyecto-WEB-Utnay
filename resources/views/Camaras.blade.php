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
                    <!-- Menú desplegable de Catalogo -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/catalogo" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/playstation">PlayStation</a></li>
                            <li><a class="dropdown-item" href="/tv_teatro">Tv y Teatro en casa</a></li>
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
                <li class="breadcrumb-item active" aria-current="page">Camaras</li>
            </ol>
        </nav>
    </div>
@endsection

@section('Content')
<div class="container">   
        <div class="card-columns mt-3">
    
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/314505/ILCE-7CM2-BQ_GENBA_01_Main_1000x1000px.jpg?v=638331677091530000" class="card-img-top" alt="">
              <h4 class="card-title">Cámara profesional compacta Alpha | Full Frame Mirrorless | 33.0 MP | 4K 60p/50p | ILCE-7C II</h4>
              <p class="card-text"> Sensor de imagen full-frame CMOS retroiluminado de 33.0 MP </p>
              <p class="card-text text-success"> $48,859 </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
          </div>          
    
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/314529/ILCE-7CR-BQ_GENBA_01_Main_1000x1000px.jpg?v=638333225816530000" class="card-img-top" alt="">
              <h4 class="card-title">TiCámara profesional compacta Alpha | Full Frame Mirrorless | 61.0 MP | 4K 60p/50p | ILCE-7CR</h4>
              <p class="card-text">Sensor CMOS Exmor R™ retroiluminado full-frame de 61.0 MP
                El motor de procesamiento avanzado BIONZ XR™ aumenta la velocidad de procesamiento general </p>
                                    <p class="card-text text-success"> $60,029 </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
          </div>          
      
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/313852/c0af6c698d7f4a72a5bb3630564b7e79.jpg?v=638248361523630000" class="card-img-top" alt="">
              <h4 class="card-title">Cámara APS-C a6700 premium con montura E</h4>
              <p class="card-text">Sensor Exmor R™ CMOS APS-C retroiluminado con 26.0 megapíxeles
                El motor de procesamiento avanzado BIONZ XR™ aumenta la velocidad de procesamiento general en hasta 8x
                Unidad de procesamiento con inteligencia artificial para reconocer objetivos de forma más amplia y precisa </p>
                <p class="card-text text-success"> $48,859 </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
          </div>   
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/313057/GENBA_ZV-E1-B_01_Main.jpg?v=638181173465000000" class="card-img-top" alt="">
              <h4 class="card-title">Camara para videoblogs full-frame ZV-E1</h4>
              <p class="card-text">Unidad de procesamiento con inteligencia artificial para reconocer sujetos de forma más amplia y precisa. </p>
              <p class="card-text text-success"> $32,000</p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
          </div> 
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/313699/ILCE-6100Y-1000x1000px-01.jpg?v=638235652737100000" class="card-img-top" alt="">
              <h4 class="card-title">Cámara digital con lente intercambiable para vloggers</h4>
              <p class="card-text">Cámara digital con lente intercambiable para vloggers
                Sensor CMOS Exmor™ APS-C de gran tamaño y 24.2 MP
                Micrófono direccional de 3 cápsulas con paraviento </p>
                <p class="card-text text-success"> $28,000 </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
          </div> 
          <div class="card text-center border-info">
            <div class="card-body">
              <img src="https://mxsonyb2c.vtexassets.com/arquivos/ids/262690-1200-auto?v=637364975173900000&width=1200&height=auto&aspect=true" class="card-img-top" alt="">
              <h4 class="card-title">Cámara compacta full-frame Alpha 7C</h4>
              <p class="card-text">Grabación de películas 4K versátil para creadores
                Sensor de imagen CMOS Exmor R™ full-frame de 24,2 megapíxeles
                El cuerpo de la cámara full-frame con estabilización más pequeño y ligero del mundo </p>
                <p class="card-text text-success"> $50,859 </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
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


