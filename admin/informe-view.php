<?php

error_reporting(0);

if ($_SESSION['tipo'] == 1  ||  $_SESSION['tipo'] == 2) {


    //Arreglo con mensajes de errores
    $errores = [];




?>
    <!-- Icono que se muestra en la pestaña -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>Soporte Técnico 9-1-1</title>
        <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/911icon.ico">
        <?php include "./inc/links.php"; ?>
        <?php include "./archivos/conexion.php"; ?>



        <style type="text/css" media="screen">
            h4 {
                color: green;
            }

            h3 {
                color: red;
            }

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

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    </head>

    <body>
        <!-- Fin Icono que se muestra en la pestaña -->





        <!---------------------------- Inicio creación de Tickets ---------------------------->
        <?php

        /* Declaracion de variables a utilizar y genrador de código */
        if (isset($_POST['asunto']) && isset($_POST['tipo_servicio']) && isset($_POST['fechaatendido'])) {

            /*Este código nos servira para generar un numero diferente para cada ticket*/
            $codigo = "";
            $longitud = 2;
            for ($i = 1; $i <= $longitud; $i++) {
                $numero = rand(0, 9);
                $codigo .= $numero;
            }
            $num = Mysql::consulta("SELECT * FROM tbl_informe");
            $numero_filas = mysqli_num_rows($num);
            $numero_filas_total = $numero_filas + 1;
            $id_ticket = "IN" . $codigo . "F" . $numero_filas_total;

            /* Fin código número de ticket */

            foreach ($_FILES["anexos"]['tmp_name'] as $key => $tmp_name) {
                //Validamos que el archivo exista
                if ($_FILES["anexos"]["name"][$key]) {
                    $filename = $_FILES["anexos"]["name"][$key]; //Obtenemos el nombre original del archivo
                    $source = $_FILES["anexos"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

                    $directorio = 'imagenes/'; //Declaramos un  variable con la ruta donde guardaremos los archivos

                    //Validamos si la ruta de destino existe, en caso de no existir la creamos
                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777) or die("No se puede crear el directorio de extraccion");
                    }

                    $dir = opendir($directorio); //Abrimos el directorio de destino
                    $target_path = $directorio . '/' . $filename; //Indicamos la ruta de destino, así como el nombre del archivo


                    //Movemos y validamos que el archivo se haya cargado correctamente
                    //El primer campo es el origen y el segundo el destino
                    if (move_uploaded_file($source, $target_path)) {
                        // echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
                    } else {
                        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                    }
                    closedir($dir); //Cerramos el directorio de destino
                }
            }



            //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
            foreach ($_FILES["anexos2"]['tmp_name'] as $key => $tmp_name) {
                //Validamos que el archivo exista
                if ($_FILES["anexos2"]["name"][$key]) {
                    $filename2 = $_FILES["anexos2"]["name"][$key]; //Obtenemos el nombre original del archivo
                    $source = $_FILES["anexos2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

                    $directorio = 'imagenes/'; //Declaramos un  variable con la ruta donde guardaremos los archivos

                    //Validamos si la ruta de destino existe, en caso de no existir la creamos
                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777) or die("No se puede crear el directorio de extraccion");
                    }

                    $dir = opendir($directorio); //Abrimos el directorio de destino
                    $target_path = $directorio . '/' . $filename2; //Indicamos la ruta de destino, así como el nombre del archivo



                    //Movemos y validamos que el archivo se haya cargado correctamente
                    //El primer campo es el origen y el segundo el destino
                    if (move_uploaded_file($source, $target_path)) {
                        // echo "El archivo $filename2 se ha almacenado en forma exitosa.<br>";
                    } else {
                        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                    }
                    closedir($dir); //Cerramos el directorio de destino
                }
            }



            //Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
            foreach ($_FILES["anexos3"]['tmp_name'] as $key => $tmp_name) {
                //Validamos que el archivo exista
                if ($_FILES["anexos3"]["name"][$key]) {
                    $filename3 = $_FILES["anexos3"]["name"][$key]; //Obtenemos el nombre original del archivo
                    $source = $_FILES["anexos3"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

                    $directorio = 'imagenes/'; //Declaramos un  variable con la ruta donde guardaremos los archivos

                    //Validamos si la ruta de destino existe, en caso de no existir la creamos
                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777) or die("No se puede crear el directorio de extraccion");
                    }

                    $dir = opendir($directorio); //Abrimos el directorio de destino
                    $target_path = $directorio . '/' . $filename3; //Indicamos la ruta de destino, así como el nombre del archivo


                    //Movemos y validamos que el archivo se haya cargado correctamente
                    //El primer campo es el origen y el segundo el destino
                    if (move_uploaded_file($source, $target_path)) {
                        // echo "El archivo $filename3 se ha almacenado en forma exitosa.<br>";
                    } else {
                        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                    }
                    closedir($dir); //Cerramos el directorio de destino
                }
            }





            //Ejecutar el codigo despues de que el usuario envia el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                //Asignar FILES hacia una variable
                $imagen = $_FILES['imagen'];
                //Asignar FILES hacia una variable



                $fecha =  MysqlQuery::RequestPost('fechaatendido');

                $asunto = utf8_encode(MysqlQuery::RequestPost('asunto'));

                $tipo_servicio = utf8_encode(MysqlQuery::RequestPost('tipo_servicio'));

                $lugar_trabajo = utf8_encode(MysqlQuery::RequestPost('lugar_trabajo'));

                $departamento_ticket = MysqlQuery::RequestPost('departamento_ticket');

                $nombre_tecnico = utf8_encode(MysqlQuery::RequestPost('nombre_tecnico'));

                $antecedentes = utf8_encode(MysqlQuery::RequestPost('antecedentes'));

                $analisis = utf8_encode(MysqlQuery::RequestPost('analisis'));

                $recomendaciones = utf8_encode(MysqlQuery::RequestPost('recomendaciones'));

                $conclusiones = utf8_encode(MysqlQuery::RequestPost('conclusiones'));

                $estado_informe = "Finalizado";


                if (!$departamento_ticket) {
                    $errores[] = "El nombre del Departamento es obligatorio";
                }

                if (!$nombre_tecnico) {
                    $errores[] = "Debes añadir el nombre del Técnico";
                }

                if (strlen($antecedentes) < 235) {
                    $errores[] = "La descripcion de los Antecedentes es obligatorio y debe tener al menos 235 caracteres";
                }

                if (strlen($analisis) < 235) {
                    $errores[] = "La descripcion del Analisis es obligatoria y debe tener al menos 235 caracteres";
                }

                if (strlen($recomendaciones) < 235) {
                    $errores[] = "La descripcion de las Recomendaciones es obligatoria y debe tener al menos 235 caracteres";
                }

                if (strlen($conclusiones) < 235) {
                    $errores[] = "La descripcion de las Conclusiones es obligatoria y debe tener al menos 235 caracteres";
                }


                //Validar por tamaño de (300 KB Maximo)
                $maximo = 3000 * 100; // 3000 = A 300 KB * 100 se convierte a MB

                if ($imagen['size'] > $maximo) {

                    $errores[] = 'La Imagen es muy pesada (Max : 300 KB)';
                }






                if (empty($errores)) {


                    if (MysqlQuery::Guardar("tbl_informe", "asunto,serie,fecha,tipo_servicio,lugar_trabajo,departamento_ticket,antecedentes,analisis,recomendaciones,conclusiones,anexos,anexos2,anexos3,nombre_tecnico,estado_informe", "'$asunto','$id_ticket','$fecha','$tipo_servicio','$lugar_trabajo','$departamento_ticket','$antecedentes',
                '$analisis','$recomendaciones','$conclusiones','$filename','$filename2','$filename3','$nombre_tecnico','$estado_informe'")) {




                        echo '
                    <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">INFORME CREADO</h4>
                    <p class="text-center">
                    Informe creada con éxito <br>La serie es: <strong>' . $id_ticket . '</strong>
                    </p>
                    </div>
                    ';
                    } else {
                        echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                    No hemos podido crear la informe. Por favor intente nuevamente.
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

                    <!--- Boton ver informes creados --->
                    <a href="./admin.php?view=todoslosinformes" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-pencil" style="font-size:20px;color:white"></i>&nbsp;&nbsp;Ver Los Informes Creados</a>


                </div>


                <div class="col-sm-9 lead">
                    <a href="./index.php" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a el Menú Principal</a>

                    <h2 align="center" class="text-info ">Informe Técnico</h2>
                    <h3 class="text-primary"> Creado para realizar tareas especificas de Técnicos. </h3>
                </div>

            </div>
            <!--fin row 1-->

            <!-- Imagen e instrucciones -->
            <div class="row">
                <div class="col-sm-13">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><strong><i class="fa fa-desktop"></i>&nbsp;&nbsp;&nbsp;Crear Informe</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <br><br><br>
                                    <img src="img/formu_ico.png" alt=""><br><br>
                                    <p class="text-primary text-justify">Por favor llene todos los datos de este formulario para crear su informe.


                                </div>
                                <br>
                                <!-- Fin Imagen e instrucciones -->



                                <!--************************************* Formulario para creación de Ticket *************************************-->
                                <div class="col-sm-8">
                                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">


                                        <fieldset>


                                            <!--Asunto-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Asunto</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="asunto" readonly="" value="Dictamen Técnico de Equipo Informático del Departamento de Dirección de Tecnología.">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Asunto   -->


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


                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo De Servicio</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="tipo_servicio" readonly="" value="Dictamen Técnico.">
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->



                                            <!-- Lugar-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Lugar de Trabajo</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="lugar_trabajo" readonly="" value="Sistema Nacional De Emergencias 911, Unidad De Soporte Técnico.">
                                                        <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Lugar   -->


                                            <!-- Select para Catálogo de Departamento del 9-1-1 -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Departamento Asignado</label>
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




                                            <!-- Tipo-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nombre Del Técnico</label>
                                                <div class='col-sm-10'>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" name="nombre_tecnico" placeholder="Nombre Técnico" required>
                                                        <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin Tipo   -->

                                            <!-- Select para Antecedentes -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Antecedentes</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="antecedentes" required=""></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Select Antecedentes -->



                                            <!-- Análisis -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Análisis</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="analisis" required=""></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Análisis -->

                                            <!-- Recomendaciones -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Recomendaciones</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="recomendaciones" required=""></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin  Recomendaciones -->


                                            <!-- Conclusiones -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Conclusiones</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" placeholder="Se recomiendo un máximo de 3 parrafos." name="conclusiones" required=""></textarea>
                                                </div>
                                            </div>
                                            <!-- Fin Conclusiones -->



                                            <!-- Anexos -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Anexos</label>
                                                <label class="col-sm-7 control-label">Creado para adjuntar 3 imagenes</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" id="anexos" accept=".jpeg,.jpg" name="anexos[]" onchange="ValidarTamaño(this);" required>

                                                </div>
                                            </div>
                                            <!-- Fin  Anexos -->




                                            <!-- Anexos -->
                                            <div class=" form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" id="anexos2" accept=".jpeg,.jpg" name="anexos2[]" onchange="ValidarTamaño2(this);" required>
                                                </div>

                                            </div>
                                            <!-- Fin  Anexos -->

                                            <!-- Anexos -->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" id="anexos3" accept=".jpeg,.jpg" name="anexos3[]" onchange="ValidarTamaño3(this);" required>
                                                </div>
                                            </div>
                                            <!-- Fin  Anexos -->









                                            <!-- Botón para Abrir el ticket -->
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-info pull-center"><b>Crear Informe</b></button>
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



    <!-- SCRIPT PARA VALIDAR QUE EL tamaño NO SUPERE LOS (1400X700) -->


    <!-- ANEXOS 1 -->

    <script type="text/javascript">
        function ValidarTamaño(obj) {
            var uploadFile = obj.files[0];
            var sizeByte = obj.files[0].size;
            var siezekiloByte = parseInt(sizeByte / 1340);
            if (siezekiloByte > 100) {
                alert('El tamaño supera el limite permitido(1340x700)');
                $(obj).val('');
                return;
            }
            var img = new Image();
            img.onload = function() {
                if (this.width.toFixed(0) = 1340 && this.height.toFixed(0) != 700) {
                    alert("La imagen debe ser de tamaño 1340px por 700px.");
                    $('#anexos').val("");
                }

            };
            img.src = URL.createObjectURL(uploadFile);
        }
    </script>
    <!-- ANEXOS 1 -->



    <!-- ANEXOS 2 -->
    <script type="text/javascript">
        function ValidarTamaño2(obj) {
            var uploadFile = obj.files[0];
            var sizeByte = obj.files[0].size;
            var siezekiloByte = parseInt(sizeByte / 1400);
            if (siezekiloByte > 100) {
                alert('El tamaño supera el limite permitido(1340x700)');
                $(obj).val('');
                return;
            }
            var img = new Image();
            img.onload = function() {
                if (this.width.toFixed(0) = 1340 && this.height.toFixed(0) != 700) {
                    alert("La imagen debe ser de tamaño 1340px por 700px.");
                    $('#anexos2').val("");
                }
            };
            img.src = URL.createObjectURL(uploadFile);
        }
    </script>
    <!-- ANEXOS 2 -->




    <!-- ANEXOS 3 -->

    <script type="text/javascript">
        function ValidarTamaño3(obj) {
            var uploadFile = obj.files[0];
            var sizeByte = obj.files[0].size;
            var siezekiloByte = parseInt(sizeByte / 1340);
            if (siezekiloByte > 100) {
                alert('El tamaño supera el limite permitido(1340x700)');
                $(obj).val('');
                return;
            }
            var img = new Image();
            img.onload = function() {
                if (this.width.toFixed(0) = 1340 && this.height.toFixed(0) != 700) {
                    alert("La imagen debe ser de tamaño 1340px por 700px.");
                    $('#anexos3').val("");
                }
            };
            img.src = URL.createObjectURL(uploadFile);
        }
    </script>
    <!-- ANEXOS 3 -->


    <!-- SCRIPT PARA VALIDAR QUE EL tamaño NO SUPERE LOS (1400X700) -->



    <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>