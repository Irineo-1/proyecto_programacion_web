<?php
require_once '../modelos/FormularioContacto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "tu_correo@ejemplo.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Mensaje enviado exitosamente.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Hubo un problema al enviar el mensaje.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no válido.']);
}
?>