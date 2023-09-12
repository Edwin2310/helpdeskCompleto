<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php if ($_SESSION['nombre'] != "" && $_SESSION['clave'] != "") { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="./img/email2.png" alt="Image" class="img-responsive animated tada">
            </div>

            <!-- Boton para regresar -->
            <div class="col-sm-17" aria-label="Basic example">
                <a href="./admin.php?view=ticketadmin" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Administrar Tickets</a>
            </div>
            <!-- boton para actualizar la pagina -->
            <div class="col-sm-17" aria-label="Basic example">
                <a href="" style="margin: 5px" class="btn btn-primary  pull-right"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar</a>
            </div>
            <br>
            <br>
            <br>
            <h2 class="text-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bienvenido aquí se muestran todos los Tickets
                Pendientes.</h2>

        </div>

    </div>
    </div>
    <br>

    <?php

    /* Eliminar Tickets */
    if (isset($_POST['id_del'])) {
        $id = MysqlQuery::RequestPost('id_del');
        if (MysqlQuery::Eliminar("tbl_ticket", "id='$id'")) {
            echo '
                            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="text-center">TICKET ELIMINADO</h4>
                                <p class="text-center">
                                    El ticket fue eliminado del sistema con exito
                                </p>
                            </div>
                        ';
        } else {
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
    } /* *********** Fin Eliminar Tickets ***********  */




    /*Suma de los tickets pendientes */


    /* Tickets pendientes*/
    $num_ticket_pend = Mysql::consulta("SELECT estado_ticket FROM tbl_ticket");
    $num_total_pend = mysqli_num_rows($num_ticket_pend);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-25">
                <ul class="nav nav-pills nav-justified">
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-25">
                <div class="table-responsive">
                    <?php if ($_SESSION['tipo'] == 1) { ?>
                        <div>
                            <form id="frmExcel" name="frmExcel" enctype="multipart/form-data" method="post">
                                <button type="button" class="btn btn-success" onclick="excel();">Generar reporte de
                                    excel</button>
                            </form>
                        </div> <br>
                    <?php
                    }

                    $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
                    mysqli_set_charset($mysqli, "utf8");

                    $pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
                    $regpagina = 10;
                    $inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;

                    if ($_SESSION['tipo'] == 1) { //SI EL TIPO DE USUARIO ES IGUL A 1 O ADMINISTRADOR QUE ME MUESTRE TODOS LOS TICKETS
                        if (isset($_GET['ticket'])) {
                            if ($_GET['ticket'] == "pending") {
                                $asignar_ticket = $_SESSION['nombre']; //LLAMANDO LA VARIABLE DESDE EL FORMULARIO CON $_SESION PARA CONSULTA POR TECNICO
                                $regional = $_SESSION['regional']; //LLAMANDO LA VARIABLE DESDE EL FORMULARIO CON $_SESION PARA CONSULTAR REGIONAL
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket = 'Pendiente' AND regional ='$regional' ORDER BY fecha DESC";
                            } else {
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC ";
                            }
                        } else {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC  ";
                        }
                    }
                    if ($_SESSION['tipo'] == 2) { //SI EL USUARIO ES TECNICO QUE ME MUESTRE SOLO ESTE QUERY

                        if (isset($_GET['ticket'])) {
                            if ($_GET['ticket'] == "pending") {
                                $asignar_ticket = $_SESSION['nombre']; //LLAMANDO LA VARIABLE DESDE EL FORMULARIO CON $_SESION PARA CONSULTA POR TECNICO
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE asignar_ticket = '$asignar_ticket' AND estado_ticket='Pendiente' ORDER BY fecha DESC ";
                                // $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Pendiente'  ORDER BY fecha DESC  ";

                            } else {
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC ";
                            }
                        } else {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC  ";
                        }
                    }

                    if ($_SESSION['tipo'] == 3) { //SI EL USUARIO ES TECNICO QUE ME MUESTRE SOLO ESTE QUERY

                        if (isset($_GET['ticket'])) {
                            if ($_GET['ticket'] == "pending") {
                                $asignar_ticket = $_SESSION['nombre']; //LLAMANDO LA VARIABLE DESDE EL FORMULARIO CON $_SESION PARA CONSULTA POR TECNICO
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE asignar_ticket = '$asignar_ticket' AND estado_ticket='Pendiente' ORDER BY fecha DESC ";
                                // $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Pendiente'  ORDER BY fecha DESC  ";

                            } else {
                                $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC ";
                            }
                        } else {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC  ";
                        }
                    }

                    $selticket = mysqli_query($mysqli, $consulta);

                    $totalregistros = mysqli_query($mysqli, "SELECT FOUND_ROWS()");
                    $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);

                    $numeropaginas = ceil($totalregistros["FOUND_ROWS()"] / $regpagina);

                    if (mysqli_num_rows($selticket) > 0) :
                    ?>

                        <!-- Tabla que muestra los tickets pendientes -->
                        <table id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Fecha y hora</th>
                                    <th class="text-center">Ticket N°</th>
                                    <th class="text-center">Estado del Ticket</th>
                                    <th class="text-center">Nombre Usuario</th>
                                    <th class="text-center">Correo Usuario</th>
                                    <th class="text-center">Departamento</th>
                                    <th class="text-center">Problema</th>
                                    <th class="text-center">Descripcion</th>
                                    <th class="text-center">Ticket Asignado</th>
                                    <th class="text-center">Regional</th>
                                    <th class="text-center">Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $ct = $inicio + 1;
                                while ($row = mysqli_fetch_array($selticket, MYSQLI_ASSOC)) :
                                ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo $ct; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['fecha']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['serie']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['estado_ticket']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['nombre_usuario']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['email']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['id_dept']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['asunto']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['descripcion']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['asignar_ticket']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['regional']; ?>
                                        </td>




                                        <td class="text-center">
                                            <a href="./lib/pdf_pendiente.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <a href="admin.php?view=ticketedit&id=<?php echo $row['id']; ?>&pro=0" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <!--                 Boton para eliminar-->
                                            <?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>
                                                <!--   Boton para eliminar -->
                                                <form action="" method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="id_del" value="<?php echo $row['id']; ?>">

                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            <?php } ?>
                                        </td>


                                    </tr>
                                <?php
                                    $ct++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                        <!-- Fin tabla  -->
                        <!-- Conteo de ticekts para cambiar de página -->
                    <?php else : ?>
                        <h2 class="text-center">No hay tickets registrados en el sistema</h2>
                    <?php endif; ?>
                </div>

                <?php
                if ($numeropaginas >= 1) :
                    if (isset($_GET['ticket'])) {
                        $ticketselected = $_GET['ticket'];
                    } else {
                        $ticketselected = "all";
                    }
                ?>

                <?php endif; ?>
            </div>
            <!-- Fin -->
        </div>
    </div><!--container principal-->

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

<script type="text/javascript">
    function excel() {
        window.open("process/excelTicket.php?Tipoticket=2");
        // console.log("funciona");
    }
</script>