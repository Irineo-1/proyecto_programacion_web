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
    <div class="content">
        <h1>¡Bienvenido a TecnoParts!</h1>
        <!-- Contenido de la página de bienvenida -->
    </div>
    <a href="#" class="scroll-to-top">
        <img src="arrow-up.png" alt="Subir">
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

