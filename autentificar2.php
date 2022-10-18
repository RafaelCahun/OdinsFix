<?php
  require "conexion.php";

  $administrador = $_POST['administrador'];
  $password = $_POST['password'];
  $comparar = "SELECT * FROM administrador WHERE administrador='$administrador' AND password ='$password'";

  $resultado = mysqli_query($conectar,$comparar);
  $nombreusuario = mysqli_fetch_assoc($resultado);

  if(mysqli_num_rows($resultado) > 0 ){
    session_start();
    
    $_SESSION['username'] = $administrador;
    $_SESSION['autentificado2'] = "SI";
    $_SESSION['privilegiado'] = "ADMIN";

    // $_SESSION['nombrecompleto'] = $nombreusuario['nombre'];
    header("Location: paneladministrador.php");
  }

  else{

    echo '
      <script>
        alert("USTED NO ES UN ADMINISTRADOR");
        location.href="administrador.php?errorusuario=SI";
      </script>
    
    ';
  }

  mysqli_free_result($resultado);
  mysqli_close($conectar);

?>