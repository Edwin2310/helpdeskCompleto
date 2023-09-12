<?php
if ($_SESSION['tipo'] == 1 || $_SESSION['tipo'] == 2) {

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
        if (isset($_POST['edificio']) && isset($_POST['fechaatendido'])) {

            /*Este código nos servira para generar un numero diferente para cada ticket*/
            $codigo = "";
            $longitud = 2;
            for ($i = 1; $i <= $longitud; $i++) {
                $numero = rand(0, 9);
                $codigo .= $numero;
            }
            $num = Mysql::consulta("SELECT * FROM tbl_equipo_entrada");
            $numero_filas = mysqli_num_rows($num);
            $numero_filas_total = $numero_filas + 1;
            $id_ticket = "SL" . $codigo . "EN" . $numero_filas_total;

            /* Fin código número de ticket */






            //Ejecutar el codigo despues de que el usuario envia el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                date_default_timezone_set('America/Tegucigalpa');
                $hour = date('H:i:s');
                $dia = date('Y-m-d');

                $fecha = MysqlQuery::RequestPost('fechaatendido');
                $edificio = utf8_encode(MysqlQuery::RequestPost('edificio'));
                $departamento = MysqlQuery::RequestPost('departamento');
                $tecnico = utf8_encode(MysqlQuery::RequestPost('tecnico'));
                $usuario = utf8_encode(MysqlQuery::RequestPost('usuario'));
                $procesador = utf8_encode(MysqlQuery::RequestPost('procesador'));
                $memoria = utf8_encode(MysqlQuery::RequestPost('memoria'));
                $disco = utf8_encode(MysqlQuery::RequestPost('disco'));
                $service = utf8_encode(MysqlQuery::RequestPost('service'));
                $inventario = utf8_encode(MysqlQuery::RequestPost('inventario'));
                $equipo = utf8_encode(MysqlQuery::RequestPost('equipo'));
                $adicionales = utf8_encode(MysqlQuery::RequestPost('adicionales'));
                $diagnostico = utf8_encode(MysqlQuery::RequestPost('diagnostico'));
                $solucion = utf8_encode(MysqlQuery::RequestPost('solucion'));
                $requerimiento = utf8_encode(MysqlQuery::RequestPost('requerimiento'));
                $lugar = utf8_encode(MysqlQuery::RequestPost('lugar'));
                $fecha_entrega = utf8_encode(MysqlQuery::RequestPost('fecha_entrega'));
                $hora = utf8_encode(MysqlQuery::RequestPost('hora'));
                $observaciones = utf8_encode(MysqlQuery::RequestPost('observaciones'));
                $estado_informe = "Finalizado";


                if (!$fecha) {
                    $errores[] = "La Fecha es obligatorio";
                }

                if (!$departamento) {
                    $errores[] = "Debes añadir un Departamento";
                }

                if (!$edificio) {
                    $errores[] = "Debes añadir un Edificio";
                }




                if (empty($errores)) {

                    if (
                        MysqlQuery::Guardar("tbl_equipo_entrada", "fecha,serie,edificio,departamento,tecnico,usuario,procesador,memoria,disco,service,inventario,equipo,adicionales,
                        diagnostico,solucion,requerimiento,lugar,fecha_entrega,hora,observaciones,estado_informe", "'$fecha','$id_ticket','$edificio','$departamento',
                        '$tecnico','$usuario','$procesador','$memoria','$disco','$service','$inventario','$equipo','$adicionales','$diagnostico','$solucion',
                        '$requerimiento','$lugar','$fecha_entrega','$hour','$observaciones','$estado_informe'")
                    ) {



                        echo '
                    <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">FORMULARIO CREADO</h4>
                    <p class="text-center">
                    Formulario creada con éxito <br>La serie es: <strong>' . $id_ticket . '</strong>
                    </p>
                    </div>
                    ';
                    } else {
                        echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                    No hemos podido crear la formulario. Por favor intente nuevamente.
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
                    <a href="./admin.php?view=todoslosformularios" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-file-pdf-o" style="font-size:20px;color:white"></i>&nbsp;&nbsp;Ver Los Formularios
                        Creados</a>
                </div>


                <div class="col-sm-9 lead">
                    <a href="./index.php" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a el Menú Principal</a>

                    <h2 align="center" class="text-info ">Formulario De Entrada y Salida De Equipo</h2>
                    <h3 class="text-primary"> Creado para realizar tareas especificas de Técnicos. </h3>
                </div>

            </div><!--fin row 1-->

            <!-- Imagen e instrucciones -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><strong><i class="fa fa-pencil-square"></i>&nbsp;&nbsp;&nbsp;Crear Formulario</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <br><br><br>
                                    <img src="img/formu_ico.png" alt=""><br><br>
                                    <p class="text-primary text-justify">Por favor llene todos los datos de este formulario
                                        para crear su informe de entrada o salida de equipo.
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



                                            <!-- Select para Descripcion-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Edificio</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="edificio">
                                                            <option value=""> -Selecciona Edificio- </option>
                                                            <!----AQUI PONER LOS MODELOS ----->
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id, edificio FROM tbl_edificio");

                                                            while ($edificio = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($edificio["edificio"]) ?>">
                                                                    <?php echo $edificio["id"], ".-", $edificio["edificio"] ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Descripcion -->


                                            <!-- Select para Catálogo de Departamento del 9-1-1 -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Departamento</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="departamento">
                                                            <option style="font-weight:bold" value="0"> -Seleccionar
                                                                Departamento-
                                                            </option>
                                                            <option style="text-align:center; font-weight:bold" value="0">
                                                                Departamento Administrativo </option>
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id_departamento, departamento FROM tbl_departamento");

                                                            while ($departamento = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($departamento["departamento"]) ?>">
                                                                    <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"] ?></option>
                                                            <?php } ?>
                                                            <option style="text-align:center; font-weight:bold" value="0">
                                                                Departamento Operativo </option>
                                                            <?php

                                                            $cato1 = "SELECT id_area, area_solicitud FROM tbl_area_solicitud";
                                                            $query2 = mysqli_query($mysqli, $cato1);

                                                            while ($prob1 = mysqli_fetch_array($query2)) {
                                                            ?>

                                                                <option value="<?php echo $prob1["area_solicitud"] ?>"> <?php echo $prob1["id_area"], ".-", $prob1["area_solicitud"] ?>
                                                                </option>

                                                            <?php } ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-map"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Departamento -->


                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tecnico</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="tecnico" placeholder="Nombre Del Tecnico">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Usuario De Equipo</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="usuario" placeholder="Nombre Del Usuario">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Procesador</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="procesador" placeholder="i5">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Memoria RAM</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="memoria" placeholder="DDR2-12GB">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Disco Duro</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="disco" placeholder="Estado Solido/Mecanico/320GB,1TB">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">ServiceTag/Serie</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="service" placeholder="DKSFTRXZ">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->


                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">No.Inventario</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="inventario" placeholder="INV3507">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->


                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Modelo De Equipo</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="equipo" placeholder="Dell Workstation Precision 7810">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Dispositivos Adicionales</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="adicionales" placeholder="Perifericos De Salida o Entrada">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Select para Antecedentes -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Diagnostico</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 2 parrafos." name="diagnostico"></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Antecedentes -->

                                            <!-- Select para Antecedentes -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Solucion</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="solucion"></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Antecedentes -->

                                            <!-- Select para Antecedentes -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Requerimiento</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="requerimiento"></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Antecedentes -->



                                            <!-- Select para Descripcion-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Lugar Del Servicio</label>
                                                <div class="col-sm-10">
                                                    <div class='input-group'>

                                                        <select class="form-control" name="lugar">
                                                            <option value=""> -Seleccionar Equipo- </option>
                                                            <!----AQUI PONER LOS MODELOS ----->
                                                            <?php

                                                            $dept = Mysql::consulta("SELECT id, lugar_trabajo FROM tbl_lugar");

                                                            while ($lugar_trabajo = mysqli_fetch_array($dept)) {
                                                            ?>
                                                                <option value="<?php echo utf8_encode($lugar_trabajo["lugar_trabajo"]) ?>">
                                                                    <?php echo $lugar_trabajo["id"], ".-", $lugar_trabajo["lugar_trabajo"] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Select Descripcion -->



                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Fecha De Entrega </label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="date" name="fecha_entrega">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Hora</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input class="form-control" type="time" name="hora">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Select para Antecedentes -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Observacion</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="observaciones"></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Antecedentes -->


                                            <!-- Botón para Abrir el ticket -->
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-info pull-center"><b>Crear Formulario</b></button>
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




    <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>