<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/* Eliminar ticket */
if (isset($_POST['del_ticket'])) {
    $id = MysqlQuery::RequestPost('del_ticket');

    if (MysqlQuery::Eliminar("tbl_ticket", "serie='$id'")) {
        echo '
          <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="text-center">TICKET ELIMINADO</h4>
              <p class="text-center">
                  El ticket fue eliminado con exito
              </p>
          </div>
      ';
    } else {
        echo '
          <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="text-center">OCURRIÓ UN ERROR</h4>
              <p class="text-center">
                  Lo sentimos, no hemos podido eliminar el ticket
              </p>
          </div>
      ';
    }
}
/* Fin eliminar */


$email_consul = MysqlQuery::RequestGet('email_consul');
$id_colsul = MysqlQuery::RequestGet('id_consul');

$consulta_tablaTicket = Mysql::consulta("SELECT * FROM tbl_ticket WHERE serie= '$id_colsul' AND email='$email_consul'");
if (mysqli_num_rows($consulta_tablaTicket) >= 1) {
    $lsT = mysqli_fetch_array($consulta_tablaTicket, MYSQLI_ASSOC);
    ?>


    <div class="container">
        <div class="row well">
            <div class="col-sm-2">
                <img src="img/time.png" class="img-responsive animated flipInY" alt="Image">
            </div>
            <div class="col-sm-9">
                <a href="index.php" class="btn btn-primary  pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a
                    Inicio</a>
            </div>
            <div class="col-sm-10 lead text-justify">
                <h2 class="text-info">Estado de ticket de soporte</h2>
                <p>Si su <strong>ticket</strong> no ha sido solucionado aún, espere pacientemente, estamos trabajando para
                    poder resolver su problema y darle una solución.</p>
            </div>
        </div><!--fin row well-->
        <div class="row">
            <div class="col-sm-15">
                <div class="panel panel-success">

                    <div class="panel-heading text-center">
                        <h4><i class="fa fa-ticket"></i> Ticket &nbsp;#
                            <?php echo $lsT['serie']; ?>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                            <form class="form-horizontal" role="form" action="" method="POST">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img class="img-responsive" alt="Image" src="img/repair2.jpg">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-6"><strong>Fecha:</strong>
                                                    <?php echo $lsT['fecha']; ?>
                                                </div>
                                                <div class="col-sm-6"><strong>Estado del Ticket:</strong> <span
                                                        style="color:#0C2873; font-size:16px;"><strong>
                                                            <?php echo $lsT['estado_ticket']; ?>
                                                        </strong></span></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6"><strong>Nombre:</strong>
                                                    <?php echo $lsT['nombre_usuario']; ?>
                                                </div>
                                                <div class="col-sm-6"><strong>Email:</strong>
                                                    <?php echo $lsT['email']; ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6"><strong>Departamento:</strong>
                                                    <?php echo $lsT['id_dept']; ?>
                                                </div>
                                                <div class="col-sm-6"><strong>Catálogo de problemas</strong>
                                                    <?php echo $lsT['asunto']; ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12"><strong>Solución:</strong>
                                                    <?php echo $lsT['solucion']; ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12"><strong>Atendido por:</strong>
                                                    <?php echo $lsT['atendidopor']; ?>
                                                </div>
                                            </div>


                                            <!-- Panel de botones  -->
                                            <div class="panel-footer text-center">
                                                <div class="row">
                                                    <!--  <h4>Opciones</h4> -->
                                                    <br>
                                                    <br class="hidden-lg hidden-md hidden-sm">
                                                    <div class="col-sm-offset-2 col-sm-10 text-center">
                                                        <a href="./lib/pdf_ticket.php?serie=<?php echo $lsT['serie']; ?>"
                                                            class="btn btn-sm btn-success" target="_blank"><i
                                                                aria-hidden="true">&nbsp; <b>Guardar ticket en
                                                                    PDF</i></a></b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            <?php } else { ?>
                <div class="container">
                    <div class="row  animated fadeInDownBig">
                        <div class="col-sm-4">
                            <img src="img/error.png" alt="Image" class="img-responsive" /><br>

                        </div>
                        <div class="col-sm-7 text-center">
                            <h1 class="text-danger">Lo sentimos ha ocurrido un error al hacer la consulta, esto se debe a lo
                                siguiente:</h1>
                            <h3 class="text-warning"><i class="fa fa-check"></i> El Ticket ha sido eliminado completamente.
                            </h3>
                            <h3 class="text-warning"><i class="fa fa-check"></i> Los datos ingresados no son correctos.</h3>
                            <br>
                            <h3 class="text-primary"> Por favor verifique que su <strong>id ticket</strong> y
                                <strong>email</strong> sean correctos, e intente nuevamente.
                            </h3>
                            <h4><a href="index.php" class="btn btn-primary"><i class="fa fa-reply"></i> Regresar a
                                    Soporte</a></h4>
                        </div>
                        <div class="col-sm-1">&nbsp;</div>
                    </div>
                </div>
            <?php } ?>


            <!-- <script>
  $(document).ready(function(){
    $("button#save").click(function (){
       window.open ("./lib/pdf_user.php?id="+$(this).attr("data-id"));
    });
  });
</script> -->