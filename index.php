<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="secciones/css/bienvenida/bienvenida.css">  
    <link rel="stylesheet" href="./secciones/css/Contactanos/StyleConta.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="secciones/css/catalogoProductos/catalogo_productos.css">
    <link rel="stylesheet" href="secciones/css/quienesSomos/styles.css">
</head>
<body>

    <!-- Inicio bienvenida -->
    <?php include 'secciones/bienvenida.php'; ?>

    <!-- Quiénes somos -->
    <?php include 'secciones/quienesSomos.php'; ?> 

    <!-- Catálogo de productos y servicios -->
    <?php include 'secciones/catalogoProductos.php'; ?>

    <!-- Contáctanos -->
    <?php include 'secciones/contactanos.php'; ?> 

    <script src="secciones/js/clientes/script.js"></script>
    <script type="module" src="secciones/js/catalogoProductos/catalogo_productos.js"></script>
</body>
</html>