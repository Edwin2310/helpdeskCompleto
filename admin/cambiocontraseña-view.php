<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/*Llamado de los campos de la base de datos*/
	if(isset($_POST['id_edit']) && isset($_POST['nombre']) && isset($_POST['usuario'])  && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['contraseña_temporal'])   ){
		$id_edit=MysqlQuery::RequestPost('id_edit');
    $nombre=  MysqlQuery::RequestPost('nombre');  
		$usuario=  MysqlQuery::RequestPost('usuario');
		$telefono= utf8_encode( MysqlQuery::RequestPost('telefono'));
    $correo= utf8_encode( MysqlQuery::RequestPost('correo'));
    $contraseña_temporal=md5(MysqlQuery::RequestPost('contraseña_temporal'));

   

		if(MysqlQuery::Actualizar("tbl_usuarios",  "nombre_completo='$nombre', nombre_usuario='$usuario', telefono='$telefono', email_usuario='$correo', clave='$contraseña_temporal'", "id_usuario=$id_edit" )){

			echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">Contraseña Temporal</h4>
                    <p class="text-center">
                        Se realizó el cambio de Contraseña Temporal con éxito
                    </p>
                </div>
            ';
     }
        }     
   
        $id = MysqlQuery::RequestGet('id');
        $sql = Mysql::consulta("SELECT * FROM tbl_usuarios WHERE id_usuario= '$id'");
        $reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);
      /* Fin Llamado de los campos de la base de datos*/


                                       /************************************* Envío de correo *************************************/
          
/*           require 'inc/PHPMailer-5.2-stable/PHPMailerAutoload.php'; 

          //Create an instance; passing `true` enables exceptions
          $mail = new PHPMailer(true); 
          
          try {
              //Server settings
              $mail->SMTPDebug = 0;                      //Enable verbose debug output
              $mail->isSMTP();                                            //Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
              //Servers 
              $mail->SMTPAuth   = true;                                   //Autenticación SMTP 
              $mail->Username   = 'soportet911@gmail.com';                     //Usuario
              $mail->Password   = 'Stecnico911';                               //Contraseña
              $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
              $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
          
              //Recipients
              $mail->setFrom('soportet911@gmail.com', 'Soporte Tecnico 9-1-1');
              $mail->addAddress ($reg['email']);     //Add a recipient
             
              
              /* $mail->addAttachment('/var/tmp/file.tar.gz');        //Add attachments
              $mail->addAttachment('img/911.png');*/   //Optional name 
          
            //Content
      /*         $mail->isHTML(true);                                  //Set email format to HTML
              $mail->Subject = "Informacion sobre Ticket:". $reg['serie'];  //asunto del correo
              $mail->Body    =  
              $mail->AltBody = "<body style='color: #000000; font-size: 0.9rem;'> 
              <div style='background-color:#FDDFCD; margin: 1%; padding: 1.5%'> <h3> Estimado(a) ".$reg['nombre_usuario']. ".</h3><br> 
              A continuación, le brindamos detalles de su Ticket: <br>".
              "<br> ⦿ Estado del ticket:<b> ".$reg['estado_ticket']. "</b><br> ⦿ Solución del problema: <b> ".$reg['solucion'].
              "</b><br><br> Esperamos que el Ticket se haya resuelto a su entera satisfacción. Si cree que el Ticket no ha sido resuelto, responda a este correo electronico.</br>
              <br><br> Gracias por su paciencia.</br>

              <br><br><b><pre> Atentamente,
              <br><br><b>Soporte Técnico 9-1-1 </pre> 
              <br><br><b> 
              <pre>**** Nota: Si recibe este correo y el Estado y Solución del Ticket son <b>Pendientes</b>, esto indica que su ticket fue abierto y está en proceso de solución. Pronto recibirá un correo donde indique el nuevo estado de su ticket y la solución.
                                                                          Gracias por su atención.****</pre>";//Cuerpo del mensaje 
              
            
          $mail->send();
          echo 'Message has been sent';
          } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  
          }    */ 
        
?> 
            <!-- Fin envío de correo -->    



                                       <!--************************************ Page content *************************************-->
                                       <!-- Formulario para responder a la solución del ticket y cambio de estado -->
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
               
            </div>
            <div class="col-sm-9">
                <a href="./admin.php?view=users" class="btn btn-primary btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Volver a administrar usuarios</a>
            </div>
          </div>
        </div>
            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
           <img  src="./img/lock.png" alt="Image" class="img-responsive animated flipInY" width="220" height="105">
            </div>
            <div class="col-sm-10">
                <br>
              <h2 class="text-info"><center>Contraseña Temporal </h2>
            </div>
          </div>
        </div> 

          <div class="container">
            <div class="col-sm-12">
                <form class="form-horizontal"  enctype="multipart/form-data" role="form" action="" method="POST">
                  
                		<input type="hidden" name="id_edit" value="<?php echo $reg['id_usuario']?>">
                        <div class="form-group">

                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class='col-sm-10'>
                                <div class="input-group">
                                    <input class="form-control"  readonly="" type="text" name="nombre"  value="<?php echo $reg['nombre_completo']?>">
                                    <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usuario</label>
                            <div class='col-sm-10'>
                                <div class="input-group">
                                    <input class="form-control" readonly="" type="text" name="usuario"  value="<?php echo $reg['nombre_usuario']?>">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Teléfono</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                  <input type="text" class="form-control"  readonly="" name="telefono" value="<?php echo $reg['telefono']?>">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                  <input type="email" class="form-control"  readonly="" name="correo"  value="<?php echo $reg['email_usuario']?>">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                              </div> 
                          </div>
                        </div>



                        <div class="form-group">
                          <label   class="col-sm-2 control-label"><font color="blue">Contraseña Temporal</font></label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                  <input type="text" class="form-control"   name="contraseña_temporal" placeholder="contraseña_temporal" ">
                                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                              </div>
                          </div>
                        </div>


                    <!-- Botón para actualizar la información y enviar el correo-->
                        <div class="form-group">                                                            
                          <div class="col-sm-offset-2 col-sm-10 text-center">
                          <button type="submit"  class="btn btn-info">Actualizar ticket</button>
                          </div>
                        </div>
              </form>
            </div><!--col-md-12-->
          </div><!--container-->
        

      <!-- Fecha y hora  -->                                                                        

  <!-- <script>
document.getElementById("dnt").innerHTML = Date();
</script>  -->

