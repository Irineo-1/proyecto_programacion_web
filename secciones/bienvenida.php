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
    <div class="main-content">
        <div class="header">
            <img src="https://github.com/Irineo-1/proyecto_programacion_web/blob/bienvenida/secciones/css/bienvenida/Logo%20Pagina.png?raw=true" alt="TecnoParts Logo" class="logo">
            <h1>¡Bienvenido a TecnoParts!</h1>
            <p>Su socio de confianza en piezas tecnológicas.</p>
        </div>
    </div>
    <a href="#" class="scroll-to-top">
        <img src="https://cdn-icons-png.freepik.com/256/8489/8489783.png" alt="Subir">
    </a>
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

