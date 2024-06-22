<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <link rel="stylesheet" href="secciones/css/bienvenida/bienvenida.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
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
        <a href="#" class="scroll-to-top" onclick="scrollToTop(); return false;">
            <img src="https://cdn-icons-png.freepik.com/256/8489/8489783.png" alt="Subir">
        </a>
    </section>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>
</html>