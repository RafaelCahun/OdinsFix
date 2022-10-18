<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Administrador</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">

</head>
<body>

<?php

include "header2.php"

?>
<div class="volver">
<a href="sesion.php" class="regresar">Regresar</a>
</div>

<div class="admin">
   <h1>Usuario <span>Odin´s Fix</span> </h1>
</div>


<div class="administrador">
   <img src="images/perfil.jfif" alt="" class="perfil">
   <br><br>
   <?php
	$errorusuario = isset($_GET["errorusuario"]);	
	if($errorusuario == "SI"){
 		echo '<h3 class="aviso">DATOS INCORRECTOS</h3></font><br>';
	}
   ?>
   <br>
   <form action="autentificar2.php" class="admi" method="POST">

   <label>Usuario <span>*</span></label>
   <br>
   <input type="text" placeholder="Administrador" name="administrador" require>
   <br><br>
   <label>Password <span>*</span></label> <br>
   <input type="password" placeholder="Password" name="password" require>
   <br><br><br>
   <input class="btnsesion" type="submit" value="Iniciar sesión"/>
   </form>
   

</div>

<br><br><br><br><br><br>


<?php

include "footer.php"

?>

</body>
</html>