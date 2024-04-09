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
                            <li><a class="dropdown-item" href="/playstation">PlayStation</a></li>
                            <li><a class="dropdown-item" href="/tv_teatro">Tv y Teatro en casa</a></li>
                            <li><a class="dropdown-item" href="/camaras">Camaras</a></li>
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
                    <li class="breadcrumb-item active" aria-current="page">Audio</li>
                </ol>
            </nav>
        </div>
@endsection

@section('Content')
    <!-- Aqui van los apartados de cada contenido -->
    <div>
        <div id="Audifonos">
            <div>
                <br>
                <br><br><br><br>
                <p><h1>Audifonos</h1></p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/audifonos1.png" class="card-img-top" alt="audifonos1">
                            <div class="card-body">
                                <h5 class="card-title">Audífonos True Wireless con El Mejor Noise Cancelling WF-1000XM5</h5>
                                <p class="1h-1 card-text">
                                    MODELO WF-1000XM5/BCUC
                                    Lo mejor en noise cancelling* con dos procesadores de alto rendimiento 
                                    y micrófonos de retroalimentación dual Reducción de ruido ambiental de acuerdo con las investigaciones de Sony Corporation. 
                                    Las mediciones se realizan de conformidad con los estándares JEITA para las 10 principales marcas 
                                    (según cuota de mercado) del mercado de audífonos con noise cancelling de estilo “True Wireless"
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $4,998 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/audifonos2.png" class="card-img-top" alt="audifonos2">
                            <div class="card-body">
                                <h5 class="card-title">Audífonos inalámbricos con noise cancelling WF-C700N</h5>
                                <p class="card-text">
                                    MODELO WF-C700N_SOLA.G
                                    Los audífonos con Noise Cancelling WF-C700N ofrecen sonido cristalino, comodidad y una batería de larga duración para el uso diario. 
                                    Controla el sonido ambiente con 20 niveles o permite que el control de sonido adaptativo lo haga 
                                    automáticamente. Ahora es más fácil que nunca sumergirte en la música.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $1,799 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/audifonos3.png" class="card-img-top" alt="audifonos3">
                            <div class="card-body">
                                <h5 class="card-title">Audífonos inalámbricos WH-CH720N</h5>                                
                                <p class="card-text">
                                    MODELO WH-CH720N/WZUC
                                    Los audífonos inalámbricos con Noise Cancelling WH-CH720N ofrecen una función Noise Cancelling,
                                    una duración de batería de hasta 35 horas, una calidad de sonido de primera, llamadas con claridad
                                    cristalina y una amplia gama de funciones que facilitan el uso. Gracias a la carga rápida, podrás
                                    disfrutar de tu música sin preocuparte de quedarte sin batería.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $2,499 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 mb-2 bg-info-subtle text-emphasis-info" id="Bocinas">
            <div>
                <br>
                <p><h1>Bocinas inalámbricas</h1></p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/bocina1.png" class="card-img-top" alt="bocinas1">
                        <div class="card-body">
                            <h5 class="card-title">Bocina inalámbrica portátil XB100</h5>
                            <p class="card-text">
                                MODELO SRS-XB100/DCLA
                                El altavoz SRS-XB100 proporciona un sonido potente, nítido y envolvente en un cuerpo pequeño,
                                portátil y resistente. A pesar de su tamaño, está repleto de tecnología, como un procesador de
                                difusión de sonido para la distribución del sonido, un radiador pasivo para graves más profundos y un
                                diafragma descentrado para un sonido más nítido incluso a un volumen alto.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">A tan solo $1,399 pesos</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/bocina2.png" class="card-img-top" alt="bocinas2">
                            <div class="card-body">
                                <h5 class="card-title">Bocina inalámbrica para fiestas XV800 de la serie X</h5>
                                <p class="card-text">
                                    MODELO SRS-XV800/BCLA9
                                    Esta potente bocina inalámbrica ofrece un equilibro de funciones para satisfacer tus necesidades de
                                    fiesta y entretenimiento. En las fiestas, podrás disfrutar de su sonido de fiesta omnidireccional, el
                                    karaoke y el control táctil intuitivo; y en casa, TV Sound Booster 
                                    llevará tu entretenimiento a otro nivel.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $9,999 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/bocina3.png" class="card-img-top" alt="Bocinas3">
                            <div class="card-body">
                                <h5 class="card-title">SRS-XV900 Bocinas inalámbricas de alta potencia</h5>
                                <p class="card-text">
                                    MODELO SRS-XV900/BCLA9
                                    El nuevo XV900, con la mayor presión sonora de la gama de 
                                    altavoces inalámbricos de Sony y una
                                    enorme duración de batería de 25 horas, está siempre listo para la fiesta.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $15,000 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Walkman">
            <div>
                <br>
                <p><h1>Walkman</h1></p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/walk1.png" class="card-img-top" alt="walkman1">
                            <div class="card-body">
                                <h5 class="card-title">Walkman® A300 serie A</h5>
                                <p class="card-text">
                                    MODELO NW-A306/BC  UC
                                    Compatible High-Resolution Audio, Con Wi-Fi para descarga y 
                                    transmisión, Memoria integrada de 32 GB y una ranura para tarjetas SD
                                    Compatible High-Resolution Audio
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $11,249 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/walk2.png" class="card-img-top" alt="walk2">
                            <div class="card-body">
                                <h5 class="card-title">Reproductor multimedia digital Walkman® WM1AM2</h5>
                                <p class="card-text">
                                    MODELO NW-WM1AM2//CLA
                                    El WM1AM2 es un Walkman® de primera que combina una increíble 
                                    calidad de sonido con conectividad Wi-Fi para descarga y streaming.
                                    Compatible con audio de alta resolución y DSD nativo de hasta 11.2 MHz y PCM de hasta 384 kHz/32 bits
                                    Con Wi-Fi para descarga y transmisión
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $19,999 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/walk3.png" class="card-img-top" alt="walk3">
                            <div class="card-body">
                                <h5 class="card-title">Walkman® resistente al agua y al 
                                    polvo con tecnología inalámbrica BLUETOOTH®
                                </h5>
                                <p class="card-text">
                                    MODELO NW-WS623/BM LA
                                    Diseñado para el aire libre, el Walkman® deportivo NW-WS620 es resistente y 
                                    duradero. Perfecto para cualquier terreno, es resistente al agua salada 
                                    y el polvo, además de ser compacto y cómodo de llevar.
                                    Con las tecnologías Bluetooth® y NFC para la transmisión inalámbrica, 
                                    hasta 16 GB de almacenamiento para las listas de reproducción, batería de 
                                    carga rápida y control remoto Bluetooth®, es el compañero de entrenamiento 
                                    definitivo.1El control remoto y la conectividad Bluetooth® no pueden funcionar debajo del agua
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $4,999 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 mb-2 bg-info-subtle text-emphasis-info" id="Grabadora">
            <div>
                <br><br>
                <p><h1>Grabadora de Voz Digital</h1></p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/grabadora1.png" class="card-img-top" alt="grabadora1">
                            <div class="card-body">
                                <h5 class="card-title">Grabadora de voz digital con USB integrado</h5>
                                <p class="1h-1 card-text">
                                    MODELO ICD-PX470//CLA
                                    Graba sonidos y voces con una claridad inmejorable. La ICD-PX470 
                                    incorpora grabación en modo de enfoque y en modo estéreo panorámico 
                                    para que puedas centrarte en la fuente de audio que deseas capturar. 
                                    Gracias al almacenamiento interno de 4 GB, con la posibilidad de 
                                    ampliarlo a 32 GB con la ranura para tarjeta micro SD, podrás grabar durante días.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $1,200 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/grabadora2.png" class="card-img-top" alt="grabadora2">
                            <div class="card-body">
                                <h5 class="card-title">Grabadora digital de voz TX660 de la serie TX</h5>
                                <p class="card-text">
                                    MODELO ICD-TX660//CE
                                    Gracias a su increíble rendimiento y a su estilizado diseño portátil, 
                                    la ICD-TX660 es tan pequeña que cabe en el bolsillo. Además, proporciona 
                                    una calidad de grabación inigualable y cuenta con funciones como salto de tiempo, 
                                    grabación con una sola pulsación y grabación automática de voz.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $2,899 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/grabadora3.png" class="card-img-top" alt="grabadora3">
                            <div class="card-body">
                                <h5 class="card-title">Grabadora digital de voz UX570 de la serie UX</h5>                                
                                <p class="card-text">
                                    MODELO ICD-UX570F SOLA
                                    Gracias a un micrófono de alta sensibilidad, una reproducción sencilla 
                                    y sus más de 159 horas de almacenamiento1159 horas de almacenamiento 
                                    disponible al grabar en formato MP3 a 48 kbps (mono)
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $1,654 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Sistemaaudio">
            <div>
                <br><br>
                <p><h1>Sistema de Audio</h1></p>
                <br>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/sistemaaudio1.png" class="card-img-top" alt="Sistemaaudio1">
                            <div class="card-body">
                                <h5 class="card-title">Sistema de audio de alta potencia V13 con tecnología BLUETOOTH®</h5>
                                <p class="1h-1 card-text">
                                    MODELO MHC-V13//M LA9
                                    Lleva tus fiestas a otro nivel con este potente sistema de sonido compacto. 
                                    Siente el ritmo de tus pistas favoritas con tweeters de alta eficiencia y 
                                    JET BASS BOOSTER. Disfruta de luz de bocina de múltiples colores y personaliza 
                                    tu fiesta con la lista de reproducción de la fiesta y la clasificación de karaoke 
                                    gracias a la aplicación Fiestable. Las asas facilitan el transporte como nunca.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $6,499 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/sistemaaudio2.png" class="card-img-top" alt="sistemaaudio2">
                            <div class="card-body">
                                <h5 class="card-title">Sistema de audio de alta potencia con tecnología BLUETOOTH® V02</h5>
                                <p class="card-text">
                                    MODELO MHC-V02//C LA9
                                    Lleva tus fiestas a otro nivel con este potente sistema de sonido compacto. 
                                    Siente el ritmo de tus canciones preferidas desde largas distancias. Disfruta 
                                    de una luz de bocina que se ilumina al ritmo de la música y controla la reproducción desde tu smartphone.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $4,999 pesos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Audioimg/sistemaaudio3.png" class="card-img-top" alt="sistemaaudio3">
                            <div class="card-body">
                                <h5 class="card-title">Tocadiscos con conectividad BLUETOOTH®</h5>                                
                                <p class="card-text">
                                    MODELO PS-LX310BT/CLA9
                                    Disfruta del cálido sonido del vinilo por toda la casa gracias a la conectividad 
                                    BLUETOOTH® sencilla del PS-LX310BT. La reproducción automática en un solo paso te 
                                    permite pinchar tu música favorita con solo tocar un botón, mientras que el brazo 
                                    tonal con nuevo diseño ofrece una experiencia de escucha más fluida.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button">A tan solo $7,199 pesos</button>
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


