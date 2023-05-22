<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/*Llamado de los campos de la base de datos*/
if (isset($_POST['id_edit']) && isset($_POST['solucion_ticket']) && isset($_POST['estado_ticket']) && isset($_POST['atendido_ticket']) && isset($_POST['asignar_t'])) {
  $id_edit = MysqlQuery::RequestPost('id_edit');
  $asignar_ticket =  MysqlQuery::RequestPost('asignar_t');
  $estado_edit =  MysqlQuery::RequestPost('estado_ticket');
  $solucion_edit = utf8_encode(MysqlQuery::RequestPost('solucion_ticket'));
  $atendido =  MysqlQuery::RequestPost('atendido_ticket');


  if (MysqlQuery::Actualizar("tbl_ticket", "asignar_ticket='$asignar_ticket', atendidopor='$atendido', estado_ticket='$estado_edit', solucion='$solucion_edit', fechaatendido=''", "id=$id_edit")) {

    echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">TICKET ATENDIDO</h4>
                    <p class="text-center">
                        El ticket fue Atendido con �xito
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



<!--************************************ Page content *************************************-->
<!-- Formulario para responder a la solución del ticket y cambio de estado -->
<!--************************************* Formulario para creación de Ticket *************************************-->
<div class="container">
  <div class="row well">
    <div class="col-sm-3">
      <!--  <img src="" class="img-responsive animated tada" alt="Image"> -->
    </div>
    <div class="col-sm-9 lead">
      <a href="./admin.php?view=ticketespecial&ticket=pending" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Tickets Especiales</a>
      <h2 align="center" class="text-info ">Ticket Especial</h2>
      <h3 class="text-primary"> </h3>
    </div>
  </div><!--fin row 1-->

  <div class="row">
    <div class="center" class="col-sm-10">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title text-center"><strong><i class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;Información Ticket Especial</strong></h3>
        </div>
        <div class="panel-body">

          <div class="col-sm-4 text-center">
            <br><br><br>
            <img src="img/documentedit.png" alt=""><br><br>
            <p class="text-primary text-justify ">
              <font color="maroon"> <strong>Nota: </strong> </font>Al terminar la asignación cargar el <strong>Reporte</strong>
              y entregarlo de forma física para hacer constar el cumplimiento del mismo.
            </p>
          </div>


          <br>

          <div class="col-sm-8">
            <form class="form-horizontal" role="form" action="" method="POST">
              <fieldset>
                <input type="hidden" name="id_edit" value="<?php echo $reg['id'] ?>">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fecha</label>
                  <div class='col-sm-10'>
                    <div class="input-group">
                      <input class="form-control" readonly="" type="text" name="fecha_ticket" readonly="" value="<?php echo $reg['fecha'] ?>">
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
                      <input type="email" readonly="" class="form-control" name="email_ticket" readonly="" value="<?php echo $reg['correo'] ?>">
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
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fecha a Realizar</label>
                  <div class='col-sm-10'>
                    <div class="input-group">
                      <input class="form-control" readonly="" type="text" name="fecha_ticket" readonly="" value="<?php echo $reg['fecha_realizar'] ?>">
                      <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Hora a Realizar</label>
                  <div class="col-sm-10">
                    <div class='input-group'>
                      <input type="text" readonly="" class="form-control" name="asunto_ticket" readonly="" value="<?php echo $reg['hora_realizar'] ?>">
                      <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Ticked Asignado a:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" readonly="" rows="3" name="mensaje_ticket" readonly=""><?php echo $reg['asignar_ticket'] ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tarea a realizar:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" readonly="" rows="3" name="mensaje_ticket" readonly=""><?php echo $reg['tarea_realizar'] ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Estado del Ticket:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" readonly="" rows="3" name="estado_ticket" readonly=""><?php echo $reg['estado_ticket'] ?></textarea>
                  </div>
                </div>

                <!-- <div class="form-group">
                          <label  class="col-sm-2 control-label">Solución</label>
                          <div class="col-sm-10">
                          <textarea class="form-control" rows="3"  name="solucion_ticket" required=""><?php echo $reg['solucion'] ?></textarea>
                          </div>
                        </div> -->

                <!-- Botón para subir archivo -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Subir Archivo</label>
                  <div class="col-sm-10">
                    <a href="./admin.php?view=archivoEs" style="margin: 5px" class="btn btn-primary pull-center fa fa-cloud-upload"><i class=""></i>&nbsp;&nbsp; Cargar Archivo</a>
                  </div>
                </div>
                <!-- Fin botón subir archivo -->

                <!-- Botón para actualizar la información y enviar el correo-->
                <!-- <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10 text-center">
                              <button type="submit" class="btn btn-info pull-center" >Actualizar ticket</button>
                          </div>
                           </div> -->

              </fieldset>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------- Fin Inicio creación de Tickets ---------------------------->

<!-- Fecha y hora  -->
<script type="text/javascript">
  $(document).ready(function() {
    const today = new Date();
    var options = {
      day: 'numeric',
      month: 'long',
      year: 'numeric'
    };
    console.log(new Intl.DateTimeFormat('es-Es', options).format(today));
    document.getElementById("demo").innerHTML = new Intl.DateTimeFormat('es-Es', options).format(today);
  });
</script>
<!-- Fin Fecha y hora -->