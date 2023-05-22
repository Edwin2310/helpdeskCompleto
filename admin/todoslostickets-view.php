<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>

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
            <br>
            <h2 class="text-info"> &nbsp;&nbsp;&nbsp;Bienvenido aquí se muestran todos los Tickets ingresados al Sistema.</h2>
        </div>
    </div>
    <br>

    <?php
    /*Suma de todos los tickets*/
    $num_ticket_all = Mysql::consulta("SELECT * FROM tbl_ticket");
    $num_total_all = mysqli_num_rows($num_ticket_all);
    ?>

    <div class="container-fluid">
        <!-- <form action="process/excelTicket.php?Tipoticket=0">
                            <button type="submit" class="btn btn-success">Generar reporte de excel</button>
                            </form> -->
        <br>
        <div class="row">
            <div class="col-md-20">
                <div class="table-responsive">
                    <?php if ($_SESSION['tipo'] == 1) { ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10">
                                    <div>

                                        <form id="frmExcel" name="frmExcel" enctype="multipart/form-data" method="post">
                                            <button type="button" class="btn btn-success" onclick="excel();">Generar reporte de excel</button>
                                        </form>
                                    </div> <br>

                                </div>
                                <div class="col-md-2">
                                    <div>

                                        <form id="frmExcel" name="frmExcel" enctype="multipart/form-data" method="post">
                                            <button type="button" class="btn btn-success" onclick="pdfReport();">Generar reporte PDF</button>
                                        </form>
                                    </div> <br>

                                </div>
                            </div>

                        </div>


                    <?php
                    }
                    $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
                    mysqli_set_charset($mysqli, "utf8");

                    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                    $regpagina = 10;
                    $inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;

                    if (isset($_GET['ticket'])) {
                        if ($_GET['ticket'] == "all") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC  ";
                        } elseif ($_GET['ticket'] == "pending") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Pendiente' ";
                        } elseif ($_GET['ticket'] == "process") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='En Proceso' ";
                        } elseif ($_GET['ticket'] == "resolved") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Resuelto' ";
                        } elseif ($_GET['ticket'] == "rejected") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Rechazado'";
                        } else {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC ";
                        }
                    } else {
                        $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket ORDER BY fecha DESC ";
                    }


                    $selticket = mysqli_query($mysqli, $consulta);

                    $totalregistros = mysqli_query($mysqli, "SELECT FOUND_ROWS()");
                    $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);

                    $numeropaginas = ceil($totalregistros["FOUND_ROWS()"] / $regpagina);

                    if (mysqli_num_rows($selticket) > 0) :
                    ?>
                        <!-- Tabla que muestra todos los tickets -->
                        <div class="container-fluid">

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
                                        <th class="text-center">Ticket Asignado</th>
                                        <th class="text-center">Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ct = $inicio + 1;
                                    while ($row = mysqli_fetch_array($selticket, MYSQLI_ASSOC)) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $ct; ?></td>
                                            <td class="text-center"><?php echo $row['fecha']; ?></td>
                                            <td class="text-center"><?php echo $row['serie']; ?></td>
                                            <td class="text-center"><?php echo $row['estado_ticket']; ?></td>
                                            <td class="text-center"><?php echo $row['nombre_usuario']; ?></td>
                                            <td class="text-center"><?php echo $row['correo']; ?></td>
                                            <td class="text-center"><?php echo $row['id_dept']; ?></td>
                                            <td class="text-center"><?php echo $row['tarea_realizar']; ?></td>
                                            <td class="text-center"><?php echo $row['asignar_ticket']; ?></td>


                                            <td class="text-center">
                                                <a href="./lib/pdf.php?id=<?php echo $row['id']; ?>" style="margin: 5px" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-print" aria-hidden="true"></i></a>

                                                <!--                 Boton para eliminar
                                            <form action="" method="POST" style="display: inline-block;">
                                                <input type="hidden" name="id_del" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>-->
                                            </td>
                                        </tr>

                                    <?php
                                        $ct++;
                                    endwhile;
                                    ?>

                                </tbody>
                            </table>
                        </div>

                        <!-- Fin tabla  -->
                        <!-- Inicio conteo de tickets para cambio de página -->
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
            <!-- Fin conteo -->
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
        window.open("process/excelTicket.php?Tipoticket=0");
        // console.log("funciona");
    }

    function pdfReport() {
        window.open("lib/reportesTicket.php?Tipoticket=0");
        // console.log("funciona");
    }
</script>

<!-- /* Eliminar Tickets */
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
                }*/                /* *********** Fin Eliminar Tickets ***********  -->