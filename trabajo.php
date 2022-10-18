<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nuestro Trabajo</title>

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

<div class="work" id="trabajo">
    <br><br>

    <h1 class="heading"> Nuestro <span> Trabajo</span> </h1>

    <div class="box-container">
        <!-- ARRIBA -->
        <img src="images/trabajo1.jpg" alt="trabajo1.jpg">
        <!-- ABAJO -->
        <img src="images/trabajo6.jpg" alt="trabajo6.jpg">
        
        <!-- ARRIBA -->
        <img src="images/trabajo3.jpg" alt="trabajo3.jpg">
        <!-- ABAJO -->
        <iframe width="600" height="398" src="https://www.youtube.com/embed/8mCSaCClGXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!-- ARRIBA -->
        <img src="images/trabajo4.jpg" alt="trabajo4.jpg">
         <!-- ABAJO -->
        <img src="images/trabajo2.jpg" alt="trabajo2.jpg">

        
        
    </div>

</div>

<?php

include "footer.php"

?>

   
</body>
</html>