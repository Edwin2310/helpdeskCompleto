<?php
if ($_SESSION['tipo'] == 1) {
  ?>
  <!-- Icono que se muestra en la pestaña -->
  <!DOCTYPE html>
  <html>

  <head>
    <title>Soporte Técnico 9-1-1</title>
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/911icon.ico">
    <?php include "./inc/links.php"; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

  </head>

  <body>
    <!-- Fin Icono que se muestra en la pestaña -->





    <!---------------------------- Inicio creación de Tickets ---------------------------->
    <?php
    /* Declaracion de variables a utilizar y genrador de código */
    if (isset($_POST['nombre_ticket']) && isset($_POST['email_ticket']) && isset($_POST['fechaatendido'])) {

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
      /* Fin código número de ticket */


      $email = "helpdesk@911.gob.hn";
      $nombre_ticket = utf8_encode(MysqlQuery::RequestPost('nombre_ticket'));
      $email_ticket = MysqlQuery::RequestPost('email_ticket');
      $fecharealizar_ticket = MysqlQuery::RequestPost('fecharealizar_ticket');
      $horarealizar_ticket = MysqlQuery::RequestPost('horarealizar_ticket');
      $departamento_ticket = MysqlQuery::RequestPost('departamento_ticket');
      $asignar_ticket = utf8_encode(MysqlQuery::RequestPost('tecnicos_ticket'));
      $tarearealizar_ticket = utf8_encode(MysqlQuery::RequestPost('tarearealizar_ticket'));
      $fecha = MysqlQuery::RequestPost('fechaatendido');
      $estado_ticket = utf8_encode(MysqlQuery::RequestPost('estado_ticket'));



      if (
        MysqlQuery::Guardar("tbl_ticket", "nombre_usuario, correo, serie, estado_ticket, fecha_realizar, hora_realizar, id_dept, asignar_ticket, tarea_realizar,fecha  ", "'$nombre_ticket', '$email_ticket','$id_ticket', 
    '$estado_ticket','$fecharealizar_ticket', '$horarealizar_ticket', '$departamento_ticket', '$asignar_ticket', '$tarearealizar_ticket','$fecha'")
      ) {



        echo '
      <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4 class="text-center">TICKET CREADO</h4>
      <p class="text-center">
      Ticket creado con éxito <br>El TICKET ID es: <strong>' . $id_ticket . '</strong>
      </p>
      </div>
      ';
      } else {
        echo '
      <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
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
          <!--  <img src="" class="img-responsive animated tada" alt="Image"> -->
        </div>
        <div class="col-sm-9 lead">
          <a href="./admin.php?view=ticketadmin" style="margin: 5px" class="btn btn-success pull-right"><i
              class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Administrar Tickets</a>
          <h2 align="center" class="text-info ">Ticket Especial</h2>
          <h3 class="text-primary"> Los Tickets Especiales son creados para realizar tareas especificas. </h3>
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
                    ticket. El <strong>Ticket ID</strong> será enviado a la dirección
                    de correo electrónico proporcionada en este formulario.</p>

                  <p class="text-primary text-justify ">
                    <font color="maroon"> <strong>Primer paso:</strong> Cargar el archivo con su respectiva información,
                      luego regresar a llenar la información del Ticket.
                  </p>
                  </font>
                </div>
                <br>
                <!-- Fin Imagen e instrucciones -->

                <!--************************************* Formulario para creación de Ticket *************************************-->
                <div class="col-sm-8">
                  <form class="form-horizontal" role="form" action="" method="POST">
                    <fieldset>


                      <!-- Fecha de creacion del ticket -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha</label>
                        <div class='col-sm-10'>
                          <div class="input-group">
                            <input class="form-control" type="text" name="fechaatendido" readonly=""
                              value="<?php echo date("Y-m-d H:i:s", strtotime("now")) . "\n"; ?>">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <!-- Fin fecha   -->

                      <!-- nombre del usuario que hace el ticket -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                          <div class='input-group'>
                            <input type="text" class="form-control" placeholder="Nombre" required
                              pattern="^[a-zA-Z\s]+{2,254}" name="nombre_ticket" title="Nombre Apellido">
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
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email"
                              name="email_ticket" required title="Ejemplo@dominio.com">
                            <input type="hidden" class="form-control" id="inputEmail" value="helpdesk@911.gob.hn"
                              placeholder="Email" name="email" required title="Ejemplo@dominio.com">

                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                          </div>
                        </div>
                      </div>
                      <!-- Fin correo del usuario que hace el ticket -->

                      <!-- Select para Catálogo de Departamento del 9-1-1 -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Departamento</label>
                        <div class="col-sm-10">
                          <div class='input-group'>

                            <select class="form-control" name="departamento_ticket">
                              <option style=" font-weight:bold" value="0"> Seleccionar Departamento </option>
                              <?php

                              $dept = Mysql::consulta("SELECT id_departamento, departamento FROM tbl_departamento");

                              while ($departamento = mysqli_fetch_array($dept)) {
                                ?>
                                <option value="<?php echo utf8_encode($departamento["departamento"]) ?>"> <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"] ?></option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>

                          </div>
                        </div>
                      </div>
                      <!-- Fin Select Departamento -->

                      <!-- Elegir fecha para realizar asignación -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fecha a realizarse</label>
                        <div class='col-sm-10'>
                          <div class="input-group">
                            <input class="form-control" type="text" id="fechainput" placeholder="Seleccionar Fecha"
                              name="fecharealizar_ticket" required>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                      <!-- Fin Elegir fecha para realizar asignación -->

                      <!-- Elegir Hora para realizar la asignación -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Hora a Realizar </label>
                        <div class='col-sm-10'>
                          <div class="input-group">
                            <select class="form-control" name="horarealizar_ticket" placeholder="Elegir Hora" required>
                              <option style="font-weight:bold" value="">Elegir Hora</option>
                              <option value="00:00 am">00:00 am</option>
                              <option value="01:00 am">01:00 am</option>
                              <option value="02:00 am">02:00 am</option>
                              <option value="03:00 am">03:00 am</option>
                              <option value="04:00 am">04:00 am</option>
                              <option value="05:00 am">05:00 am</option>
                              <option value="06:00 am">06:00 am</option>
                              <option value="07:00 am">07:00 am</option>
                              <option value="08:00 am">08:00 am</option>
                              <option value="09:00 am">09:00 am</option>
                              <option value="10:00 am">10:00 am</option>
                              <option value="11:00 am">11:00 am</option>
                              <option value="12:00 pm">12:00 pm</option>
                              <option value="13:00 pm">13:00 pm</option>
                              <option value="14:00 pm">14:00 pm</option>
                              <option value="15:00 pm">15:00 pm</option>
                              <option value="16:00 pm">16:00 pm</option>
                              <option value="17:00 pm">17:00 pm</option>
                              <option value="18:00 pm">18:00 pm</option>
                              <option value="19:00 pm">19:00 pm</option>
                              <option value="20:00 pm">20:00 pm</option>
                              <option value="21:00 pm">21:00 pm</option>
                              <option value="22:00 pm">22:00 pm</option>
                              <option value="23:00 pm">23:00 pm</option>
                            </select>
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                          </div>
                        </div>
                      </div>

                      <!-- Fin Elegir Hora para realiza la asignación -->

                      <!-- select para asignar ticket -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Asignar Ticket </label>
                        <div class='col-sm-10'>
                          <div class="input-group">
                            <select class="form-control" name="asignar_ticket" placeholder="asignar_ticket"
                              onchange="asignar(value)">
                              <option style="font-weight:bold" value="">Asignar</option>
                              <?php
                              $dept = Mysql::consulta("SELECT id_usuario, nombre_completo FROM tbl_admin  WHERE id_rol = '2'");
                              while ($ticket = mysqli_fetch_array($dept)) {
                                ?>
                                <option value="<?php echo $ticket["nombre_completo"] ?>"> <?php echo $ticket["nombre_completo"] ?></option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                          </div>
                        </div>
                      </div>
                      <!-- Fin Select asignar ticket -->

                      <!-- Select para Tareas a realizar -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Técnicos Asignados</label>
                        <div class="col-sm-10">
                          <textarea readonly class="form-control" rows="3" name="tecnicos_ticket" required
                            id="asignarT"></textarea>
                          <!-- <input type="text" class="form-control" name="tecnicos_ticket" required="" id="asignarT"> -->
                        </div>
                      </div>
                      <!-- Fin Select Problemas -->

                      <!-- Select para Tareas a realizar -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Problema Presentado</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" placeholder="Escriba el problema presentado"
                            name="tarearealizar_ticket" required></textarea>
                        </div>
                      </div>
                      <!-- Fin Select Problemas -->





                      <!-- Select para estado_bitacora-->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Estado de Ticket</label>
                        <div class="col-sm-10">
                          <div class='input-group'>

                            <select class="form-control" name="estado_ticket" required>
                              <option value=""> -Seleccionar Estado- </option> <!----AQUI PONER LOS MODELOS ----->
                            <option value="Pendiente">Pendiente</option>
                          </select>
                          <span class="input-group-addon"><i class="fa fa-check-circle"></i></span>

                        </div>
                      </div>
                    </div>
                    <!-- Botón para subir archivo -->
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Subir Archivo</label>
                        <div class="col-sm-10">
                          <a href="./admin.php?view=archivoEs" style="margin: 5px"
                            class="btn btn-success pull-center fa fa-cloud-upload"><i class=""></i>&nbsp;&nbsp; Cargar
                            Archivo</a>
                        </div>
                      </div>
                      <!-- Fin botón subir archivo -->


                      <!-- Botón para Abrir el ticket -->
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-info pull-center"><b>Crear Ticket</b></button>
                        </div>
                      </div>
                      <!-- Fin botón -->
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---------------------------- Fin Inicio creación de Tickets ---------------------------->



    <?php
}
?>






  <!--********* Script *********-->
  <!-- Fecha y hora  -->
  <script type="text/javascript">
    $(document).ready(function () {
      $("#fechainput").datepicker();
    });
  </script>
  <!-- Fin Fecha y hora -->

  <!-- FUNCION ASIGNAR TECNICO -->
  <script type="text/javascript">
    asignados = "";
    c = 0;

    function asignar(tecnico) {
      if (c == 0) {
        asignados += tecnico;
      } else {
        asignados += " - " + tecnico;
      }

      // console.log(tecnico);
      $('#asignarT').val(asignados);
      c++;

    }
  </script>
  <!-- FUNCION ASIGNAR TECNICO -->



  <!-- Fin Fecha y hora -->

  <script>
    $(document).ready(function () {
      var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        /* maxItemCount:,
        searchResultLimit:,
        renderChoiceLimit:5 */
      });
    });
  </script>

  <script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
      window.history.replaceState(null, null, window.location.href);
    }
  </script>




  <!-- Llamado del correo Registros -->
  <?php include "./lib/enviarmail.php"; ?>
  <!-- Fin envío de correo -->



  <!-- Llamado del correo Usuarios -->
  <?php include "./lib/enviarmail_usuarios.php"; ?>
  <!-- Fin envío de correo -->