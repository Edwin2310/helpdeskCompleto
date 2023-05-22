<?php ini_set('display_errors', 1);
error_reporting(4181); ?>

<?php
/************************************* Envío de correo a Usuario *************************************/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");

/* require 'inc/PHPMailer-5.2-stable/PHPMailerAutoload.php';
include ("../phpMailer/PHPMailer.php");
*/

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output 
  $mail->SMTPDebug = 0;                                    //Enable verbose debug output 
  $mail->isSMTP();                                           //Send using SMTP
  $mail->Host       = 'correo.911.gob.hn';                   //Set the SMTP server to send through
  //Servers
  $mail->SMTPAuth   = true;                                  //Autenticación SMTP 
  $mail->Username   = 'helpdesk@911.gob.hn';                 //Usuario
  $mail->Password   = 'Sistema.911*';                         //Contraseña
  $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption 
  $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('helpdesk@911.gob.hn', 'Soporte Tecnico 9-1-1');
  $mail->addAddress($email_ticket);     //Add a recipient



  //Content
  $mail->isHTML(true);                                    //Set email format to HTML
  $mail->CharSet = 'UTF-8';                               //Cambiando el lenguaje a UTF
  $mail->Subject = "Informacion Ticket:   " . $id_ticket; //Asunto del correo
  $mail->Body    =
    $mail->AltBody = "<body style='color: #000000; font-size: 0.9rem;'> 
  <div style='background-color:#FFE3D8; margin: 1%; padding: 1.5%'> <h3>Estimado(a)\n\n " . $nombre_ticket . "</h3>¡Gracias por reportarnos su problema!<br>
  \n Te notificamos que hemos recibido tu solicitud y se ha creado un Ticket. 
  <br><br> <b></b> Su Ticket ID es:<b> </br>" . $id_ticket .
    "</b><br><br> Nuestro equipo de IT revisará tu solicitud y se comunicará contigo los más pronto posible.</br>
  <br><br> Gracias por su paciencia.</br>
  
  <br><br><b><pre>Atentamente,
  <br><br><b>Soporte Técnico 9-1-1 </pre>"; //Cuerpo del mensaje  
  $mail->send();
  // echo 'El correo ha sido enviado';
} catch (Exception $e) {
  echo "";
}
/************************************* Fin envío de correo *************************************/
?>
