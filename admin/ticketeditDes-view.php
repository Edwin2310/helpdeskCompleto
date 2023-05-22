<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/*Llamado de los campos de la base de datos*/
if (isset($_POST['id_edit']) && isset($_POST['regional']) && isset($_POST['sistema']) && isset($_POST['reporte'])) {
  $id_edit = MysqlQuery::RequestPost('id_edit');
  $regional = utf8_encode(MysqlQuery::RequestPost('regional'));
  $sistema = utf8_encode(MysqlQuery::RequestPost('sistema'));
  $reporte = utf8_encode(MysqlQuery::RequestPost('reporte'));


  if (MysqlQuery::Actualizar("tbl_ticket_desarrollo",  "regional='$regional', sistema='$sistema', reporte='$reporte'", "id=$id_edit")) {

    echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="text-center">TICKET ATENDIDO</h4>
                    <p class="text-center">
                        Ticket actualizado con éxito.
                    </p>
                </div>
            ';
  }
}

$id = MysqlQuery::RequestGet('id');
$sql = Mysql::consulta("SELECT * FROM tbl_ticket_desarrollo WHERE id= '$id'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
/* Fin Llamado de los campos de la base de datos*/


/************************************* Envío de correo *************************************/

//  require 'inc/PHPMailer-5.2-stable/PHPMailerAutoload.php'; 

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true); 

// try {
//     //Server settings
//     $mail->SMTPDebug = 0;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     //Servers 
//     $mail->SMTPAuth   = true;                                   //Autenticación SMTP 
//     $mail->Username   = 'soportet911@gmail.com';                     //Usuario
//     $mail->Password   = 'Stecnico911';                               //Contraseña
//     $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
//     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('soportet911@gmail.com', 'Soporte Tecnico 9-1-1');
//     $mail->addAddress ($reg['email']);     //Add a recipient


//     /* $mail->addAttachment('/var/tmp/file.tar.gz');        //Add attachments
//     $mail->addAttachment('img/911.png');*/   //Optional name 

//   //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = "Informaci�n sobre Ticket:". $reg['serie'];  //asunto del correo
//     $mail->Body    =  
//     $mail->AltBody = "<body style='color: #000000; font-size: 0.9rem;'> 
//     <div style='background-color:#FDDFCD; margin: 1%; padding: 1.5%'> <h3> Estimado(a) ".$reg['nombre_usuario']. ".</h3><br> A continuaci�n, le brindamos detalles de su Ticket: <br>".
//     "<br><b>�</b> Estado del ticket:<b> ".$reg['estado_ticket']. "</b><br> <b>�</b> Soluci�n del problema:<b>  ".$reg['solucion']. 
//      "</b><br><br> Esperamos que el Ticket se haya resuelto a su entera satisfacci�n. Si cree que el Ticket no ha sido resuelto, responda a este correo electronico.</br>
//     <br><br> Gracias por su paciencia.</br>

//     <br><br><b><pre> Atentamente,
//     <br><br><b>Soporte T�cnico 9-1-1 </pre>
//     <br><br><b> 
//     <pre>**** Nota: Si recibe este correo y el Estado y Soluci�n del Ticket son <b>Pendientes</b>, esto indica que su ticket fue abierto y est� en proceso de soluci�n. 
//     Pronto recibir� un correo donde indique el nuevo estado de su ticket y la soluci�n.
//                                                                 Gracias por su atenci�n.****</pre>"; //Cuerpo del mensaje 

// $mail->send();
// echo '';
// } catch (Exception $e) {
// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  
// }   

?>
<!-- Fin envío de correo -->



<!--************************************ Page content *************************************-->
<!-- Formulario para responder a la solución del ticket y cambio de estado -->
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <img src="./img/Edit.png" alt="Image" class="img-responsive animated tada">
    </div>
    <div class="col-sm-9">
      <a href="./admin.php?view=ticketadmin" class="btn btn-primary btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Volver a administrar Tickets</a>
    </div>
  </div>
</div>


<div class="container">
  <div class="col-sm-12">
    <form class="form-horizontal" role="form" action="" method="POST">

      <input type="hidden" name="id_edit" value="<?php echo $reg['id'] ?>">
      <div class="form-group">

        <label class="col-sm-2 control-label">Fecha</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <input class="form-control" readonly="" type="text" name="fecha" readonly="" value="<?php echo $reg['fecha'] ?>">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Ticket</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <input class="form-control" readonly="" type="text" name="serie" readonly="" value="<?php echo $reg['serie'] ?>">
            <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-sm-2 control-label">Nombre Usuario</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="name_ticket" readonly="" value="<?php echo $reg['nombre_usuario'] ?>">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="email" readonly="" class="form-control" name="email" readonly="" value="<?php echo $reg['email'] ?>">
            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-sm-2 control-label">Estado</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="estado_ticket" readonly="" value="<?php echo $reg['estado_ticket'] ?>">
            <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Regional</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <select class="form-control" name="regional">
              <option style=" font-weight:bold" value="<?php echo $reg['regional'] ?>"><?php echo $reg['regional'] ?></option>
              <?php

              $dept = Mysql::consulta("SELECT idRegional, nombreRegional FROM tbl_regionales");

              while ($ticket = mysqli_fetch_array($dept)) {
                if ($ticket["nombreRegional"] != $reg['regional']) {
              ?>

                  <option value="<?php echo $ticket["nombreRegional"] ?>"> <?php echo $ticket["nombreRegional"] ?></option>

              <?php }
              }  ?>
            </select>
            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Asunto</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <select class="form-control" name="sistema">
              <option style=" font-weight:bold" value="<?php echo $reg['sistema'] ?>"><?php echo $reg['sistema'] ?></option>
              <?php

              $dept = Mysql::consulta("SELECT id_desarrollo, desarrollo FROM tbl_desarrollo");

              while ($ticket = mysqli_fetch_array($dept)) {
                if ($ticket["desarrollo"] != $reg['sistema']) {
              ?>

                  <option value="<?php echo $ticket["desarrollo"] ?>"> <?php echo $ticket["desarrollo"] ?></option>

              <?php }
              }  ?>
            </select>
            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          </div>
        </div>
      </div>



      <div class="form-group">
        <label class="col-sm-2 control-label">Problema</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="3" name="reporte" required=""><?php echo ($reg['reporte']) ?></textarea>
        </div>
      </div>




      <br>
      <!-- Botón para actualizar la información y enviar el correo-->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 text-center">
          <button type="submit" class="btn btn-info">Actualizar ticket</button>
        </div>
      </div>
    </form>
  </div><!--col-md-12-->
</div><!--container-->


<!-- Fecha y hora  -->

<!-- <script>
document.getElementById("dnt").innerHTML = Date();
</script>  -->