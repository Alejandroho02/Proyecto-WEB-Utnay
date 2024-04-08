<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    // Validación del nombre
    if (empty($_POST["nombre"])) {
        $errors[] = "El nombre es requerido.";
    }

    // Validación del apellido
    if (empty($_POST["apellido"])) {
        $errors[] = "El apellido es requerido.";
    }

    // Validación del correo electrónico
    if (empty($_POST["correo"])) {
        $errors[] = "El correo electrónico es requerido.";
    } elseif (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El formato del correo electrónico es inválido.";
    }

    // Validación del mensaje
    if (empty($_POST["mensaje"])) {
        $errors[] = "El mensaje es requerido.";
    }

    // Si no hay errores, procesa el formulario
    if (empty($errors)) {
        // Procesar el formulario, por ejemplo, guardar en la base de datos o enviar por correo electrónico
        // Aquí puedes agregar tu lógica para procesar el formulario

        // Redirigir a alguna página de éxito
        header("Location: pagina_de_exito.php");
        exit();
    }
}
?>

@extends('plantilla')

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
                            <li><a class="dropdown-item" href="/tv_teatro">Tv y Teatro en casa</a></li>
                            <li><a class="dropdown-item" href="/camaras">Camaras</a></li>
                            <li><a class="dropdown-item" href="/audio">Audio</a></li>
                        </ul>
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
                <li class="breadcrumb-item active" aria-current="page">Contactanos</li>
            </ol>
        </nav>
    </div>
@endsection

@section('Content')
<div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="card">
                    <a href="Index.html">
                        <img src="https://1000marcas.net/wp-content/uploads/2020/01/logo-Sony.png" class="rounded mx-auto d-block"alt="..."style="width: 40%; height: auto;">
                    </a>
                  <div class="card-body">
                    <h2 class="mb-3">Compártenos tu opinión</h2>
                    <form action="{{ route('contactanos.store') }}" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="nombre" style="margin-top: 10px;">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                        @error('nombre')
                        <span class="error">{{ $message }}</span>
                    @enderror
                      </div>
                      <div class="form-group">
                        <label for="nombre" style="margin-top: 10px;">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                        @error('apellido')
                        <span class="error">{{ $message }}</span>
                    @enderror
                      </div>
                      <div class="form-group">
                        <label for="correo" style="margin-top: 10px;">Correo Electrónico</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
                            @error('correo')
                                <span class="error">{{ $message }}</span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="contrasena" style="margin-top: 10px;">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escriba aquí su comentario"></textarea>
                      </div>
                      <br>
                      <input type="submit" id="comentario" class="btn btn-primary" value="Enviar Comentario">
                    </form>
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


