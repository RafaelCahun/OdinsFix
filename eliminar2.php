<?php
require "conexion.php";
$id = $_GET['id'];

$eliminar = "DELETE FROM cotizaciones WHERE id='$id'";
$resultado = mysqli_query($conectar,$eliminar);

if($resultado){
  header("location:paneladministrador.php");
}
else{
  echo "ERROR AL ELIMINAR LA COTIZACIÓN";
}
?>