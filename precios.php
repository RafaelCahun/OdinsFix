<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Precios</title>

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

<!-- PRECIOS / EMPIEZA -->

<div class="pricing" id="precios">

    <h1 class="heading"> Nuestros <span>Precios</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Mantenimiento</h3>
            <div class="price"> $300<span>/mx</span> </div>
            <ul>
                <li class="bold"> El Mantenimiento preventivo incluye: </li>

                <li class="left">* Formateo</li>
                <li class="left">* Limpieza de entrada de carga</li>
                <li class="left">* Limpieza de bocina</li>
                <li class="left">* Cambio de pasta térmica</li>

            </ul>
        </div>

        <div class="box">
        <h3>Display</h3>
            <div class="price"> $500<span>/mx</span> </div>
            <ul>
                <li class="bold">* El precio del display podría variar dependiendo del modelo del celular *  </li>

                <li class="bold">Marcas más comunes:</li>
                <li>* Samsung</li>
                <li>* Apple</li>
                <li>* Xiaomi</li>
            </ul>
         
        </div>

        <div class="box">
        <h3>Flasheo</h3>
            <div class="price"> $800<span>/mx</span> </div>
            <ul>
                <li class="bold">* Al momento de realizar el flasheo podría variar el precio según el firmware de la marca *  </li>

                <li class="bold">Marcas más comunes:</li>
                <li>* Samsung</li>
                <li>* Apple</li>
                <li>* Xiaomi</li>
            </ul>
        </div>

    </div>
    <br><br><br><br>
    <h1 class="heading"> Dispositivos Más <span>Comunes</span> </h1>
    <br><br>
    <table class="table">
        <tr>
            <td class="campo1">Marca</td>
            <td class="campo1">Modelo</td>
            <td class="campo1">Reparación</td>
            <td class="campo1">Costo de reparación</td>
            <td class="campo1">Imagen</td>
        </tr>

        <tr>
            <td class="campo2">Apple</td>
            <td class="campo2">¡Phone 8</td>
            <td class="campo2">Display</td>
            <td class="campo2"> <span>$</span>500/mx</td>
            <td class="campo2"> <img src="images/display1.webp" alt=""></td>
        </tr>

        <tr>
            <td class="campo2">Apple</td>
            <td class="campo2">¡Phone X</td>
            <td class="campo2">Display</td>
            <td class="campo2"> <span>$</span>700/mx</td>
            <td class="campo2"> <img src="images/display2.webp" alt=""></td>
        </tr>

        <tr>
            <td class="campo2">Apple</td>
            <td class="campo2">¡Phone 11</td>
            <td class="campo2">Display</td>
            <td class="campo2"> <span>$</span>1000/mx</td>
            <td class="campo2"><img src="images/display3.jpg" alt=""> </td>
        </tr>

        <tr>
            <td class="campo2">Samsung</td>
            <td class="campo2">Galaxy A32</td>
            <td class="campo2">Flasheo</td>
            <td class="campo2"> <span>$</span>800/mx</td>
            <td class="campo2"><img src="images/flasheo1.jpg" alt=""> </td>
        </tr>

        <tr>
            <td class="campo2">Xiaomi</td>
            <td class="campo2">PocoX3 NFC</td>
            <td class="campo2">Mantenimiento</td>
            <td class="campo2"> <span>$</span>250/mx</td>
            <td class="campo2"><img src="images/mantenimiento1.jpg" alt=""> </td>
        </tr>
    </table>

    <!-- TABLA INFORMATIVA -->


</div>

<!-- PRECIOS / TERMINA -->


<?php

include "footer.php"

?>
   
</body>
</html>