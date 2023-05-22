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
  $mail->addAddress($email, 'Helpdesk');     //Add a recipient




  //Correos a enviar 
  $users = [
    ['email' => 'Soporte911@911.gob.hn', 'name' => 'Soporte'],
    ['email' => 'registrosoporte@911.gob.hn', 'name' => 'Registro']
  ];

  foreach ($users as $user) {
    $mail->addAddress($user['email'], $user['name']);
  }


  //Content
  $mail->isHTML(true);                                    //Set email format to HTML
  $mail->CharSet = 'UTF-8';                               //Cambiando el lenguaje a UTF
  $mail->Subject = "Informacion Ticket:   " . $id_ticket; //Asunto del correo
  $mail->Body    =
    $mail->AltBody = "<body style='color: #000000; font-size: 0.9rem;'> 
  <div style='background-color:#FFE3D8; margin: 1%; padding: 1.5%'> <h3>Registro Soporte Técnico 9-1-1\n</h3>
  <br><br> Ticket ID: <b> " . $id_ticket . "</b>
  <br><br>  <b></b> Fecha Creación Ticket: " . $fecha .
    "<br><br> <b></b> Nombre Usuario: " . $nombre_ticket .
    "<br><br> <b></b> Email Usuario: " . $email_ticket .
    "<br><br> <b></b> ID Departamento: " . $departamento_ticket .
    "<br><br> <b></b> Técnico Asignado: " . $asignar_ticket .
    "<br><br> <b></b> Tarea Realizar: " . $tarearealizar_ticket .
    "<br><br><br><br><b>Sistema Nacional de Emergencias 9-1-1</pre>"; //Cuerpo del mensaje  
  $mail->send();
  // echo 'El correo ha sido enviado';
} catch (Exception $e) {
  echo "";
}
/************************************* Fin envío de correo *************************************/
$mail->smtpClose();





?>



