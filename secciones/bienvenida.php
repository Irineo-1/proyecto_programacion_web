<section>
    <div class="navbar">
        <div class="navbar-left">
            <button onclick="window.location.href='index.php'">Inicio</button>
        </div>
        <div class="navbar-right">
            <button onclick="window.location.href='productos.php'">Productos</button>
            <button onclick="window.location.href='login.php'">Inicio de Sesión</button>
        </div>
    </div>
    <div class="header">
        <img src="logo.png" alt="TecnoParts Logo" class="logo">
        <h1>¡Bienvenido a TecnoParts!</h1>
        <p>Su socio de confianza en piezas tecnológicas.</p>
    </div>
    <div class="main-content">
        <img src="banner.jpg" alt="Banner" class="banner">
        <div class="cta-buttons">
            <button onclick="window.location.href='productos.php'">Ver Productos</button>
            <button onclick="window.location.href='login.php'">Iniciar Sesión</button>
        </div>
    </div>
    <a href="#" class="scroll-to-top">
        <img src="arrow-up.png" alt="Subir">
    </a>
    <footer>
        <p>&copy; 2024 TecnoParts. Todos los derechos reservados.</p>
        <p><a href="privacidad.php">Política de Privacidad</a> | <a href="terminos.php">Términos y Condiciones</a></p>
    </footer>
</section>
<link rel="stylesheet" href="secciones/css/bienvenida/bienvenida.css">

<script>
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.querySelector(".scroll-to-top").classList.add("show");
        } else {
            document.querySelector(".scroll-to-top").classList.remove("show");
        }
    }
</script>

