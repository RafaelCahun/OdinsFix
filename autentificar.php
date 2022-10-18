<?php
  require "conexion.php";

  $emailusuario = $_POST['emailusuario'];
  $passwordusuario = $_POST['passwordusuario'];
  $comparar = "SELECT * FROM usuarios WHERE emailusuario='$emailusuario' AND passwordusuario='$passwordusuario'";

  $resultado = mysqli_query($conectar,$comparar);
  $nombreusuario = mysqli_fetch_assoc($resultado);

  if(mysqli_num_rows($resultado) > 0 ){
    session_start();
    
    $_SESSION['username'] = $emailusuario;
    $_SESSION['autentificado'] = "SI";
    $_SESSION['privilegiado'] = "USER";

    $_SESSION['nombre'] = $nombreusuario['nombreusuario']." ". $nombreusuario['apellidousuario'];
    $_SESSION['email'] = $nombreusuario['emailusuario'] ;



    header("Location: paneluser.php");
  }

  else{

    echo '
      <script>
        alert("ERROR EN LA AUTENTIFICACIÓN");
        location.href="sesion.php?errorusuario=SI";
      </script>
    
    ';
  }

  mysqli_free_result($resultado);
  mysqli_close($conectar);


?>