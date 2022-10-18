<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Servicios</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">
   
</head>
<body>

<?php
  
    session_start();
    if (isset($_SESSION["autentificado"]) == "SI") 
    {
	    include "header3.php";
    }
    else{

        include "header.php";
    }
  
?>
<!-- SERVICIOS / INICIA -->

<div class="services" id="servicios">

    <h1 class="heading"> Nuestros <span> Servicios </span> </h1>
    <br><br><br><br>
    <div class="box-container">

        <div class="box">
            <img src="images/icono1.png" alt="">
            <h3>Rápido ¡Servicio exprés!</h3>
            <p>¡Reparamos en menos de 1 hora!</p>
        </div>

        <div class="box">
            <img src="images/icono2.png" alt="">
            <h3>Liberación y flexeo</h3>
            <p>De dispositivos móviles</p>
        </div>

        <div class="box">
            <img src="images/icono3.png" alt="">
            <h3>Reparación de hardware</h3>
            <p>Sin importar el nivel de complicación</p>
        </div>

        <div class="box">
            <img src="images/icono4.png" alt="">
            <h3>Reparación de software</h3>
            <p>Para cualquier sistema operativo (Android - !OS)</p>
        </div>

        <div class="box">
            <img src="images/icono5.png" alt="">
            <h3>Personal técnico especializado</h3>
            <p>Más de 5 años de experiencia</p>
        </div>
        
    </div>

</div>
<br><br><br>
<br><br><br>
<!-- SERVICIOS / TERMINA -->
<?php

include "footer.php"

?>
</body>
</html>