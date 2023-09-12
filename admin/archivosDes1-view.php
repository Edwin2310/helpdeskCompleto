 <?php
/* Archivos subidos por los usuarios */
/* Eliminar Tickets */
 if(isset($_POST['id_del'])){
    $id = MysqlQuery::RequestPost('id_del');
    if(MysqlQuery::Eliminar("tbl_reportesdesa", "id='$id'")){
        echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="text-center">ARCHIVO ELIMINADO</h4>
                <p class="text-center">
                    El Archivo fue eliminado con exito
                </p>
            </div>
        ';
    }else{
        echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                    No se ha podido eliminar el Archivo
                </p>
            </div>
        '; 
    }
}                /* *********** Fin Eliminar Tickets ***********  */   
?> 

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include('./archivos/conexion.php');

$tmp = array();
$res = array();

$sel = $con->query("SELECT * FROM tbl_dictamen ORDER BY fecha DESC");
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
        <link rel="stylesheet"   >
    </head>
    <body>
        <div class="container">
        <div class="row well">
            <div class="col-sm-3">
              <img src="img/folder.png" class="img-responsive animated tada" alt="Image">
            </div>
            <div class="col-sm-9 lead">
            <a href="./index.php" style="margin: 5px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Inicio</a>
                 <h2 align="center" class="text-info ">Dictamenes</h2>
            <h4 class="text-primary"> En esta seccion se subiran los dictamenes una vez terminada su asignacion.</h4> 
            </div>
            <div class="col-sm-8 lead">
                   <h5 style="text-align:center"><i><font color="maroon">Si necesita eliminar un archivo, Favor avocarse con el administrador </i></font></h5>
                         <br>
                   </div>
          </div><!--fin row 1-->

<div class="container">
          <!-- <div class="row well">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills nav-justified">
                          <li><a class="nav-item nav-link active" href="./admin.php?view=reportes"><font color=#000066><i class="fa fa-male"></i>&nbsp;&nbsp;<b>T&eacute;cnicos</b></font>&nbsp;&nbsp;<span class="badge badge-primary"></span></a></li>
                          <li><a class="nav-link active" href="./admin.php?view=archivosDes"><i class="fa fa-desktop"></i>&nbsp;&nbsp;<b> Desarrolladores </b>&nbsp;&nbsp;<span class="badge badge-warning"></span></a></li>
                        </ul>
            </div> -->
          </div> 

        <div class="row">
                    <div class="col-sm-12">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                          <h3 class="panel-title text-center"><strong><i class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;Dictamenes Disponibles</strong></h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-2 text-center">
                              <br><br><br>
                              <!-- <img src="img/formu_ico.png" alt=""><br><br> -->
                              <p class="text-primary text-justify"></p>
                           
                            </div> 
                            <br>
                            <div class="col-sm-8">
                              <form class="form-horizontal" role="form" action="" method="POST">
                                  <fieldset>
                                  <div class="row justify-content-md-center">
                        <div class="col-8">
        
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                                Subir Reporte
                            </button>
                            <a href=""  style="margin: 5px" class="btn btn-info  pull-right"><i class="fa fa-refresh"></i>&nbsp;&nbsp;<b>Actualizar</b></a>
                      
                            
                           <br></br>
                           <!-- Tabla que muestra los archivos subidos -->
                            <table id="example" class="table mt-2 table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;" scope="col">#</th>
                                        <th style="text-align: center;" scope="col">Fecha</th>
                                        <th style="text-align: center;" scope="col">T&iacute­tulo</th>
                                        <th style="text-align: center;" scope="col">Descripci&oacuten</th>
                                        <th style="text-align: center;" scope="col">Subido por</th>
                                        <th style="text-align: center;" scope="col">Acci&oacuten</th>
                                        <?php if($_SESSION['nombre']!="" && $_SESSION['tipo']=="1"){ ?> 
                                        <th style="text-align: center;" scope="col">Eliminar</th>
                                       <?php } ?>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($res as $val) { ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $val['id'] ?> </td>
                                            <td style="text-align: center;"><?php echo $val['fecha'] ?> </td>
                                            <td style="text-align: center;"><?php echo $val['title'] ?></td>
                                            <td style="text-align: center;"><?php echo $val['description'] ?></td>
                                            <td style="text-align: center;"><?php echo $val['upload'] ?></td>
                                            <td style="text-align: center;">
                                              <a class="btn btn-primary" target="_black" href="<?php echo 'http://'. $_SERVER['HTTP_HOST'] .'/'.$val['url']; ?>" >Ver Archivo</a>
                                            </td>

                                            <?php if($_SESSION['nombre']!="" && $_SESSION['tipo']=="1"){ ?> 
                                            <td style="text-align: center;">     
                                           
                                                  <form action="" method="POST" style="display: inline-block;">
                                                        <input type="hidden" name="id_del" value="<?php echo $val['id']; ?>">

                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                  </form>
                                            </td>
                                            <?php } ?>
                                                <?php if($_SESSION['tipo']=="2"){ ?>
                                                <td hidden style="text-align: center; ">     
                                                  <form action="" method="POST" style="display: inline-block;">
                                                        <input type="hidden" name="id_del" value="<?php echo $val['id']; ?>">

                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form> 
                                                 </td>
                                              <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- Fin Tabla que muestra los archivos subidos -->
                        </div>
                    </div>
                </div>

                <!-- Modal para ingresar la informaciÃ³n del archivo a subir -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" id="form1">
                                     <div class="input-group">
                                       <input type="hidden"  class="form-control" type="text" name="fecha" id="fecha" readonly="" value="<?php echo date("Y-m-d H:i:s", strtotime("now"))."\n"; ?>">
                                     </div>

                                    <div class="form-group">
                                        <label for="title">T&iacute­tulo</label>
                                        <input type="text" class="form-control" id="title" name="title" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripci&oacuten</label>
                                        <input type="text" class="form-control" id="description" name="description" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">archivo</label>
                                        <input type="file" class="form-control" id="file" name="file" require>
                                    </div>

                                    <div class="form-group">
                                        <label for="upload">Subido por</label> 
                              <select class="form-control" type="upload" id="upload"  name="upload">
                              <option value="">--- Seleccionar nombre ---</option>
                              <?php
                                $dept=Mysql::consulta("SELECT id_usuario, nombre_completo FROM tbl_admin WHERE id_rol='Administrador'");
                                while($desarrollador = mysqli_fetch_array($dept)){
                                ?>
                                  <option value="<?php echo $desarrollador["nombre_completo"]?>"> <?php echo $desarrollador["nombre_completo"]?> </option>
                                <?php }  ?>
                            </select>
                        </div>
                      
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal para ingresar la informaciÃ³n del archivo a subir -->
                
                <!-- bÃ³ton para ver el archivo subido en una pastaÃ±a aparte -->
                <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin bÃ³ton para ver el archivo subido en una pastaÃ±a aparte -->
                                    </fieldset> 
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
        <!-- Fin FunciÃ³n que permite cargar el archivo PDF -->
        <script>
            function onSubmitForm() {
                var frm = document.getElementById('form1');
                var data = new FormData(frm);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        var msg = xhttp.responseText;
                        if (msg == 'success') {
                            alert(msg);
                            $('#exampleModal').modal('hide')
                        } else {
                            alert(msg);
                        }

                    }
                };
                xhttp.open("POST", "./uploaddictamen.php", true);
                xhttp.send(data);
                $('#form1').trigger('reset');
            }
                            
        </script>
        <!-- Fin Función que permite cargar el archivo PDF -->

                  <!-- Fecha y hora  -->
                  <script type="text/javascript">
            $( document ).ready(function() {
                const today = new Date();
                var options = { day: 'numeric', month: 'long', year: 'numeric'};
                console.log(new Intl.DateTimeFormat('es-Es', options).format(today));
                document.getElementById("demo").innerHTML = new Intl.DateTimeFormat('es-Es', options).format(today);
            });
        </script>
            <!-- Fin Fecha y hora -->
    </body>
</html>


