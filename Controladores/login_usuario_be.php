<?php
  
  session_start();

  include '../config/conexion.php';

  $conexion = Conexion::getConnetion();

  $correo = $_POST['correo'];
  $clave = $_POST['clave'];

  $validar_login = $conexion->query ("SELECT * FROM usuarios WHERE correo='$correo' 
  and clave='$clave'");
  
  if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../secciones/catalogoProductosBusqueda.php");
    exit();

  } else {
    echo '
     <script>
      alert ("Usuario no encontrado, verifica los datos");
      window.location = "index.php";
     </script>
    ';
    exit();
  }

?>