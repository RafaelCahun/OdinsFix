<?php

require "conexion.php";

  $nombreusuario = $_POST['nombreusuario'];
  $apellidousuario = $_POST['apellidousuario'];
  $emailusuario = $_POST['emailusuario'];
  $passwordusuario = $_POST['passwordusuario'];
  $telefonousuario = $_POST['telefonousuario'];
  $edadusuario  = $_POST['edadusuario'];
  $direccion = $_POST['direccion'];

  $insertar = "INSERT INTO usuarios (nombreusuario,apellidousuario, emailusuario, passwordusuario,telefonousuario,edadusuario,direccion) VALUES ('$nombreusuario','$apellidousuario','$emailusuario','$passwordusuario','$telefonousuario','$edadusuario','$direccion')";


//validar usuario

$verficar_usuario = mysqli_query($conectar , "SELECT * FROM usuarios WHERE emailusuario = '$emailusuario' ");
 if( mysqli_num_rows($verficar_usuario) > 0 ){
  echo '
  <script>
    alert("USUARIO EXISTENTE");
    location.href="formulario.php";
  </script>

';
exit;
 }

  $query = mysqli_query($conectar, $insertar);

  if($query){
    echo '
      <script>
        alert("REGISTRO EXITOSO");
        location.href="sesion.php";
      </script>
    
    ';
  }
  else{
    echo '
      <script>
        alert("ERROR AL GUARDAR SU REGISTRO");
        location.href="formulario.php";
      </script>
    
    ';
  }


?>