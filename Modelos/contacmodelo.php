<?php
class FormularioContacto {
    private $nombre;
    private $correo;
    private $telefono;
    private $mensaje;
    private $errores = [];

    public function __construct($nombre, $correo, $telefono, $mensaje) {
        $this->nombre = $this->sanitize($nombre);
        $this->correo = $this->sanitize($correo);
        $this->telefono = $this->sanitize($telefono);
        $this->mensaje = $this->sanitize($mensaje);
    }

    private function sanitize($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    public function validar() {
        if (empty($this->nombre)) {
            $this->errores[] = "El nombre es obligatorio.";
        }
        if (empty($this->correo) || !filter_var($this->correo, FILTER_VALIDATE_EMAIL)) {
            $this->errores[] = "El correo electrónico no es válido.";
        }
        if (empty($this->mensaje)) {
            $this->errores[] = "El mensaje es obligatorio.";
        }
        return empty($this->errores);
    }

    public function getErrores() {
        return $this->errores;
    }

    public function enviarCorreo() {
        $to = "richardpuga17@gmail.com"; 
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $this->nombre\nCorreo: $this->correo\nTeléfono: $this->telefono\nMensaje:\n$this->mensaje";
        $headers = "From: $this->correo";

        return mail($to, $subject, $body, $headers);
    }
}
?>