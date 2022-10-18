<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menu</title>

   <link rel="stylesheet" href="css/estilos.css">
</head>
<body onload="mueveReloj()">

<header class="header">

<a href="index.php" class="logo">Odin´s Fix  <img src="images/telefono-inteligente.png" alt="">  </a>

<div class="fecha">


<img src="images/reloj.png" alt="" class="reloj">

<script language="JavaScript">
    function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    var dia=new Array(7);
        dia[0]="Domingo";
        dia[1]="Lunes";
        dia[2]="Martes";
        dia[3]="Miercoles";
        dia[4]="Jueves";
        dia[5]="Viernes";
        dia[6]="Sabado";
        var mes=new Array(12);
        mes[0]="Enero";
        mes[1]="Febrero";
        mes[2]="Marzo";
        mes[3]="Abril";
        mes[4]="Mayo";
        mes[5]="Junio";
        mes[6]="Julio";
        mes[7]="Agosto";
        mes[8]="Septiembre";
        mes[9]="Octubre";
        mes[10]="Noviembre";
        mes[11]="Diciembre";

        if (hora >= 12) {
          hora = hora - 12;
        }
        if (hora == 0) {
          hora = 12;
        }


    str_segundo = new String (segundo)
    if (str_segundo.length == 1)
       segundo = "0" + segundo

    str_minuto = new String (minuto)
    if (str_minuto.length == 1)
       minuto = "0" + minuto

    str_hora = new String (hora)
    if (str_hora.length == 1)
       hora = "0" + hora

    horaImprimible = hora + " : " + minuto + " : " + segundo + " " + dia[momentoActual.getDay()] + " - " + momentoActual.getDate() + " - " + mes[momentoActual.getMonth()]

    // INCLUYE ANIO

    // horaImprimible = hora + " : " + minuto + " : " + segundo + " "  + dia[momentoActual.getDay()] + " - " + momentoActual.getDate() + "-" + mes[momentoActual.getMonth()] + " - " + momentoActual.getFullYear()

    document.horayreloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}
</script>


<form name="horayreloj">
        <label>Hora:</label>
      <input id="reloj" class="clock" type="text" name="reloj" size="10" onfocus="window.document.horayreloj.reloj.blur()">
</form>




</div>

<nav class="navbar">
    <a href="index.php">Inicio</a>
    <a href="servicios.php">Servicios</a>
    <a href="trabajo.php">Nuestro Trabajo</a>
    <a href="precios.php">Precios</a>
    <a href="cotizacion.php">Cotización</a>
    
    <span><a href="sesion.php" class="sesion">Iniciar Sesión</a></span>
</nav>
<div class="scroll-indicator"></div>

</header>  

</body>
</html>