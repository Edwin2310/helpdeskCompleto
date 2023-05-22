<?php if ($_SESSION['nombre'] != "" && $_SESSION['clave'] != "") { ?>

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
    }                /* *********** Fin Eliminar Tickets ***********  */
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="./img/ticket13.png" alt="Image" class="img-responsive animated tada">
            </div>

            <!-- Boton para regresar -->
            <div class="col-sm-17" aria-label="Basic example">
                <a href="./admin.php?view=ticketadmin" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Administrar Tickets</a>
            </div>
            <!-- Fin Boton para regresar -->
            <!-- boton para actualizar la pagina -->
            <div class="col-sm-17" aria-label="Basic example">
                <a href="" style="margin: 5px" class="btn btn-primary  pull-right"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar</a>
            </div>
            <!-- Fin boton para actualizar la pagina -->
            <!-- Saltos -->
            <br>
            <br>
            <br>
            <br>
            <!-- Mensaje -->
            <h2 class="text-info"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bienvenido aquí se muestran todos los Tickets Especiales.</h2>
            <!-- Fin mensaje -->
        </div>
    </div>
    <br>

    <?php

    /*Suma de tickets especiales pendientes*/

    $num_ticket_especial = Mysql::consulta("SELECT * FROM tbl_ticket WHERE estado_ticket='Pendiente'");
    $num_total_especial = mysqli_num_rows($num_ticket_especial);


    ?>
    <!-- Contenedor que muestra los tickets especiales -->
    <div class="container">
        <div class="row">
            <div class="col-md-25">
                <ul class="nav nav-pills nav-justified">
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-30">
                <div class="table-responsive">
                    <?php
                    $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
                    mysqli_set_charset($mysqli, "utf8");

                    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                    $regpagina = 10;
                    $inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;

                    if (isset($_GET['ticket'])) {
                        if ($_GET['ticket'] == "pending") {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Pendiente' ORDER BY fecha DESC LIMIT $inicio, $regpagina";
                        } else {
                            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket LIMIT $inicio, $regpagina";
                        }
                    } else {
                        $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket LIMIT $inicio, $regpagina";
                    }


                    $selticket = mysqli_query($mysqli, $consulta);

                    $totalregistros = mysqli_query($mysqli, "SELECT FOUND_ROWS()");
                    $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);

                    $numeropaginas = ceil($totalregistros["FOUND_ROWS()"] / $regpagina);

                    if (mysqli_num_rows($selticket) > 0) :
                    ?>
                        <!-- tabla que muestra los tickets especiales  -->

                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Fecha y hora</th>
                                    <th class="text-center">Ticket N°</th>
                                    <th class="text-center">Estado del Ticket</th>
                                    <th class="text-center">Nombre Usuario</th>
                                    <th class="text-center">Fecha a Realizar</th>
                                    <th class="text-center">Hora a Realizar</th>
                                    <th class="text-center">Departamento</th>
                                    <th class="text-center">Tarea a Realizar</th>
                                    <th class="text-center">Ticket Asignado a:</th>
                                    <th class="text-center">Archivo</th>
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
                                        <td class="text-center"><?php echo $row['fecha_realizar']; ?></td>
                                        <td class="text-center"><?php echo $row['hora_realizar']; ?></td>
                                        <td class="text-center"><?php echo $row['id_dept']; ?></td>
                                        <td class="text-center"><?php echo $row['tarea_realizar']; ?></td>
                                        <td class="text-center"><?php echo $row['asignar_ticket']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="./admin.php?view=archivoEs" style="margin: 5px" class="btn btn-info pull-right"><i class=""></i>&nbsp;&nbsp;Ir a Archivos</a>
                                        </td>


                                        <td class="text-center">
                                            <a href="./lib/pdf_especial.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <a href="admin.php?view=ticketeditespecial&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>

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
                        <!-- Fin tabla -->

                        <!-- Conteo de ticket para cambio de página -->
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
                    <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                            <?php if ($pagina == 1) : ?>
                                <li class="disabled">
                                    <a aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="./admin.php?view=ticketespecial&ticket=pending<?php echo $ticketselected; ?>&pagina=<?php echo $pagina - 1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>


                            <?php
                            for ($i = 1; $i <= $numeropaginas; $i++) {
                                if ($pagina == $i) {
                                    echo '<li class="active"><a href="./admin.php?view=ticketespecial&ticket=pending' . $ticketselected . '&pagina=' . $i . '">' . $i . '</a></li>';
                                } else {
                                    echo '<li><a href="./admin.php?view=ticketespecial&ticket=pending' . $ticketselected . '&pagina=' . $i . '">' . $i . '</a></li>';
                                }
                            }
                            ?>

                            <?php if ($pagina == $numeropaginas) : ?>
                                <li class="disabled">
                                    <a aria-label="Previous">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="./admin.php?view=ticketespecial&ticket=pending<?php echo $ticketselected; ?>&pagina=<?php echo $pagina + 1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
            <!-- fin conteo -->
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
                <h1 class="text-danger">Lo sentimos esta página es solamente para Técnicos de Soporte Técnico 9-1-1</h1>
                <h3 class="text-info text-center">Inicia sesión como Técnico para poder acceder</h3>
            </div>
            <div class="col-sm-1">&nbsp;</div>
        </div>
    </div>
<?php
}
?>