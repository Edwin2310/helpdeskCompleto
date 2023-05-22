<?php if ($_SESSION['nombre'] != "" && $_SESSION['clave'] != "") { ?>
  <div class="container">

    <div class="row">
      <div class="col-sm-2">
        <img src="./img/email2.png" alt="Image" class="img-responsive animated tada">
      </div>

      <!-- Boton para regresar -->
      <div class="col-sm-17" aria-label="Basic example">
        <a href="index.php" style="margin: 5px" class="btn btn-success pull-right"><i
            class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Inicio</a>
      </div>
      <!-- boton para actualizar la pagina -->

      <div class="col-sm-17" aria-label="Basic example">
        <a href="" style="margin: 5px" class="btn btn-primary  pull-right"><i
            class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar</a>


      </div>
      <br>
      <br>
      <br>
      <h3 class="text-info" style="text-align:center">&nbsp;&nbsp;&nbsp;&nbsp; Bienvenido aquí se muestran los Tickets que
        han ingresado al Sistema</h3>
      <br>
      <div class="col-sm-8 lead">
        <h5 style="text-align:center"><i ">&nbsp;&nbsp;&nbsp;&nbsp;<font color=" maroon"> Para poder ver los Tickets de
            clic en el bóton del Ticket deseado. </i></h5>
        <br>
      </div>
    </div><!--fin row 1-->
  </div>
  </div>
  </div>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-15">

        <!-- Información ticket pendiente-->
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading text-center"><i class="fa fa-ticket"></i>&nbsp;<strong>Tickets Pendientes</strong>
            </div>
            <div class="panel-body text-center">
              <img src="./img/ticket-add.png" alt="">
              <br>
              <a type="button" class="btn btn-info" href="./admin.php?view=ticketpendiente&ticket=pending">Abrir Tickets
                Pendientes</a>
            </div>
          </div>
        </div><!--fin col-md-6-->

        <!-- Información Ticket en Proceso-->
        <div class="col-sm-6">
          <div class="panel panel-warning">
            <div class="panel-heading text-center"><i class="fa fa-ticket"></i>&nbsp;<strong>Tickets En Proceso</strong>
            </div>
            <div class="panel-body text-center">
              <img src="./img/ticketpro.png" alt="">
              <br>
              <a type="button" class="btn btn-info" href="./admin.php?view=ticketenproceso&ticket=process">Tickets en
                Procesos</a>
            </div>
          </div>
        </div><!--fin col-md-6-->

        <!-- Información Ticket Resuelto-->
        <div class="col-sm-6">
          <div class="panel panel-success">
            <div class="panel-heading text-center"><i class="fa fa-ticket"></i>&nbsp;<strong>Tickets Resueltos</strong>
            </div>
            <div class="panel-body text-center">
              <img src="./img/ticketacep.png" alt="">
              <br>
              <a type="button" class="btn btn-info" href="./admin.php?view=ticketresuelto&ticket=resolved">Abrir Tickets
                Resueltos</a>
            </div>
          </div>
        </div><!--fin col-md-6-->

        <!-- Información Ticket Rechazado-->
        <div class="col-sm-6">
          <div class="panel panel-danger">
            <div class="panel-heading text-center"><i class="fa fa-tickett"></i>&nbsp;<strong>Tickets Rechazados</strong>
            </div>
            <div class="panel-body text-center">
              <img src="./img/ticket-remove.png" alt="">
              <br>
              <a type="button" class="btn btn-info" href="./admin.php?view=ticketrechazado&ticket=rejected">Abrir Tickets
                Rechazados</a>
            </div>
          </div>
        </div><!--fin col-md-6-->



        <?php
} else {
  ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown" /><br>

            </div>
            <div class="col-sm-7 animated flip">
              <h1 class="text-danger">Lo sentimos esta página es solamente para Tecnicos de Soporte Técnico 9-1-1</h1>
              <h3 class="text-info text-center">Inicia sesión como Tecnicos para poder acceder</h3>
            </div>
            <div class="col-sm-1">&nbsp;</div>
          </div>
        </div>
        <?php
}
?>


      <!-- <?php

      /* Eliminar Tickets */
      /* if(isset($_POST['id_del'])){
  $id = MysqlQuery::RequestPost('id_del');
  if(MysqlQuery::Eliminar("ticket", "id='$id'")){
      echo '
          <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="text-center">TICKET ELIMINADO</h4>
              <p class="text-center">
                  El ticket fue eliminado del sistema con exito
              </p>
          </div>
      ';
  }else{
      echo '
          <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="text-center">OCURRIÓ UN ERROR</h4>
              <p class="text-center">
                  No hemos podido eliminar el ticket
              </p>
          </div>
      '; 
  }
  }*//* *********** Fin Eliminar Tickets ***********  */
      ?> -->