<!-- Icono que se muestra en la pesta�a -->
<!--  -->
<!DOCTYPE html>
<html>

<head>
  <title>Soporte TÃ©cnico 9-1-1</title>
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/911icon.ico">
  <?php include "./inc/links.php"; ?>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
  <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

</head>

<body>
  <!-- Fin Icono que se muestra en la pestaÃ±a -->

  <!---------------------------- Inicio creaci�n de Tickets ---------------------------->
  <?php
  /* Declaracion de variables a utilizar y genrador de codigo */
  if (isset($_POST['nombre_usuario']) && isset($_POST['email_ticket']) && isset($_POST['fechaatendido'])) {

    /*Este código nos servira para generar un numero diferente para cada ticket*/
    $codigo = "";
    $longitud = 2;
    for ($i = 1; $i <= $longitud; $i++) {
      $numero = rand(0, 9);
      $codigo .= $numero;
    }
    $num = Mysql::consulta("SELECT * FROM tbl_ticket");
    $numero_filas = mysqli_num_rows($num);
    $numero_filas_total = $numero_filas + 1;
    $id_ticket = "TK" . $codigo . "N" . $numero_filas_total;
    /* Fin cÃ³digo nÃºmero de ticket */

    $fecha = MysqlQuery::RequestPost('fechaatendido');
    $estado_ticket = "Pendiente";
    $nombre_usuario = utf8_encode(MysqlQuery::RequestPost('nombre_usuario'));
    $email_ticket = MysqlQuery::RequestPost('email_ticket');
    $departamento_ticket = utf8_encode(MysqlQuery::RequestPost('id_dept'));
    $asunto_ticket = MysqlQuery::RequestPost('asunto_ticket');
    $descripcion = MysqlQuery::RequestPost('descripcion');
    $regional = MysqlQuery::RequestPost('regional');
    $solucion = "Pendiente";
    $ticket_asignado = "No asignado";
    $atendido = "Sin Atender";
    $fechaatendido = "Sin Atender";
    $email = "helpdesk@911.gob.hn";




    if (
      MysqlQuery::Guardar("tbl_ticket", "fecha, serie, estado_ticket, nombre_usuario, email, id_dept, asunto,solucion,descripcion,atendidopor,asignar_ticket, regional,fechaatendido", "'$fecha','$id_ticket','$estado_ticket','$nombre_usuario', '$email_ticket', 
              '$departamento_ticket','$asunto_ticket', '$solucion','$descripcion','$ticket_asignado', '$atendido','$regional','$fechaatendido'")
    ) {

      echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="text-center">TICKET CREADO</h4>
                <p class="text-center">
                Ticket creado con Éxito <br>El TICKET ID es: <strong>' . $id_ticket . '</strong>
                </p>
                </div>
                ';
    } else {
      echo '
                <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                No hemos podido crear el ticket. Por favor intente nuevamente.
                </p>
                </div>
                ';
    }
  }
  ?>

  <!--Panel superior  -->
  <div class="container">
    <div class="row well">
      <div class="col-sm-3">
        <img src="img/ticket2.png" class="img-responsive" alt="Image">
      </div>
      <div class="col-sm-9 lead">
        <a href="index.php" class="btn btn-primary  pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a
          Inicio</a>
        <h2 class="text-info">¿Cómo abrir un nuevo Ticket?</h2>
        <p>Para abrir un ticket deberá de llenar todos los campos del siguiente formulario. Usted podrá verificar el
          estado de su ticket mediante el <strong>Ticket ID</strong>
          que se le proporcionara a usted cuando llene y nos envíe el siguiente formulario.</p>
      </div>
    </div><!--fin row 1-->

    <!-- Imagen e instrucciones -->
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title text-center"><strong><i class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;Crear
                Ticket</strong></h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4 text-center">
                <br><br><br>
                <img src="img/formu_ico.png" alt=""><br><br>
                <p class="text-primary text-justify">Por favor llene todos los datos de este formulario para abrir su
                  ticket. El <strong>Ticket ID</strong>
                  será enviado a la dirección de correo electrónico proporcionada en este formulario.</p>
              </div>
              <br>
              <!-- Fin Imagen e instrucciones -->

              <!--************************************* Formulario para creaci�n de Ticket *************************************-->
              <div class="col-sm-8">
                <form class="form-horizontal" role="form" action="" method="POST">
                  <fieldset>


                    <!-- Fecha de creacion del ticket -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Fecha</label>
                      <div class='col-sm-10'>
                        <div class="input-group">
                          <input class="form-control" type="text" name="fechaatendido" readonly="" value="<?php echo date("Y-m-d H:i:s", strtotime("now")) . "\n"; ?>">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                    <!-- Fin fecha   -->

                    <!-- nombre del usuario que hace el ticket -->
                    <?php
                    $aa = $_SESSION['user'];

                    if ($_SESSION['tipoUser'] == 2) {
                      $nameU = "SELECT nombre_completo, regional, email_usuario, departamento FROM tbl_admin WHERE email_usuario = '$aa'";
                    } else {
                      $nameU = "SELECT nombre_completo, regional, email_usuario, departamento FROM tbl_usuarios WHERE email_usuario = '$aa'";
                    }

                    $nameImprimir = mysqli_query($mysqli, $nameU);
                    while ($recorre = mysqli_fetch_array($nameImprimir)) {
                      $nameInput = $recorre['nombre_completo'];
                      $emailInput = $recorre['email_usuario'];
                      $deptInput = $recorre['departamento'];
                      $regional = $recorre['regional'];
                    }
                    ?>
                    <!-- nombre del usuario que hace el ticket -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Regional</label>
                      <div class="col-sm-10">
                        <div class='input-group'>
                          <input readonly type="text" class="form-control" placeholder="regional" name="regional" value="<?php echo $regional; ?>">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                      </div>
                    </div>
                    <!-- Fin nombre del usuario que hace el ticket -->


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-10">
                        <div class='input-group'>
                          <input readonly type="text" class="form-control" placeholder="Nombre" required="" pattern="^[a-zA-Z\s]+{2,254}" name="nombre_usuario" title="Nombre Apellido" value="<?php echo $nameInput; ?>">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                      </div>
                    </div>
                    <!-- Fin nombre del usuario que hace el ticket -->

                    <!-- correo del usuario que hace el ticket -->
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <div class='input-group'>
                          <input readonly type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email_ticket" required="" value="<?php echo $emailInput; ?>">
                          <input type="hidden" class="form-control" id="inputEmail" value="helpdesk@911.gob.hn" placeholder="Email" name="email" required="" title="Ejemplo@dominio.com">

                          <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        </div>
                      </div>
                    </div>
                    <!-- Fin correo del usuario que hace el ticket -->

                    <!-- Select para CatÃ¡logo de Departamento del 9-1-1 -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Departamento</label>
                      <div class="col-sm-10">
                        <div class='input-group'>
                          <input readonly type="text" class="form-control" id="id_dept" placeholder="Email" name="id_dept" required="" value="<?php echo $deptInput; ?>">

                          <span class="input-group-addon"><i class="fa fa-users"></i></span>

                        </div>
                      </div>
                    </div>
                    <!-- Fin Select Departamento -->

                    <!-- Elegir fecha para realizar asignaciÃ³n -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Catálogo de Problemas</label>
                      <div class='col-sm-10'>
                        <div class="input-group">
                          <select class="form-control" name="asunto_ticket">
                            <option style="font-weight:bold" value="0"> Seleccionar Problema </option>
                            <option style="text-align:center; font-weight:bold" value="0"> ÁREA TÉCNICA </option>
                            <?php

                            // $dept=Mysql::consulta("SELECT id_catalogo, problemas FROM tbl_catalogo");
                            $cato = "SELECT id_catalogo, problemas FROM tbl_catalogo";
                            $query1 = mysqli_query($mysqli, $cato);
                            while ($prob = mysqli_fetch_array($query1)) {
                            ?>

                              <option value="<?php echo utf8_encode($prob["problemas"]) ?>"> <?php echo $prob["id_catalogo"], ".-", $prob["problemas"] ?></option>

                            <?php } ?>
                          </select>
                          <span class="input-group-addon"><i class="fa fa-users"></i></span>
                        </div>
                      </div>
                    </div>
                    <!--Fin Elegir fecha para realizar asignaciÃ³n-->

                    <!-- Select para Tareas a realizar -->
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Describa el problema que presenta</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Escriba el problema que presenta" name="descripcion" required=""></textarea>
                      </div>
                    </div>
                    <!-- Fin Select Problemas -->

                    <!-- BotÃ³n para Abrir el ticket -->
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button id="crearT" type="submit" class="btn btn-info pull-center
                "><b>Crear Ticket</b></button>
                      </div>
                    </div>
                    <!-- Fin botÃ³n -->
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

  <!---------------------------- Fin Inicio creaciÃ³n de Tickets ---------------------------->




  <!-- Llamado del correo Registros -->
  <!-- Fin envío de correo -->



  <!-- Llamado del correo Usuarios -->
  <?php include "./lib/enviarmail_usuarios.php"; ?>
  <!-- Fin envío de correo -->













  <!--********* Script *********-->
  <!--                                                       
                <script>
                $(document).ready(function(){
                  emailS = $('#inputEmail3').val();
                  $("#crearT").click(function (){
                    window.open ("./lib/enviarmail.php?emailS="emailS);
                  });
                });
                </script>                                                    -->
  <script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
      window.history.replaceState(null, null, window.location.href);
    }
  </script>