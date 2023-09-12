<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/*Llamado de los campos de la base de datos*/
if (isset($_POST['id_edit']) && isset($_POST['asignar_ticket']) && isset($_POST['estado_ticket']) && isset($_POST['solucion']) && isset($_POST['fecha'])) {
  $id_edit = MysqlQuery::RequestPost('id_edit');
  $asignar_ticket = MysqlQuery::RequestPost('asignar_ticket');
  $estado_edit = MysqlQuery::RequestPost('estado_ticket');
  $solucion_edit = utf8_encode(MysqlQuery::RequestPost('solucion'));
  $fecha = MysqlQuery::RequestPost('fecha');
  $email = "helpdesk@911.gob.hn";


  if (
    MysqlQuery::Actualizar("tbl_ticket", "asignar_ticket='$asignar_ticket', estado_ticket='$estado_edit', solucion='$solucion_edit', 
  fecha='$fecha'", "id=$id_edit")
  ) {

    echo '
    <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
    <h4 class="text-center">TICKET ATENDIDO</h4>
    <p class="text-center">
    El ticket Fue Atendido Éxitosamente.
    </p>
    </div>
    ';
  }
}

$id = MysqlQuery::RequestGet('id');
$sql = Mysql::consulta("SELECT * FROM tbl_ticket WHERE id= '$id'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
/* Fin Llamado de los campos de la base de datos*/




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
            <input class="form-control" readonly="" type="text" name="serie_ticket" readonly="" value="<?php echo $reg['serie'] ?>">
            <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Ticket Asignado</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <input class="form-control" readonly="" type="text" name="asignar_ticket" readonly="" value="<?php echo $reg['asignar_ticket'] ?>">
            <span class="input-group-addon"><i class="fa fa-users"></i></span>
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
            <input type="hidden" class="form-control" id="inputEmail" value="helpdesk@911.gob.hn" placeholder="Email" name="email" required="" title="Ejemplo@dominio.com">

            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Departamento</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="departamento_ticket" readonly="" value="<?php echo $reg['id_dept'] ?>">
            <span class="input-group-addon"><i class="fa fa-building"></i></span>
          </div>
        </div>
      </div>

      <!--  Select Problema -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Problema</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="asunto" readonly="" value="<?php echo $reg['asunto'] ?>">
            <span class="input-group-addon"><i class="fa fa-exclamation-triangle"></i></span>
          </div>
        </div>
      </div>
      <!-- Fin Select Problema -->

      <!--  Select Problema -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="descripcion" readonly="" value="<?php echo $reg['descripcion'] ?>">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          </div>
        </div>
      </div>
      <!-- Fin Select Problema -->


      <!-- Select para estado_bitacora-->
      <div class="form-group">
        <label class="col-sm-2 control-label">Estado (Actual)</label>
        <div class="col-sm-10">
          <div class='input-group'>
            <input type="text" readonly="" class="form-control" name="estado_ticket" readonly="" value="<?php echo $reg['estado_ticket'] ?>">
            <span class="input-group-addon"><i class="fa fa-circle"></i></span>
          </div>
        </div>
      </div>
      <!-- Fin Select para estado_bitacora-->



      <!-- select para asignar ticket -->
      <?php
      if ($_SESSION['tipo'] == 1) { //SI EL TIPO DE USUARIO ES IGUL A 1 O ADMINISTRADOR QUE ME MUESTRE TODOS LOS TICKETS
      ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Asignar Ticket </label>
          <div class='col-sm-10'>
            <div class="input-group">
              <input type="hidden" name="regional" value="<?php echo $reg['regional'] ?>">

              <select class="form-control" name="asignar_ticket" placeholder="asignar_ticket" required>
                <option value="" required>-Asignar-</option>
                <?php
                $regional = $_SESSION['regional']; //LLAMANDO LA VARIABLE DESDE EL FORMULARIO CON $_SESION PARA CONSULTAR REGIONAL
                //$dept = Mysql::consulta("SELECT id_usuario,regional,nombre_usuario FROM tbl_admin  WHERE id_rol = '2' OR id_rol = '3' AND regional = '$regional'");
                $dept = Mysql::consulta("SELECT id_usuario,nombre_usuario,regional FROM tbl_admin  WHERE regional = '$regional' AND id_rol = '2' OR id_rol = '3'");
                while ($ticket = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo $ticket["nombre_usuario"] ?>"> <?php echo $ticket["nombre_usuario"] ?>
                  </option>
                <?php } ?>
              </select>
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- Fin Select asignar ticket -->





      <!-- Select para Actualizar estado_bitacora-->

      <div class="form-group">
        <label class="col-sm-2 control-label">Actualizar Estado</label>
        <div class="col-sm-10">
          <div class='input-group'>

            <select class="form-control" name="estado_ticket" required>
              <option value=""> -Seleccionar Estado- </option> <!----AQUI PONER LOS MODELOS ----->
              <?php

              $dept = Mysql::consulta("SELECT id_estado_bitacora, estado_bitacora FROM tbl_estado_bitacora");

              while ($estado_bitacora = mysqli_fetch_array($dept)) {
              ?>
                <option value="<?php echo utf8_encode($estado_bitacora["estado_bitacora"]) ?>"> <?php echo $estado_bitacora["id_estado_bitacora"], ".-", $estado_bitacora["estado_bitacora"] ?></option>
              <?php } ?>
            </select>
            <span class="input-group-addon"><i class="fa fa-check-circle"></i></span>

          </div>
        </div>
      </div>
      <!-- Fin Select estado_bitacora -->



      <div class="form-group">
        <label class="col-sm-2 control-label">Solución</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="3" name="solucion" required=""><?php echo ($reg['solucion']) ?></textarea>
        </div>
      </div>


      <!-- Fecha de creacion del ticket -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Fecha</label>
        <div class='col-sm-10'>
          <div class="input-group">
            <input class="form-control" type="text" name="fecha" readonly="" value="<?php echo date("Y-m-d H:i:s", strtotime("now")) . "\n"; ?>">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          </div>
        </div>
      </div>
      <!-- Fin fecha   -->
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




<!--********* Script *********-->
<!-- Fecha y hora  -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#fechainput").datepicker();
  });
</script>
<!-- Fin Fecha y hora -->




<!-- Fin Fecha y hora -->



<script>
  // EVITAR REENVIO DE DATOS.
  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
  }
</script>




<!-- Llamado del correo Usuarios -->
<?php include "./lib/enviarmail_pendiente.php"; ?>
<!-- Fin envío de correo -->