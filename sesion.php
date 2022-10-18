<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar Sesion</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">

</head>
<body>

<?php

include "header2.php"

?>




<div class="sesion">
   <div class="box-container">
      <h1 class="heading">Iniciar Sesión</h1>
   </div>
   <br>

   <?php
	$errorusuario = isset($_GET["errorusuario"]);	
	if($errorusuario == "SI"){
 		echo '<h3 class="aviso">DATOS INCORRECTOS</h3></font><br>';
	}
?>

   <form action="autentificar.php" method="post">
      <input type="text" placeholder="Correo" class="campos" name="emailusuario"> <br><br>
      <input type="password" placeholder="Contraseña" class="campos" name="passwordusuario"><br><br>

      <input class="btnsesion" type="submit" value="Iniciar sesión"/>
   </form>
   <br><br><br>

   <div class="box-container">
      <h1 class="heading2">¿Aun no estas registrado?</h1>
      <br><br>
      <a class="registrar" href="formulario.php">Registrate</a>
      <br><br><br><br><br><br><br><br>

      <a href="administrador.php" class="logo privi">Usuario Odin´s Fix  <img src="images/telefono-inteligente.png" alt="">  </a>
   </div>
   
   
</div>

<br><br><br><br>








<?php

include "footer.php"

?>

</body>
</html>