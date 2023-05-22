<?php
if ($_SESSION['tipo'] == 1  ||  $_SESSION['tipo'] == 2) {

    //Arreglo con mensajes de errores
    $errores = [];


?>
    <style type="text/css">
        .alerta {
            padding: .5rem;
            text-align: center;
            color: #FFFFFF;
            font-weight: 700;
            text-transform: uppercase;
            margin: 1rem 0;


        }

        .error {

            background-color: rgb(189, 7, 7);

        }
    </style>
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
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    </head>

    <body>
        <!-- Fin Icono que se muestra en la pestaña -->





        <!---------------------------- Inicio creación de Tickets ---------------------------->
        <?php
        /* Declaracion de variables a utilizar y genrador de código */
        if (isset($_POST['turnos']) && isset($_POST['encargado']) && isset($_POST['fechaatendido'])) {

            /*Este código nos servira para generar un numero diferente para cada ticket*/
            $codigo = "";
            $longitud = 2;
            for ($i = 1; $i <= $longitud; $i++) {
                $numero = rand(0, 9);
                $codigo .= $numero;
            }
            $num = Mysql::consulta("SELECT * FROM tbl_bitacoras");
            $numero_filas = mysqli_num_rows($num);
            $numero_filas_total = $numero_filas + 1;
            $id_ticket = "BT" . $codigo . "C" . $numero_filas_total;

            /* Fin código número de ticket */






            //Ejecutar el codigo despues de que el usuario envia el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $email = "helpdesk@911.gob.hn";
                $estado_ticket = "Registrado";
                $departamento_ticket = MysqlQuery::RequestPost('departamento_ticket');
                $fecha =  MysqlQuery::RequestPost('fechaatendido');
                $regional_ticket = utf8_encode(MysqlQuery::RequestPost('regional_ticket'));
                $turnos =  MysqlQuery::RequestPost('turnos');
                $encargado = utf8_encode(MysqlQuery::RequestPost('encargado'));
                $asignar_ticket = utf8_encode(MysqlQuery::RequestPost('tecnicos_ticket'));
                $descripcion_equipos = utf8_encode(MysqlQuery::RequestPost('descripcion_equipos'));
                $estado_bitacora = utf8_encode(MysqlQuery::RequestPost('estado_bitacora'));
                $problema_presentado = utf8_encode(MysqlQuery::RequestPost('problema_presentado'));
                $area_solicitud = utf8_encode(MysqlQuery::RequestPost('area_solicitud'));
                $solucion = utf8_encode(MysqlQuery::RequestPost('solucion'));


                if (!$fecha) {
                    $errores[] = "La Fecha es obligatorio";
                }

                if (!$turnos) {
                    $errores[] = "Debes añadir el Turno";
                }

                if (!$departamento_ticket) {
                    $errores[] = "Debes añadir un Departamento";
                }

                if (!$regional_ticket) {
                    $errores[] = "Debes añadir una Regional";
                }

                if (!$encargado) {
                    $errores[] = "El nombre de Encargado es obligatorio";
                }

                if (!$asignar_ticket) {
                    $errores[] = "Debes añadir el nombre del Técnico";
                }

                if (!$area_solicitud) {
                    $errores[] = "Debes añadir una Área";
                }


                if (!$descripcion_equipos) {
                    $errores[] = "Debes añadir una Descripcion";
                }


                if (strlen($problema_presentado) < 57) {
                    $errores[] = "La descripcion del Problema es obligatorio y debe tener al menos 57 caracteres";
                }

                if (strlen($solucion) < 113) {
                    $errores[] = "La descripcion de la Solucion es obligatoria y debe tener al menos 113 caracteres";
                }

                if (!$estado_bitacora) {
                    $errores[] = "Debes añadir un Estado";
                }


                if (empty($errores)) {

                    if (MysqlQuery::Guardar("tbl_bitacoras", "fecha,serie,turnos,departamento_ticket,regional_ticket,encargado,tecnicos_ticket,area_solicitud,descripcion_equipos,problema_presentado,solucion,estado_bitacora", "'$fecha ','$id_ticket','$turnos','$departamento_ticket','$regional_ticket', '$encargado',
                '$asignar_ticket','$area_solicitud','$descripcion_equipos','$problema_presentado','$solucion','$estado_bitacora'")) {



                        echo '
                    <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">BITACORA CREADO</h4>
                    <p class="text-center">
                    Bitacora creada con éxito <br>La serie es: <strong>' . $id_ticket . '</strong>
                    </p>
                    </div>
                    ';
                    } else {
                        echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                    No hemos podido crear la bitacora. Por favor intente nuevamente.
                    </p>
                    </div>
                    ';
                    }
                }
            }
        }


        ?>

        <?php foreach ($errores as $error) : ?>

            <div class="alerta error">
                <?php echo $error; ?>

            </div>
        <?php endforeach; ?>

        <!--Panel superior  -->
        <div class="container">
            <div class="row well">
                <div class="col-sm-3">

                    <!--- Boton ver bitacoras creadas --->
                    <a href="./admin.php?view=todaslasbitacoras" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-file-pdf-o" style="font-size:20px;color:white"></i>&nbsp;&nbsp;Ver Las Bitacoras Creadas</a>


                </div>


                <div class="col-sm-9 lead">
                    <a href="./index.php" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a el Menú Principal</a>

                    <h2 align="center" class="text-info ">Bitacora</h2>
                    <h3 class="text-primary"> Creado para realizar tareas especificas de Técnicos. </h3>
                </div>

            </div><!--fin row 1-->

            <!-- Imagen e instrucciones -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><strong><i class="fa fa-pencil-square"></i>&nbsp;&nbsp;&nbsp;Crear Bitacora</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <br><br><br>
                                    <img src="img/formu_ico.png" alt=""><br><br>
                                    <p class="text-primary text-justify">Por favor llene todos los datos de este formulario para crear su bitacora.


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
                                                        <input class="form-control" type="text" name="fechaatendido" readonly="" value="<?php echo date("Y-m-d H:i:s", strtotime("now")) . "\n"; ?>">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin fecha   -->



                                            <!-- Select para Catálogo de Turnos del 9-1-1 -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Turno</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="turnos" required>
                                                            <option value=""> -Seleccionar Turno- </option>
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_turno, turnos FROM tbl_turnos");

                                                            while ($turnos = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($turnos["turnos"]) ?>"> <?php echo $turnos["id_turno"], ".-", $turnos["turnos"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Turnos -->

                                            <!-- Select para Catálogo de Departamento del 9-1-1 -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Departamento</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="departamento_ticket" required>
                                                            <option value=""> -Seleccionar Departamento- </option>
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_departamento, departamento FROM tbl_departamento");

                                                            while ($departamento = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($departamento["departamento"]) ?>"> <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-map"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Departamento -->


                                            <!-- select para aregionales -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Regional </label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <select class="form-control" name="regional_ticket" placeholder="regional_ticket" required>
                                                            <option value="">-Seleccionar Regional-</option>
                                                            <?php
                                                            $dept1 = Mysql::consulta("SELECT nombreRegional FROM tbl_regionales");
                                                            while ($ticket1 = mysqli_fetch_array($dept1)) {
                                                            ?>
                                                                <option value="<?php echo $ticket1["nombreRegional"] ?>"> <?php echo $ticket1["nombreRegional"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select regionales -->


                                            <!-- nombre del usuario que hace el ticket -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Encargado De Turno</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>
                                                        <input type="text" class="form-control" placeholder="Nombre De Encargado" pattern="^[a-zA-Z\s]+{2,254}" name="encargado" title="Nombre Apellido" required>
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin nombre del usuario que hace el ticket -->



                                            <!-- select para asignar ticket -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Asignar Técnico De Turno</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <select class="form-control" name="asignar_ticket" placeholder="asignar_ticket" onchange="asignar(value)" required>
                                                            <option value="">-Asignar Técnico-</option>
                                                            <?php
                                                            $dept = Mysql::consulta("SELECT id_usuario, nombre_completo FROM tbl_admin  WHERE id_rol = '2'");
                                                            while ($ticket = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo $ticket["nombre_completo"] ?>"> <?php echo $ticket["nombre_completo"] ?></option>
                                                            <?php }  ?>
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
                                                    <textarea readonly class="form-control" rows="3" name="tecnicos_ticket" required="" id="asignarT"></textarea>
                                                    <!-- <input type="text" class="form-control" name="tecnicos_ticket" required="" id="asignarT"> -->
                                                </div>
                                            </div>
                                            <!-- Fin Select Problemas -->


                                            <!-- Select para Área-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Área de Solicitud</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="area_solicitud" required>
                                                            <option value=""> -Seleccionar Área- </option> <!----AQUI PONER LOS MODELOS ----->
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_area, area_solicitud FROM tbl_area_solicitud");

                                                            while ($area_solicitud = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo ($area_solicitud["area_solicitud"]) ?>"> <?php echo $area_solicitud["id_area"], ".-", $area_solicitud["area_solicitud"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Área -->



                                            <!-- Select para Descripcion-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Descripción de Equipo</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="descripcion_equipos" required>
                                                            <option value=""> -Seleccionar Equipo- </option> <!----AQUI PONER LOS MODELOS ----->
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_equipos, descripcion_equipos FROM tbl_descripcion");

                                                            while ($descripcion_equipos = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($descripcion_equipos["descripcion_equipos"]) ?>"> <?php echo $descripcion_equipos["id_equipos"], ".-", $descripcion_equipos["descripcion_equipos"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Descripcion -->

                                            <!-- Select para Problema -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Problema Presentado</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="problema_presentado" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Problema -->

                                            <!-- Select para Solucion -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Solución de Problema</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="solucion" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Solucion -->



                                            <!-- Select para estado_bitacora-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Estado de Bitacora</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="estado_bitacora" required>
                                                            <option value=""> -Seleccionar Estado- </option> <!----AQUI PONER LOS MODELOS ----->
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_estado_bitacora, estado_bitacora FROM tbl_estado_bitacora");

                                                            while ($estado_bitacora = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($estado_bitacora["estado_bitacora"]) ?>"> <?php echo $estado_bitacora["id_estado_bitacora"], ".-", $estado_bitacora["estado_bitacora"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-check-circle"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select estado_bitacora -->



                                            <!-- Botón para Abrir el ticket -->
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-info pull-center"><b>Crear Bitacora</b></button>
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
        $(document).ready(function() {
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









    <!--********* Script *********-->
    <!-- Fecha y hora  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#fechainput").datepicker();
        });
    </script>
    <!-- Fin Fecha y hora -->




    <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>