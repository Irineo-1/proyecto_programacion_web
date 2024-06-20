
  <section id="contacto">
    <h2>¡Contáctanos!</h2>
    <p>¿Tienes alguna pregunta o comentario? No dudes en contactarnos.</p>

    <form action="enviar.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono">

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required></textarea>

      <button type="submit">Enviar mensaje</button>
    </form>

    <div id="mensajes"></div>
  </section>
