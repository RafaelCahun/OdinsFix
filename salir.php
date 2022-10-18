<?php
  session_start();
  session_destroy();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sesión Finalizada</title>



   <META HTTP-EQUIV=Refresh CONTENT="2; URL=index.php">
</head>
<body>
<?php

include "header2.php";

?>

<div class="salirphp">
   <h1 class="heading"> SESIÓN <span>FINALIZADA</span> </h1>
</div>

<?php

include "footer.php";

?>
   
</body>
</html>