<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title></title>
</head>
<body>
<header>
        @yield('menu')
</header>
	@yield('contenido')
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Enlaces rápidos</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="Index.html">Inicio</a></li>
                        <li><a href="Catalogo.html">Catalogo</a></li>
                        <li><a href="Acercade.html">Acerca de nosotros</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Noticias e Información</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="http://www.sony-latin.com/corporate/SOLA/acerca/centrodeprensa/comunicados.html">Centro de prensa</a></li>
                        <li><a href="https://www.sony.com.mx/corporate/MX/legal/derechosreservados.html">Derechos reservados</a></li>
                        <li><a href="https://www.sony.com.mx/corporate/MX/legal/avisodeprivacidad.ht">Politicas de privacidad</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Comunidad</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="http://blog.latam.playstation.com/?smcid=gwo">Blog Playstation</a></li>
                        <li><a href="https://www.facebook.com/comunidadalpha/">Comunidad Alpha</a></li>
                        <li><a href="http://community.sony.com/?profile.language=es&XID=M:gwt:footer">Ayuda con mi producto</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <a href="Contactanos.html" class="btn btn-outline-light btn-lg">Comparte tu opinión</a>
                    <div class="footer-social-icons mt-3">
                        <a href="https://www.facebook.com/Sony" target="_blank"><i class="fab fa-facebook-f text-white"></i></a>
                        <a href="https://twitter.com/Sony" target="_blank"><i class="fab fa-twitter text-white"></i></a>
                        <a href="https://www.instagram.com/sony" target="_blank"><i class="fab fa-instagram text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4" style="border-top: 1px solid white;">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sony_logo_%28white%29.svg/1024px-Sony_logo_%28white%29.svg.png" alt="Logo" class="w-25">
                </div>
                <div class="col-md-6 text-end">
                    <p>© 2024 Sony. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>