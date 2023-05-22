<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/*Llamado de los campos de la base de datos*/
	if(isset($_POST['id_edit']) && isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['telefono']) && isset($_POST['correo'])  ){
		$id_edit=MysqlQuery::RequestPost('id_edit');
    $nombre=  utf8_encode(MysqlQuery::RequestPost('nombre'));  
		$usuario= utf8_encode( MysqlQuery::RequestPost('usuario'));
		$telefono= utf8_encode( MysqlQuery::RequestPost('telefono'));
    $correo= utf8_encode( MysqlQuery::RequestPost('correo'));   

		if(MysqlQuery::Actualizar("tbl_admin",  "nombre_completo='$nombre', nombre_usuario='$usuario', telefono='$telefono', email_usuario='$correo'", "id_usuario=$id_edit")){

			echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">Información Actualizada</h4>
                    <p class="text-center">
                        Se actualizo la información con éxito
                    </p>
                </div>
            ';
     }
        }     
   
        $id = MysqlQuery::RequestGet('id');
        $sql = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_usuario= '$id'");
        $reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);
      /* Fin Llamado de los campos de la base de datos*/

        
?> 



                                       <!--************************************ Page content *************************************-->
                                       <!-- Formulario para responder a la solución del ticket y cambio de estado -->
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
                <img src="./img/Edit.png" alt="Image" class="img-responsive animated tada">
            </div>
            <div class="col-sm-9">
            <a href="./admin.php?view=users" class="btn btn-primary btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Volver a administrar usuarios</a>
            </div>
          </div>
        </div>
            
            
          <div class="container">
            <div class="col-sm-12">
                <form class="form-horizontal"  enctype="multipart/form-data" role="form" action="" method="POST">
                  
                		<input type="hidden" name="id_edit" value="<?php echo $reg['id_usuario']?>">
                        <div class="form-group">

                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class='col-sm-10'>
                                <div class="input-group">
                                    <input class="form-control"  type="text" name="nombre"  value="<?php echo $reg['nombre_completo']?>">
                                    <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Usuario</label>
                            <div class='col-sm-10'>
                                <div class="input-group">
                                    <input class="form-control"  type="text" name="usuario"  value="<?php echo $reg['nombre_usuario']?>">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Teléfono</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                  <input type="text" class="form-control"  name="telefono" value="<?php echo $reg['telefono']?>">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                  <input type="email" class="form-control"  name="correo"  value="<?php echo $reg['email_usuario']?>">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                              </div> 
                          </div>
                        </div>
                     
                    <!-- Botón para actualizar la información -->
                        <div class="form-group">                                                            
                          <div class="col-sm-offset-2 col-sm-10 text-center">
                          <button type="submit"  class="btn btn-info">Actualizar</button>
                          </div>
                        </div>
              </form>
            </div><!--col-md-12-->
          </div><!--container-->
        

      <!-- Fecha y hora  -->                                                                        

  <!-- <script>
document.getElementById("dnt").innerHTML = Date();
</script>  -->
<script>
                  // EVITAR REENVIO DE DATOS.
                  if (window.history.replaceState) { // verificamos disponibilidad
                    window.history.replaceState(null, null, window.location.href);
                  }
                  </script>
