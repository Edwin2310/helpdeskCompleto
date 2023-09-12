<?php
error_reporting(0);
date_default_timezone_set('America/Tegucigalpa');

/* Eliminar Tickets */

if (isset($_POST['id_del'])) {
    $id = MysqlQuery::RequestPost('id_del');
    if (MysqlQuery::Eliminar("tbl_archivoespdesa", "id='$id'")) {
        echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">ARCHIVO ELIMINADO</h4>
                <p class="text-center">
                    El Archivo fue eliminado con exito
                </p>
            </div>
        ';
    } else {
        echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                    No se ha podido eliminar el Archivo
                </p>
            </div>
        ';
    }
} /* *********** Fin Eliminar Tickets ***********  */
?>

<!DOCTYPE html>

<?php
include('./archivos/conexion.php');

$tmp = array();
$res = array();

$sel = $con->query("SELECT * FROM tbl_archivoespdesa ORDER BY fecha DESC");
while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>
<!-- href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" -->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row well">
            <div class="col-sm-3">
                <img src="img/folder.png" class="img-responsive animated tada" alt="Image">
            </div>
            <div class="col-sm-9 lead">
                <a href="./index.php" style="margin: 5px" class="btn btn-success pull-right"><i
                        class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Inicio</a>
                <h2 align="center" class="text-info ">Archivos Técnicos</h2>
                <!-- <h3 class="text-primary"> En esta sección se subirán archivos importantes  </h3>  -->
            </div>
        </div><!--fin row 1-->

        <!-- Container donde se encuentra la info de los técnicos y desarrolladores por separado  -->
        <!-- <div class="container">
          <div class="row well">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills nav-justified">
                          <li><a class="nav-item nav-link active" href="./admin.php?view=archivoEs"><font color=#000066><i class="fa fa-male"></i>&nbsp;&nbsp;<b>Técnicos</b></font>&nbsp;&nbsp;<span class="badge badge-primary"></span></a></li>
                          <li><a class="nav-link active" href="./admin.php?view=archivodesa"><i class="fa fa-desktop"></i>&nbsp;&nbsp;<b> Desarrolladores </b>&nbsp;&nbsp;<span class="badge badge-warning"></span></a></li>
                        </ul>
            </div>
          </div> -->
        <!-- Fin Container -->


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"><strong><i
                                    class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;Archivos Disponibles Técnicos</strong>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <p class="text-primary text-justify"></p>

                            </div>
                            <br>
                            <div class="col-sm-12">
                                <form class="form-horizontal" role="form" action="" method="POST"
                                    action="/uploadEsp.php">
                                    <fieldset>
                                        <div class="row justify-content-md-center" style="margin: 5px">
                                            <div class="col-12">
                                                <?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>
                                                    <button style="margin: 5px" type="button" class="btn btn-primary btn-mg"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        Subir Archivo
                                                    </button>
                                                <?php } ?>
                                                <a href="" style="margin: 5px" class="btn btn-info  pull-right"><i
                                                        class="fa fa-refresh"></i>&nbsp;&nbsp;<b>Actualizar</b></a>


                                                <br></br>
                                                <!-- Tabla que muestra los archivos subidos -->
                                                <table id="example"
                                                    class="table mt-2 table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;" scope="col">#</th>
                                                            <th style="text-align: center;" scope="col">Fecha</th>
                                                            <th style="text-align: center;" scope="col">Título</th>
                                                            <th style="text-align: center;" scope="col">Descripción</th>
                                                            <th style="text-align: center;" scope="col">Subido por</th>
                                                            <th style="text-align: center;" scope="col">Acción</th>
                                                            <?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>
                                                                <th style="text-align: center;" scope="col">Eliminar</th>
                                                            <?php } ?>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php foreach ($res as $val) { ?>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <?php echo $val['id'] ?>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <?php echo $val['fecha'] ?>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <?php echo $val['title'] ?>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <?php echo $val['description'] ?>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <?php echo $val['upload'] ?>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <center><a class="btn btn-primary" target="_black"
                                                                            href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/helpdeskCompleto/' . $val['url']; ?>">Ver
                                                                            Archivo</a></center>


                                                                </td>
                                                                <?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") { ?>
                                                                    <td style="text-align: center;">

                                                                        <form action="" method="POST"
                                                                            style="display: inline-block;">
                                                                            <input type="hidden" name="id_del"
                                                                                value="<?php echo $val['id']; ?>">

                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-danger"><i
                                                                                    class="fa fa-trash-o"
                                                                                    aria-hidden="true"></i></button>

                                                                        </form>

                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <!-- Fin tabla  -->
                                            </div>
                                        </div>
                            </div>

                            <!-- Modal para ingresar la información del archivo a subir -->
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
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form enctype="multipart/form-data" id="form1" name="form1"
                                                onsubmit="return validateForm();">
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control" type="text" name="fecha"
                                                        id="fecha" readonly=""
                                                        value="<?php echo date('Y-m-d H:i:s', strtotime('now')) . '\n'; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Título</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Descripción</label>
                                                    <input type="text" class="form-control" id="description"
                                                        name="description" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Archivo</label>
                                                    <input type="file" class="form-control" id="file" name="file"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload">Subido por</label>
                                                    <input type="text" class="form-control" id="upload" name="upload"
                                                        require readonly value="<?php echo $nameInput; ?>">
                                                </div>
                                                <div class="modal-group">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        onchange="return onSubmitForm();">Guardar</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin modal -->

                            <!-- bóton para ver el archivo subido en una pastaña aparte -->
                            <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%"
                                                height="500px"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin bóton -->
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Librerias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>



    <!-- SWEETALERT -->
    <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- IMPORTANTE: ESTE SOLO DA AQUI -->
    <!-- SWEETALERT -->





    <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <!-- Función que permite cargar el archivo PDF -->
    <script type="text/javascript">
        function onSubmitForm() {
            // var frm = document.getElementById('form1');
            // var data = $('#form1').serialize();
            // var data = new FormData(frm);
            var data = new FormData($('#form1')[0]);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    var msg = xhttp.responseText;
                    if (msg == 'success') {
                        // alert("Correcto");

                        $('#exampleModal').modal('hide')
                    } else {
                        // alert("ERROR");
                    }

                }
            };
            xhttp.open("POST", "./uploadEsp.php", true);
            xhttp.send(data);
            $('#form1').trigger('reset');


        }
    </script>
    <!-- fin Script -->



    <!-- Funcion Creada Para Mostrar La Alerta -->
    <script type="text/javascript">
        function validateForm() {
            var x = document.getElementById("title").value;
            if (x.trim() == "") {
                swal("El campo no puede estar vacío o contener solo espacios en blanco.", {
                    buttons: false,
                    timer: 2000,
                });
                return false;


            } else {
                event.preventDefault();
                Swal.fire({
                    title: '¿Desea enviar el archivo?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    cancelButtonText: "No",
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.value) {

                        var data = new FormData($('#form1')[0]);
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4) {
                                var msg = xhttp.responseText;
                                if (msg == 'success') {
                                    // alert("Reporte Subido Correctamente");
                                    $('#exampleModal').modal('hide')
                                } else {
                                    // alert("Error");
                                }

                            }
                        };
                        xhttp.open("POST", "./uploadEsp.php", true);
                        xhttp.send(data);
                        $('#form1').trigger('reset');



                    }
                });
            }
        }
    </script>
    <!-- Fin De Funcion Creada Para Mostrar La Alerta -->



    <!-- Fecha y hora  -->
    <script type="text/javascript">
        $(document).ready(function () {
            const today = new Date();
            var options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            console.log(new Intl.DateTimeFormat('es-Es', options).format(today));
            document.getElementById("demo").innerHTML = new Intl.DateTimeFormat('es-Es', options).format(today);
        });
    </script>
    <!-- Fin Fecha y hora -->

</body>

</html>