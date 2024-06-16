<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


if (empty($nombre) || empty($correo) || empty($asunto) || empty($mensaje)) {
  echo "Error: Todos los campos son obligatorios.";
  exit;
}

$destinatario = "tucorreo@ejemplo.com"; 
$asuntoEmail = "Contacto web - " . $asunto;
$cuerpoEmail = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje:\n$mensaje";
$cabecerasEmail = "From: $nombre <$correo>";

if (mail($destinatario, $asuntoEmail, $cuerpoEmail, $cabecerasEmail)) {
  echo "Gracias por tu mensaje. Te contactaremos pronto.";
} else {
  echo "Error: No se pudo enviar el mensaje. Inténtalo de nuevo más tarde.";
}

?>
