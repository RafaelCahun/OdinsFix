<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Odin´s Fix</title>

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

<!-- INICIO / EMPIEZA -->
<div class="inicio" id="inicio">

    <div class="box">
        <div class="image">
            <img src="images/Imagen1.jpg" alt="">
        </div>
        <div class="content">
            <h3>¿Pantalla Descompuesta?</h3>
            <p>En Odin´s Fix contamos con una amplia variedad de pantallas para tu Smartphone!, con reemplazo inmediato y piezas originales.</p>
            <a href="servicios.php" class="btn">Saber más</a>
        </div>
    </div>

    <div class="box">
        <div class="content">
            <h3>Servicio y Calidad</h3>
            <p>En Odin´s fix ofrecemos un servicio de primera,contando con la última tecnología, para la reparación de tu Smartphone.Todos nuestros trabajadores son ampliamente capacitados y están listos para brindar un servicio honesto y exitoso.</p>
            <a href="trabajo.php" class="btn">Saber más</a>
        </div>
        <div class="image">
            <img src="images/imagen2.jpg" alt="">
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/imagen3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Precios Accesibles</h3>
            <p>En Odin´s Fix proporcionamos distintos planes y opciones en las piezas de reparación, para que sea adecuada a tu necesidad y tu cartera. </p>
            <a href="precios.php" class="btn">Saber más</a>
        </div>
    </div>

</div>
<!-- INICIO / TERMINA -->
<br>
<br>


<!-- NUESTRO TRABAJO / EMPIEZA -->



<!-- NUESTRO TRABAJO / TERMINA -->






<!-- CORREO / INICIA -->

<script type="text/javascript">
        function valida_enviar(){

            //VALIDAR EL NOMBRE

            if(document.formvalido.nombrecompleto.value.length==0){
            alert("Favor de proporcionar su NOMBRE")
            document.formvalido.nombrecompleto.focus()
            return 0;
            }

            if(document.formvalido.comentarios.value.length==0){
            alert("Favor de proporcionar su QUEJA O SUGERENCIA")
            document.formvalido.comentarios.focus()
            return 0;
            }

            document.formvalido.submit();
        }
</script>


<!-- CORREO / TERMINA -->

<div class="newsletter">

    <div class="content">
        <h3>CUENTANOS TU EXPERIENCIA</h3>
        <p>Quejas y Sugerencias</p>
    </div>

    <form action="raw_enviar_mailer.php" method="POST" name="formvalido">
        <input type="text" name="nombrecompleto" placeholder="Nombre Completo" id="" class="email"><br>
        <textarea name="comentarios" id="" placeholder="Descríbenos tu problema o sugerencia" ></textarea>
        <br>

        <input type="button" value="Enviar" class="btn"
        onclick="valida_enviar()">
    </form>


</div>

<?php

include "footer.php"

?>
   <!-- Versión Funcional del Proyecto Guardada en GitHub el dia: / 18 de Octubre del 2022 -->
   <!-- Prueba Git N#2 -->
	
   <!-- Prueba desde GitHub N#1 -->

   <!-- Prueba Git N#3 de rama MAIN(MASTER) -->

   <!-- Prueba Git N#4 Terminal en VisualStudio -->

   <!-- Prueba Git N#5 Creación de RAMA en VisualStudio -->

   <!-- Prueba Git N#6 Cambios en Rama Temp desde VS -->
</body>
</html>
