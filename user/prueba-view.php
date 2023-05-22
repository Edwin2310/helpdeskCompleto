
                           <!---------------------------- Inicio creación de Tickets ---------------------------->
<?php 


/*Llamado de los campos de la base de datos*/
if(isset($_POST['id_edit']) && isset($_POST['solucion_ticket']) && isset($_POST['estado_ticket']) && isset($_POST['atendido_ticket']) && isset($_POST['asignar_t'])) {
    $id_edit=MysqlQuery::RequestPost('id_edit');
$asignar_ticket=  MysqlQuery::RequestPost('asignar_t');  
    $estado_edit=  MysqlQuery::RequestPost('estado_ticket');
    $solucion_edit=  MysqlQuery::RequestPost('solucion_ticket');
$atendido=  MysqlQuery::RequestPost('atendido_ticket');
/* $fechaatendido=  MysqlQuery::RequestPost('fechaatendido'); */

    if(MysqlQuery::Actualizar("ticket",  "asignar_ticket='$asignar_ticket', atendidopor='$atendido', estado_ticket='$estado_edit', solucion='$solucion_edit'", "id=$id_edit")){

        echo '
            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">TICKET ATENDIDO</h4>
                <p class="text-center">
                    El ticket fue Atendido con éxito
                </p>
            </div>
        ';
 }
    }     

  
        $id = MysqlQuery::RequestGet('id');
        $sql = Mysql::consulta("SELECT * FROM ticket WHERE id= '$id'");
        $reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);  
?>  

                                      <!--************************************* Formulario para creación de Ticket *************************************-->
        <div class="container">
          <div class="row well">
            <div class="col-sm-3">
              <img src="img/ticket2.png" class="img-responsive" alt="Image">
            </div>
            <div class="col-sm-9 lead">
            <a href="index.php" class="btn btn-primary  pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Inicio</a>
              <h2 class="text-info">¿Cómo abrir un nuevo Ticket?</h2>
              <p>Para abrir un nuevo ticket deberá de llenar todos los campos del siguiente formulario. Usted podrá verificar el estado de su ticket mediante el <strong>Ticket ID</strong> que se le proporcionara a usted cuando llene y nos envíe el siguiente formulario.</p>
            </div>
          </div><!--fin row 1-->

          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title text-center"><strong><i class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;Ticket</strong></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-4 text-center">
                      <br><br><br>
                      <img src="img/formu_ico.png" alt=""><br><br>
                      <p class="text-primary text-justify">Por favor llene todos los datos de este formulario para abrir su ticket. El <strong>Ticket ID</strong> será enviado a la dirección de correo electrónico proporcionada en este formulario.</p>
                    </div>
                    <br>
                    <div class="col-sm-8">
                      <form class="form-horizontal" role="form" action="" method="POST">
                          <fieldset>
                          <div class="form-group">

                <label class="col-sm-2 control-label">Fecha</label>
                <div class='col-sm-10'>
                    <div class="input-group">
                        <input class="form-control" readonly="" type="text" name="fecha_ticket" readonly="" value="<?php echo $reg['fecha']?>">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Ticket</label>
                <div class='col-sm-10'>
                    <div class="input-group">
                        <input class="form-control" readonly="" type="text" name="serie_ticket" readonly="" value="<?php echo $reg['serie']?>">
                        <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                    </div>
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Nombre Usuario</label>
                <div class="col-sm-10">
                <div class='input-group'>
                    <input type="text" readonly="" class="form-control"  name="name_ticket" readonly="" value="<?php echo $reg['nombre_usuario']?>">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                <div class='input-group'>
                    <input type="email" readonly="" class="form-control"  name="email_ticket" readonly="" value="<?php echo $reg['email']?>">
                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                </div> 
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Departamento</label>
                <div class="col-sm-10">
                <div class='input-group'>
                    <input type="text" readonly="" class="form-control"  name="departamento_ticket" readonly="" value="<?php echo $reg['id_dept']?>">
                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                </div> 
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Problema que presenta</label>
                <div class="col-sm-10">
                <div class='input-group'>
                    <input type="text" readonly="" class="form-control"  name="asunto_ticket" readonly="" value="<?php echo $reg['asunto']?>">
                    <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
                </div> 
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Mensaje</label>
                <div class="col-sm-10">
                <textarea class="form-control" readonly="" rows="3"  name="mensaje_ticket" readonly=""><?php echo $reg['mensaje']?></textarea>
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Estado</label>
                <div class='col-sm-10'>
                    <div class="input-group">
                        <select class="form-control" name="estado_ticket">
                            <option style=" font-weight:bold"  value="<?php echo $reg['estado_ticket']?>"><?php echo $reg['estado_ticket']?> (Actual)</option>
                <?php

                $dept=Mysql::consulta("SELECT id_ticket, estado FROM tbl_estadoticket");

                while($ticket = mysqli_fetch_array($dept)){
                ?>
                
                <option value="<?php echo $ticket["estado"]?>"> <?php echo $ticket["estado"]?></option>

                <?php }  ?>
                </select>
                        </select>
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                </div>
                </div>


                <div class="form-group">
                <label  class="col-sm-2 control-label">Solución</label>
                <div class="col-sm-10">
                <textarea class="form-control" rows="3"  name="solucion_ticket" required=""><?php echo utf8_encode($reg['solucion'])?></textarea>
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label"><font color="maroon">Atendido por</font></label>
                <div class="col-sm-10">
                <div class='input-group'>
                    
                <select class="form-control"  name="atendido_ticket">
                <option style=" font-weight:bold"  required="" value="<?php echo $reg['atendidopor']?>"><?php echo $reg['atendidopor']?> (Actual)</option>
                <?php

                    $dept=Mysql::consulta("SELECT id_usuario, nombre_completo FROM tbl_usuarios");

                    while($tecnico = mysqli_fetch_array($dept)){
                    ?>
                    <option value="<?php echo $tecnico["nombre_completo"]?>"> <?php echo $tecnico["nombre_completo"]?> </option>
                    <?php }  ?>
                </select>
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    </div> 
                </div>
                </div>

<div class="form-group">
        <label class="col-sm-2 control-label">Fecha</label>
        <div class='col-sm-10'>
            <div class="input-group">
                <input class="form-control" type="text" id="" placeholder="Fecha" name="fecharealizar_ticket" required="" readonly>

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
    </div>
                         
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

  <!-- Llamado del correo -->               
 <?php include "./lib/enviarmail.php";?>

      <!-- Fecha y hora  -->
<script type="text/javascript">
    $( document ).ready(function demo() {
        const today = new Date();
        var options = { day: 'numeric', month: 'long', year: 'numeric'};
        console.log(new Intl.DateTimeFormat('es-Es', options).format(today));
        document.getElementById("demo").innerHTML = new Intl.DateTimeFormat('es-Es', options).format(today);
    });
</script>
     <!-- Fin Fecha y hora -->


     
  