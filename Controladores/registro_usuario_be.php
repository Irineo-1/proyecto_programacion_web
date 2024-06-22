<?php

 include '../config/conexion.php';
  
  $conexion = Conexion::getConnetion();

  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];

  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
            VALUES ('$nombre_completo', '$correo', '$usuario', '$clave')";

  //Verificar que el correo no se repita en la base de datos
  $verificar_correo = $conexion->query("SELECT * FROM usuarios WHERE correo ='$correo'");
  // $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");
  if(mysqli_num_rows($verificar_correo) > 0){
     echo '
       <script>
         alert("Este correo ya existe, intenta otro diferente");
         window.location = "../clientes.php";
       </script>
     ';
     exit();
  }  

   //Verificar que el username no se repita en la base de datos
   $verificar_usuario = $conexion->query("SELECT * FROM usuarios WHERE usuario ='$usuario' ");
  //  $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' ");
   if(mysqli_num_rows($verificar_usuario) > 0){
      echo '
        <script>
          alert("Este usuario ya existe, intenta otro diferente");
          window.location = "../clientes.php";
        </script>
      ';
      exit();
   } 

  $ejecutar = $conexion->query($query);
  
  if ($ejecutar){
    echo '
       <script>
       alert("usuario almacenado exitosamente");
        window.location = "../clientes.php";
       </script>
    ';
  }else{
    echo '
       <script>
       alert("intentalo de nuevo");
       window.location = "../clientes.php";
       </script>
    ';
  }

 $conexion->close();
?>