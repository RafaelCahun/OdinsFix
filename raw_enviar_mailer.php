<?php



include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'teamodins@gmail.com';   
$mail->Password = 'jonxlaplana';  

$mail->setFrom('teamodins@gmail.com', 'Rafael Cahun');
$mail->addAddress('rafaelcahun_28@hotmail.com', 'Odins Fix');     // Add a recipient
$mail->addReplyTo('teamodins@gmail.com', 'Rafael Cahun');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por'.$_POST['nombrecompleto'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombrecompleto'].'<br><b>Queja o Sugerencia: <b>'.$_POST['comentarios'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por enviarnos tus sugerencias, en caso de ser una queja, nosotros nos contactaremos con usted en la brevedad posible.");
      location.href="index.php";
    </script>
  ';
    echo 'Gracias '.$_POST['nombrecompleto'].' por contactarnos, Odins Fix revisará su queja o sugerencia para mejora del servicio';
}


?>