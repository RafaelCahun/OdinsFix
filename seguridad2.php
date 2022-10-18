<?php

session_start();
if ($_SESSION["autentificado2"] != "SI") 
{
	header("Location: administrador.php");
	exit();
}








?>