
<section id="contacto">
  <h2>¡Contáctanos!</h2>
  
  <form action="enviar.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="asunto">Telefono:</label>
    <input type="text" id="telefono" name="telefono" required>

    <label for="asunto">Asunto:</label>
    <input type="text" id="asunto" name="asunto" required>

    <button type="submit">Enviar mensaje</button>
  </form>
</section>

<style>

#contacto {
  background-color: #f2f2f2;
  padding: 70px 0; 
  text-align: center;
  position: relative;
}

#contacto::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to right, #f2f2f2 0%, #eee 50%, #f2f2f2 100%); 
  transform: skewX(-15deg); 
  z-index: -1;
}

#contacto h2 {
  font-size: 40px; 
  color: #222; 
  margin-bottom: 30px;
}

#contacto p {
  font-size: 18px; 
  line-height: 1.5;
  color: #666;
  margin-bottom: 50px; 
}

#contacto form {
  width: 80%;
  max-width: 700px;
  margin: 0 auto;
  padding: 40px; 
  background-color: #fff; 
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

#contacto label {
  display: block;
  margin-bottom: 10px; 
  font-weight: bold;
  color: #333;
}

#contacto input,
#contacto textarea {
  width: 100%;
  padding: 18px 20px; 
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}

#contacto textarea {
  height: 200px;
  resize: vertical;
}

#contacto button {
  background-color: #e74c3c; 
  color: white;
  padding: 20px 40px; 
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#contacto button:hover {
  background-color: #c0392b; 
}

#contacto .mensaje {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 20px;
  font-size: 16px;
}

#contacto .mensaje.exito {
  background-color: #dff0d8;
  color: #4CAF50;
}

#contacto .mensaje.error {
  background-color: #f2dede;
  color: #993324;
}



</style>

