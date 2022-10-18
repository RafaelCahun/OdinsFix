<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cotización</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">

</head>
<body>

<?php
  
    session_start();
    if (isset($_SESSION["autentificado"]) == "SI") 
    {
	    include "header3.php";
        $nombre = $_SESSION['nombre'];
        $email = $_SESSION['email'];
    }
    else{

        $nombre = "";
        $email = "";


        include "header.php";
    }
  
?>




            <!-- VALIDACION FORMULARIO -->
            <script type="text/javascript">
   function valida_envia(){

      //VALIDAR EL NOMBRE

      if(document.fvalida.nombre.value.length==0){
      alert("Favor de proporcionar solamente su NOMBRE")
      document.fvalida.nombre.focus()
      return 0;
      }

      if(document.fvalida.correo.value.length==0){
      alert("Favor de proporcionar su CORREO")
      document.fvalida.correo.focus()
      return 0;
      }


      if(document.fvalida.reparacion.value.length==0){
      alert("Favor de proporcionar su REPARACIÓN A COTIZAR")
      document.fvalida.reparacion.focus()
      return 0;
      }

      if(document.fvalida.problema.value.length==0){
      alert("Favor de escribir su PROBLEMA ")
      document.fvalida.problema.focus()
      return 0;
      }

      // SI TODOS LOS CAMPOS HAN SIDO VALIDADOS CORRECTAMENTE, ENTONCES SE ENVIA CON LA SIGUIENTE FUNCION:

      document.fvalida.submit();
   }
   </script>

<!-- COTIZACION / EMPIEZA -->
<div class="contact" id="cotizacion">
    <br><br>

    <h1 class="heading"> <span>Cotización</span> | Contactos </h1>

    <div class="row">

        <div class="box-container">

            <div class="box">
                <h3>¡Contactanos!</h3>
                <p> <span>Dirección:</span> 47 781B x 98 y 100 </p>
                <p> <span>Correo:</span> LE18081065@merida.tecnm.mx </p>
                <p> <span>Teléfono:</span> 999-292-7831 </p>
            </div>

            <div class="box">
                <h3>Redes Sociales</h3>

                <p> <a href="https://www.facebook.com/Odins-Gaming-1880533948855424" target="blank" ><img src="images/facebook.png" class="iconos"> Odin´s Fix
                </a> </p>

                <p> <a href="https://www.twitch.tv/teamodinsgaming" target="blank" ><img src="images/twitch.png" class="iconos"> Odin´s Fix
                </a> </p>

                <p> <a href="https://www.instagram.com/teamodinsgaming/?hl=es" target="blank"><img src="images/instagram.png" class="iconos"> Odin´s Fix
                </a> </p>
       
            </div> <br>
            
            <div class="box">
                <h3>Horarios</h3>
                <p> <span> Lunes : </span> 07:00am - 10:00pm </p>
                <p> <span> Martes : </span> 07:00am - 10:00pm </p>
                <p> <span> Miércoles : </span> 07:00am - 10:00pm </p>
                <p> <span> Jueves : </span> 07:00am - 10:00pm </p>
                <p> <span> Viernes : </span> 07:00am - 10:00pm </p>
                <p> <span> Sábado : </span> 07:00am - 10:00pm </p>
                <p> <span> Domingo : </span> Cerrado </p>
            </div>
        </div>

       
        

        <form action="registro.php" method="POST" name="fvalida" enctype="multipart/form-data">
            <h3>¡Envíanos tu cotización!</h3>
            <span class="problema">Los campos con un * son obligatorios</span>
            <input type="text" placeholder="*Nombre" class="input-box" name="nombre">
            <input type="email" placeholder="*Correo" class="input-box" name="correo">
            <input type="number" placeholder="Teléfono" class="input-box" name="telefono">
            <input type="text" placeholder="*Reparación requerida" class="input-box" name="reparacion">
            <br><br><br>
            <span class="problema">¡Envianos la imagen de tu problema!</span>
            <input type="file" name="imagen" id="" class="input-box ">
            <textarea name="problema" placeholder="*¡Descríbenos tu problema!" class="input-box" id=""></textarea>
            <input type="button" value="Enviar" class="btn" onclick="valida_envia()">
        </form>

        
        <script>
                document.fvalida.nombre.value = "<?php echo $nombre?>";
                document.fvalida.correo.value = "<?php echo $email?>";
            </script>

    </div>


</div>
<br>
<!-- COTIZACION / TERMINA -->


<?php

include "footer.php"

?>
   
</body>
</html>