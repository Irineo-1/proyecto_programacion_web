<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Contacto</title>
  <link rel="stylesheet" href="./secciones/css/Contactanos/StyleConta.css">
</head>
<body>

<section id="contacto">
  <h2>¡Contáctanos!</h2>
  <p>¿Tienes alguna pregunta o comentario? No dudes en contactarnos.</p>

  <form id="formulario-contacto" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono">

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>
   
    <form action="enviar.php" method=""post>
      <button type="submit">Enviar mensaje</button>
    </form>
  </form>

  <div id="mensajes"></div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./secciones/js/contactanos.js"></script>
</html>
