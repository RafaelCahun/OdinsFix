<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrate!</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">

</head>
<body>


<?php

include "header.php"

?>

<script type="text/javascript">
        function valida_enviarle(){

            //VALIDAR EL NOMBRE

            if(document.formvalidardatos.nombreusuario.value.length==0){
            alert("Favor de proporcionar su NOMBRE")
            document.formvalidardatos.nombreusuario.focus()
            return 0;
            }

            if(document.formvalidardatos.apellidousuario.value.length==0){
            alert("Favor de proporcionar su NOMBRE")
            document.formvalidardatos.apellidousuario.focus()
            return 0;
            }

            if(document.formvalidardatos.emailusuario.value.length==0){
            alert("Favor de proporcionar su QUEJA O SUGERENCIA")
            document.formvalidardatos.emailusuario.focus()
            return 0;
            }

            if(document.formvalidardatos.passwordusuario.value.length==0){
            alert("Favor de proporcionar su QUEJA O SUGERENCIA")
            document.formvalidardatos.passwordusuario.focus()
            return 0;
            }

            document.formvalidardatos.submit();
        }
</script>

<div class="volver">
<a href="sesion.php" class="regresar">Regresar</a>
</div>

<div class="logo2">
<img src="images/logo2.png"  alt="">
</div>





<div class="formulario">

<br>
<h3 class="heading"><span>Registrate</span> </h3>
<span class="obligatorio">Si con anterioridad realizó una cotización sin estar registrado, <br> favor de usar el <span class="red">EMAIL</span> anteriormente proporcionado.</span>
<br>
<br>
<form action="registro2.php" method="POST" name="formvalidardatos">
        <input type="text" name="nombreusuario" placeholder="*Nombre" id="" class="campos">

        <input type="text" name="apellidousuario" placeholder="*Apellido" id="" class="campos"><br><br>

        <input type="email" name="emailusuario" placeholder="*Email" id="" class="camposlargos"><br><br>

        <input type="password" name="passwordusuario" placeholder="*Contraseña" id="" class="camposlargos"><br><br>

        <input type="number" name="telefonousuario" placeholder="Telefono" id="" class="campos">

        <input type="number" name="edadusuario" placeholder="Edad" id="" class="campos"><br><br>

        <input type="text" name="direccion" placeholder="Dirección" id="" class="camposlargos"><br><br>


        <input type="button" value="Enviar" class="btn"
        onclick="valida_enviarle()">
        <br><br><br>
    </form>
</div>







<?php

include "footer.php"

?>
   
</body>
</html>