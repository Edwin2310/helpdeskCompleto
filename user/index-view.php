<?php
if (isset($_GET['view'])) {
  $content = $_GET['view'];
  $WhiteList = ["index", "ticket", "ticketcon", "ticketadmin", "registro", "configuracion", "configuracionUser", "calendario", "informe", "bitacora"];
  if (in_array($content, $WhiteList) && is_file("./user/" . $content . "-view.php")) {
    include "./user/" . $content . "-view.php";
  } else {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="./img/Stop.png" alt="Image" class="img-responsive" /><br>


        </div>
        <div class="col-sm-7 text-center">
          <h1 class="text-danger">Lo sentimos, la opción que ha seleccionado no se encuentra disponible</h1>
          <h3 class="text-info">Por favor intente nuevamente</h3>
        </div>
        <div class="col-sm-1">&nbsp;</div>
      </div>
    </div>
    <?php
  }
}
?>
<!-- Bienvenida al soporte tecnico 9-1-1-->
<div class="container">
  <div class="row well">
    <div class="col-sm-3">
      <img src="img/2333501.png" class="img-responsive animated flipInY" alt="Image">
    </div>
    <div class="col-sm-9 lead">
      <h2 class="text-info">
        <center>Bienvenido al Centro de Soporte Técnico 9-1-1
      </h2>
      <p> Si tiene problemas con su equipo nos puede enviar un Ticket, nosotros lo responderemos y solucionaremos su
        problema.
        <br>
        <br>Si ya nos ha enviado un ticket puede consultar el estado de este mediante su <strong>Ticket ID</strong>.
      </p>
    </div>
  </div><!--fin row 1-->


  <!-- Información Nuevo Ticket-->
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading text-center"><i class="fa fa-file-text"></i>&nbsp;<strong>Nuevo Ticket</strong></div>
        <div class="panel-body text-center">
          <img src="./img/tickett.png" alt="" height="140">
          <h4>Abrir un Ticket</h4>
          <p class="text-justify">Si tiene un problema con cualquier equipo o Sistema repórtelo creando un Ticket y le
            ayudaremos a solucionarlo.</em></p>
          <p>Para abrir un <strong>ticket</strong> has click en el siguiente botón.</p>
          <a type="button" class="btn btn-info" href="./index.php?view=ticket">Nuevo Ticket</a>
        </div>
      </div>
    </div><!--fin col-md-6-->


    <!-- Comprobar estado del ticket-->
    <?php
    $aa = $_SESSION['nombre'];

    if ($_SESSION['tipoUser'] == 2) {
      $nameU = "SELECT nombre_completo, email_usuario, departamento FROM tbl_admin WHERE nombre_usuario = '$aa'";
    } else {
      $nameU = "SELECT nombre_completo, email_usuario, departamento FROM tbl_usuarios WHERE nombre_usuario = '$aa'";
    }

    $nameImprimir = mysqli_query($mysqli, $nameU);
    while ($recorre = mysqli_fetch_array($nameImprimir)) {
      $nameInput = $recorre['nombre_completo'];
      $emailInput = $recorre['email_usuario'];
      $deptInput = $recorre['departamento'];
    }
    ?>
    <div class="col-sm-6">
      <div class="panel panel-danger">
        <div class="panel-heading text-center"><i class="fa fa-link"></i>&nbsp;<strong>Comprobar estado de
            Ticket</strong></div>
        <div class="panel-body text-center">
          <img src="./img/descarga.png" alt="" height="93">
          <h4>Consultar estado de Ticket</h4>
          <form class="form-horizontal" role="form" method="GET" action="./index.php">
            <input type="hidden" name="view" value="ticketcon">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email_consul" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">ID Ticket</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="id_consul" placeholder="ID Ticket" required="">
              </div>
            </div>
            <p>Para enviar la <strong>consulta</strong> has click en el siguiente botón.</p>
            <button type="submit" name="btnLogin" class="btn btn-success">Consultar Ticket</button>
          </form>
        </div>
      </div>
    </div><!--fin col-md-6-->
  </div><!--fin row 2-->
</div><!--fin container-->