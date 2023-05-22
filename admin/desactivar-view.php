<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php error_reporting(0); ?>

<?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>
    <?php
    if (isset($_POST['id_del'])) {
        $id_user = MysqlQuery::RequestPost('id_del');
        if (MysqlQuery::Eliminar("tbl_usuarios", "id_usuario='$id_user'")) {
            echo '
            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">USUARIO ELIMINADO</h4>
            <p class="text-center">
            El usuario fue eliminado del sistema con exito
            </p>
            </div>
            ';
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">OCURRIÓ UN ERROR</h4>
            <p class="text-center">
            No hemos podido eliminar el usuario
            </p>
            </div>
            ';
        }
    }

    $idA = $_SESSION['id'];
    /* Todos los admins*/
    $num_admin = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='1' AND estado = '1'");
    $num_total_admin = mysqli_num_rows($num_admin);

    /* Todos los técnicos*/
    $num_user = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='2' AND estado = '1'");
    $num_total_usuario = mysqli_num_rows($num_user);

    /* Todos los desarrolladores*/
    $num_des = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='3'AND estado = '1' ");
    $num_total_des = mysqli_num_rows($num_des);

    /*Todos los usuarios */
    $num_userGeneral = Mysql::consulta("SELECT * FROM tbl_usuarios WHERE id_rol='4' AND estado = '1'");
    $num_total_userGeneral = mysqli_num_rows($num_userGeneral);

    /* Todos los de usuarios deshabilitados*/
    $num_usuer_desac = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol >='1' AND estado = '0'");
    $num_total_desac = mysqli_num_rows($num_usuer_desac);


    /* Todos los de usuarios de la tabla admin deshabilitados*/
    $num_rol_desac = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol >='1' AND estado = '0'");
    $num_total_desac = mysqli_num_rows($num_rol_desac);

    /* Todos los de usuarios deshabilitados */
    $num_users_desac = Mysql::consulta("SELECT * FROM tbl_usuarios WHERE id_rol='4' AND  estado='0'");
    $num_total_users_desac = mysqli_num_rows($num_users_desac);


    ?>





    <!---------------------ACTIVAR USUARIO -------------------------->

    <?php
    if (isset($_POST['id_estado'])) {
        $id_user = MysqlQuery::RequestPost('id_estado');
        $numEE = MysqlQuery::RequestPost('numeroEmpleado');
        $estado = MysqlQuery::RequestPost('estado');

        if (MysqlQuery::Actualizar("tbl_usuarios", "estado='$estado'", "id_usuario='$id_user'")) {



            //CONSULTA PARA ACTIVAR ENUSO
            $sql1 = "UPDATE tbl_numeroempleado SET EnUso = '1' WHERE Codigo = '$numEE'";
            mysqli_query($mysqli, $sql1);

            //CONSULTA PARA ACTIVAR ESTADO EN TABLA USUARIOS
            $sql2 = "UPDATE tbl_usuarios SET estado = '1'  WHERE id_usuario = '$id_user'";
            mysqli_query($mysqli, $sql2);





            echo '
            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">USUARIO ACTIVADO</h4>
            <p class="text-center">
            El usuario fue activado del sistema con exito
            </p>
            </div>
            ';
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">OCURRIÓ UN ERROR</h4>
            <p class="text-center">
            No hemos podido activado el usuario
            </p>
            </div>
            ';
        }
    }

    ?>

    <!--------------------- FIN ACTIVAR USUARIO -------------------------->








    <!-- Titulo e imagen -->
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="./img/idcard.png" alt="Image" class="img-responsive animated flipInY" width="220" height="105">
            </div>
            <div class="col-sm-10">
                <br>
                <h2 class="text-info">
                    <center>Bienvenido, en esta página se muestran todos los usuarios registrados.
                </h2>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="./admin.php?view=users"><i class="fa fa-users"></i>&nbsp;&nbsp;Técnicos&nbsp;&nbsp;<span
                                class="badge">
                                <?php echo $num_total_usuario; ?>
                            </span></a></li>
                    <li><a href="./admin.php?view=admin"><i
                                class="fa fa-male"></i>&nbsp;&nbsp;Administradores&nbsp;&nbsp;<span class="badge">
                                <?php echo $num_total_admin; ?>
                            </span></a></li>
                    <li><a href="./admin.php?view=desarrolladores"><i
                                class="fa fa-desktop"></i>&nbsp;&nbsp;Desarrolladores&nbsp;&nbsp;<span class="badge">
                                <?php echo $num_total_des; ?>
                            </span></a></li>
                    <li><a href="./admin.php?view=userGeneral"><i
                                class="fa fa-user"></i>&nbsp;&nbsp;Usuarios&nbsp;&nbsp;<span class="badge">
                                <?php echo $num_total_userGeneral; ?>
                            </span></a></li>
                    <li><a href="./admin.php?view=deshabilitados"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Habilitar Otros
                            &nbsp;&nbsp;<span class="badge">
                                <?php echo $num_total_desac; ?>
                            </span></a></li>
                    <li><a href="./admin.php?view=desactivar" style="color:#c1d12d;"><i class="fa fa-user-plus"
                                style="color:#c1d12d;"></i>&nbsp;&nbsp;Habilitar Usuarios&nbsp;&nbsp;<span class="badge">
                                <?php echo $num_total_users_desac; ?>
                            </span></a></li>

                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <?php
                    $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
                    mysqli_set_charset($mysqli, "utf8");


                    $selusers_admin = mysqli_query($mysqli, "SELECT SQL_CALC_FOUND_ROWS * FROM tbl_usuarios WHERE id_rol='4' AND  estado='0'");



                    $totalregistros = mysqli_query($mysqli, "SELECT FOUND_ROWS()");
                    $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);

                    // $numeropaginas = ceil($totalregistros["FOUND_ROWS()"]/$regpagina);
                
                    if (mysqli_num_rows($selusers_admin) > 0):
                        ?>
                        <!-- Tabla que muestra los usuarios registrados en el sistema -->
                        <table id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nombre completo</th>
                                    <th class="text-center">Nombre de usuario</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Tipo de Usuario</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $ct = 1;
                                while ($row = mysqli_fetch_array($selusers_admin, MYSQLI_ASSOC)):
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo $ct; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['nombre_completo']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['nombre_usuario']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['telefono']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['email_usuario']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            if ($row['id_rol'] == 1) {
                                                echo "Administrador";
                                            }
                                            if ($row['id_rol'] == 2) {
                                                echo "Técnico";
                                            }
                                            if ($row['id_rol'] == 3) {
                                                echo "Desarrolador";
                                            }
                                            if ($row['id_rol'] == 4) {
                                                echo "Usuario";
                                            }

                                            ?>


                                        </td>
                                        <td class="text-center">
                                            <!-- actualizar información -->
                                            <a href="admin.php?view=useredit&id=<?php echo $row['id_usuario']; ?>"
                                                class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <!-------------------------- Cambiar estado----------------------------->
                                <?php
                                if ($row['estado'] == 1) {
                                    ?>
                                <form action="" method="POST" style="display: inline-block;">
                                    <input type="hidden" name="id_estado" value="<?php echo $row['id_usuario']; ?>">
                                    <input type="hidden" name="numeroEmpleado"
                                        value="<?php echo $row['numeroEmpleado']; ?>">
                                    <button type="submit" onclick="" class="btn btn-success btn-sm">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <!--                 Activar
                                    --> </button>
                                                    <?php
                                } else if ($row['estado'] == 0) {
                                    ?>
                                                        <form action="" method="POST" style="display: inline-block;">
                                                            <input type="hidden" name="id_estado" value="<?php echo $row['id_usuario']; ?>">
                                                            <input type="hidden" name="numeroEmpleado"
                                                                value="<?php echo $row['numeroEmpleado']; ?>">
                                                            <button type="submit" onclick="" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                                <!--                 Desactivado
                                    --> </button>
                                                        <?php
                                }

                                ?>
                                                    <!-------------------------- Fin Cambiar estado----------------------------->


                                        <!-- Cambio de contraseña -->
                                                    <a href="admin.php?view=cambiocontrausers&id=<?php echo $row['id_usuario']; ?>"
                                                        class="btn btn-sm btn-info"><i class="fa fa-unlock-alt"
                                                            aria-hidden="true"></i></a>
                                                </form>

                                                <!-- eliminar -->
                                                <form action="" method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="id_del" value="<?php echo $row['id_usuario']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></button>
                                                </form>





                                        </td>
                                    </tr>
                                    <?php
                                    $n++;
                                    $ct++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                        <!-- Fin tabla -->
                    <?php else: ?>
                        <h2 class="text-center">No hay usuarios registrados en el sistema</h2>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown" /><br>

            </div>
            <div class="col-sm-7 animated flip">
                <h1 class="text-danger">Lo sentimos esta página es solamente para administradores de LinuxStore</h1>
                <h3 class="text-info text-center">Inicia sesión como administrador para poder acceder</h3>
            </div>
            <div class="col-sm-1">&nbsp;</div>
        </div>
    </div>
    <?php
}
?>



<!------------------------- JS ----------------------------->


<script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
        window.history.replaceState(null, null, window.location.href);
    }
</script>






<script>

    $(document).ready(function () {
        var table = $('#example').DataTable({
            "responsive": true,
            "autoWidth": true,
            lengthChange: false,

        });
        new $.fn.dataTable.FixedHeader(table);
        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
    $(document).ready(function () {
        var table = $('#example2').DataTable({
            "responsive": true,
            "autoWidth": true,
            lengthChange: false
        });
        new $.fn.dataTable.FixedHeader(table);
        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });

</script>