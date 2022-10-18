<?php

include "seguridad2.php";

$administrador = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Panel de Administración</title>

   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" href="images/icono.png">
</head>
<body>

<?php

include "header2.php"

?>


<div class="panelusuario">
   <div class="usuario">
   <span>Usuario:</span>
   <p class="nombre"><?php echo $administrador?></p>
   </div>
   
   <div class="salir">
   <a href="salir.php">Cerrar Sesión <img src="images/cerrar-sesion.png" alt="">  </a>
   </div>
</div>

<div class="panel">
   <h1 class="heading"> Panel de <span>Administrador</span> </h1>
</div>


<div class="tablecotizacion">
<?php
  include "conexion.php";
  // MOSTRAR TODAS LAS COTIZACIONES
  $todos = "SELECT * FROM cotizaciones";

  $resultado = mysqli_query($conectar, $todos);
  while($row  = mysqli_fetch_assoc($resultado)){
    ?>
   <table class="table">

   
      <tr>
         <td class="campo4">ID Cotización:</td>
         <td class="campo4">Nombre:</td>
         <td class="campo4">Correo:</td>
         <td class="campo4">Telefono:</td>
         <td class="campo4">Reparación:</td>
         <td class="campo4">Problema:</td>
         <td class="campo4">Imagen:</td>
         <td class="campo3" rowspan="2"><a href="#" onClick="validar('eliminar2.php?id=<?php echo $row["id"]; ?>')" ><img class="eliminar" src="images/eliminar.png" alt=""></a> </td>

      </tr>
       <tr>
       <td class="campo2"><?php echo $row["id"]; ?></td>

       <td class="campo2"><?php echo $row["nombre"]; ?></td>

       <td class="campo2"><?php echo $row["correo"]; ?></td>

       <td class="campo2"><?php echo $row["telefono"]; ?></td>

       <td class="campo2"><?php echo $row["reparacion"]; ?></td>

       <td class="campo2"><?php echo $row["problema"]; ?></td>

       <td>  <img class="producto" src="<?php echo substr($row["ruta"],25) ?>" alt="">  </td>

       </tr>
    </table>
    <br><br>

    <?php 
          }
          mysqli_free_result($resultado);
        ?>
</div>

<script>
      function validar(url)
      {
        var eliminar = confirm("¿Acepta ELIMINAR la COTIZACIÓN?");
        if(eliminar == true){
          window.location=url;
        }
      }
    </script>



<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br>



<?php

include "footer.php"

?>


   
</body>
</html>