<?php
include 'conexion.php';


//Valores del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$reparacion = $_POST['reparacion'];
$problema = $_POST['problema'];

//Imagen
$rutaTemporal = $_FILES['imagen']['tmp_name'];
//$rutaenServidor = 'imagenes';
$rutaenServidor = $_SERVER['DOCUMENT_ROOT']."/proyecto/fotos/";
$nombreImagen = $_FILES['imagen']['name'];

// para que no se sobreescriban los nombres de fotos
date_default_timezone_set('UTC');
$nombreimagenunico = date('Y-m-d-h-i-s')."-".$nombreImagen;
//imagenes/horadeinsercion+nombredelaimagen.
$rutadestino = $rutaenServidor.$nombreimagenunico;

// validacion del peso de la imagen
$pesofoto = $_FILES['imagen']['size'];
$tipofoto = $_FILES['imagen']['type'];

if($pesofoto > 900000){
  echo '
    <script>
      alert("Archivo demasiado pesado.");
      window.history.go(-1);
    </script>
  ';
  exit;
}

if($tipofoto == "image/jpeg" || $tipofoto == "image/png" || $tipofoto == "image/gif" || $tipofoto == "image/jpg") {
  move_uploaded_file ($rutaTemporal,$rutadestino);
}
// else{
//   echo '
//     <script>
//       alert("Archivo: '.$nombreImagen.'  no es una imagen.");
//       window.history.go(-1);
//     </script>
//   ';
//     exit;
//   }



  $consulta = "INSERT INTO cotizaciones (nombre,correo,telefono,reparacion,problema,ruta) VALUES ('$nombre','$correo','$telefono','$reparacion','$problema','$rutadestino')";
  $resultado = mysqli_query($conectar, $consulta);

  if($resultado){
    echo '
      <script>
        alert("Cotización enviada EXITOSAMENTE");
        location.href="cotizacion.php";
      </script>
    
    ';
  }
  else{
    echo '
      <script>
        alert("ERROR al enviar Cotización");
        window.history.go(-1);
      </script>
    
    ';
  }

?>