<?php error_reporting(0); ?>

<?php if ($_SESSION['nombre'] != "" && $_SESSION['tipo'] == "1") {

  /* Guardar nuevo usuario */
  if (isset($_POST['nom_usuario_reg']) && isset($_POST['usuario_reg']) && isset($_POST['usuario_clave_reg'])) {


    $id_usuario = MysqlQuery::RequestPost('id_usuario');
    $nom_complete_save = MysqlQuery::RequestPost('nom_usuario_reg');
    $nom_usuario_save = MysqlQuery::RequestPost('usuario_reg');
    $pass_save = md5(MysqlQuery::RequestPost('usuario_clave_reg'));
    $email_save = MysqlQuery::RequestPost('usuario_email_reg');
    $telefono = MysqlQuery::RequestPost('usuario_tel_reg');
    $regional = MysqlQuery::RequestPost('regional');
    $rol = MysqlQuery::RequestPost('rolUsuario');
    $numEE = MysqlQuery::RequestPost('numEmpleado');

    if ($rol == 5) {
      $dept = "Departamento de Bienes Nacionales";
    } else {
      $dept = "IT";
    }

    $sqlUserEmailA = "SELECT * FROM tbl_admin WHERE nombre_usuario='$nom_usuario_save' OR email_usuario='$email_save'";

    $queryUserEmailA = mysqli_query($mysqli, $sqlUserEmailA);

    if (mysqli_num_rows($queryUserEmailA) > 0) {
      echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                    ERROR AL REGISTRAR: Este usuario o correo ya estan registrados.
                </p>
            </div>
                ';
    } else {
      if (MysqlQuery::Guardar("tbl_admin", "nombre_completo, nombre_usuario, id_rol, clave, email_usuario, departamento, telefono, regional, estado", "'$nom_complete_save', '$nom_usuario_save', '$rol' , '$pass_save', '$email_save', '$dept', '$telefono', '$regional','1'")) {

        //Asignando a cada rol en el estado 1 que es igual a activo

        /*     $con = new mysqli('localhost', 'root', '', 'helpdesk');
        $consulta = "UPDATE tbl_admin SET estado = '1'  WHERE estado = '0'";
        $num_estado = mysqli_query($con, $consulta);
 */
        //Fin de Consulta





        echo '
             <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                 <h4 class="text-center">USUARIO REGISTRADO</h4>
                 <p class="text-center">
                     El usuario se registro con éxito en el Sistema.
                 </p>
             </div>
         ';
      } else {
        echo '
             <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                 <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                 <p class="text-center">
                     No hemos podido registrar al Usuario.
                 </p>
             </div>
         ';
      }
    }
  }
  /* Fin guardar */


  /* Actualizar cuenta usuario */

  if (isset($_POST['nom_usuario_up']) && isset($_POST['usuario_up']) && isset($_POST['usuario_clave_up']) && isset($_POST['usuario_email_up'])) {
    $nom_complete_update = MysqlQuery::RequestPost('nom_usuario_up');
    $nom_usuario_update = MysqlQuery::RequestPost('usuario_up');
    $old_nom_usuario_update = MysqlQuery::RequestPost('old_nom__up');
    $pass_usuario_update = md5(MysqlQuery::RequestPost('usuario_clave_up'));
    $old_pass_usuario_uptade = md5(MysqlQuery::RequestPost('old_usuario_clave_up_v'));
    $email_usuario_update = MysqlQuery::RequestPost('usuario_email_up');

    $sql = Mysql::consulta("SELECT * FROM tbl_admin WHERE nombre_usuario= '$old_nom_usuario_update' AND clave='$old_pass_usuario_uptade'");
    if (mysqli_num_rows($sql) >= 1) {
      if (MysqlQuery::Actualizar("tbl_admin", "nombre_completo='$nom_complete_update', nombre_usuario='$nom_usuario_update', clave='$pass_usuario_update', email_usuario='$email_usuario_update'", "nombre_usuario='$old_nom_usuario_update' and clave='$old_pass_usuario_uptade'")) {
        $_SESSION['nombre'] = $nom_usuario_update;
        $_SESSION['clave'] = $pass_usuario_update;
        $_SESSION['user'] = $email_usuario_update;
        echo '
                    <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center">USUARIO ACTUALIZADO</h4>
                        <p class="text-center">
                         El Usuario se actualizó con éxito
                        </p>
                    </div>
                ';
      } else {
        echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                        <p class="text-center">
                            No hemos podido actualizar el Usuario
                        </p>
                    </div>
                ';
      }
    } else {
      echo '
                <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                        Usuario y clave incorrectos
                    </p>
                </div>
            ';
    }
  }
  /* Fin actualizar */

  /* eliminar cuenta*/
  /*  if(isset($_POST['nom_usuario_delete']) && isset($_POST['usuario_clave__delete'])){
       $nom_usuario_delete=MysqlQuery::RequestPost('nom_usuario_delete');
       $clave_usuario_delete=md5(MysqlQuery::RequestPost('usuario_clave__delete'));
       $sql=Mysql::consulta("SELECT * FROM tbl_admin WHERE nombre_usuario= '$nom__delete' AND clave='$clave_usuario_delete'");
       if(mysqli_num_rows($sql)>=1){
          if(MysqlQuery::Eliminar("tbl_usuarios", "nombre_usuario='$nom_usuario_delete' and clave='$clave_usuario_delete'")){
              echo '<script type="text/javascript"> window.location="eliminar.php"; </script>';
          }else{
              echo '
                  <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                      <p class="text-center">
                          No hemos podido eliminar al Usuario
                      </p>
                  </div>
              ';
          }
       }else{
          echo '
              <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                  <p class="text-center">
                      Usuario y clave incorrectos
                  </p>
              </div>
          ';
       }
   }*/

  /* Fin eliminar  */
?>


  <?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  ?>


  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="./img/laptop-1.png" alt="Image center" class="img-responsive animated tada" width="190" height="90">
      </div>
      <div class="col-sm-20">
        <br><br>
        <h2 align="center" class="text-info">Registro de nuevos usuarios de soporte y actualización de sus datos.</h2>
      </div>
    </div><!--fin row-->

    <br><br>


    <!-- Formulario Creación de usario nuevo-->
    <div class="row">
      <di class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-success">
              <div class="panel-heading text-center"><i class="fa fa-plus"></i>&nbsp;<strong>Agregar Nuevo Usuario de
                  Soporte</strong></div>
              <div class="panel-body">
                <form role="form" action="" method="post">
                  <div class="form-group">
                    <label hidden>&nbsp;Id de Usuario</label>
                    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" placeholder="" maxlength="40">

                    <label><i class="fa fa-male"></i>&nbsp;Nombre</label>
                    <input type="text" class="form-control" name="nom_usuario_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
                  </div>
                  <div class="form-group has-success has-feedback">
                    <label class="control-label"><i class="fa fa-user"></i>&nbsp;Usuario</label>
                    <input type="text" id="input_user" class="form-control" name="usuario_reg" placeholder="Nombre de usuario" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="15">
                    <div id="com_form"></div>
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-shield"></i>&nbsp;Contraseña</label>
                    <input type="password" class="form-control" name="usuario_clave_reg" placeholder="Contraseña" required="">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-envelope"></i>&nbsp;Correo</label>
                    <input type="email" class="form-control" name="usuario_email_reg" placeholder="correo@911.gob.hn" required="">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-phone"></i>&nbsp;Telefono</label>
                    <input type="text" class="form-control" name="usuario_tel_reg" placeholder="Telefono" required="">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-globe"></i>&nbsp;Regional</label>
                    <select class="form-control" name="regional" id="regional">
                      <option style="font-weight:bold" value="0">Seleccionar Regional</option>
                      <option value="1">Dirección Regional CECOP Tegucigalpa</option>
                      <option value="2">Dirección Regional CECOP Choluteca</option>
                      <option value="3">Dirección Regional CECOP Tela</option>
                      <option value="4">Dirección Regional CECOP San Pedro Sula</option>
                      <option value="5">Dirección Regional CECOP Santa Rosa de Copán</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-male"></i>&nbsp;Tipo Usuario</label>
                    <select class="form-control" name="rolUsuario" id="rolUsuario">
                      <option style="font-weight:bold" value="0">Seleccionar Tipo</option>
                      <option value="1">Administrador</option>
                      <option value="2">Tecnico</option>
                      <option value="3">Desarrollador</option>
                    </select>
                  </div>
                  <!--   <div class="form-group">
                      <label><i class="fa fa-wrench"></i>&nbsp;Tipo de Usuario</label>
                          <div class='input-group'>
                          <select class="form-control" name="id_rol_reg"  required="">
                                  <option value="">Seleccione una opción</option>
                                  <option value="1">Administrador</option>
                          </select>
                           </div>
                         </div> -->

                  <center><button type="submit" class="btn btn-success">Agregar Usuario</button></center>
                </form>
              </div>
            </div>
          </div>
        </div><!--Fin row 1 agregar-->

        <!--Eliminar Cuenta
              <div class="row"> 
                  <div class="col-sm-12">
                    <div class="panel panel-danger">
                      <div class="panel-heading text-center"><i class="fa fa-trash-o"></i>&nbsp;<strong>Eliminar cuenta</strong></div>
                      <div class="panel-body">
                          <center><img class="img-responsive" src="./img/delete_user.png"></center><br>
                          <center><button class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Eliminar cuenta</button></center>

                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                       <h4 class="modal-title text-center text-danger" id="myModalLabel">¿Deseas eliminar tu cuenta?</h4>
                                    </div>
                                  <form action="" method="post" role="form" style="padding:20px;">
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" class="form-control" name="nom_admin_delete" placeholder="Nombre del Técnico" required="">
                                    </div><br>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                      <input type="password" class="form-control" name="admin_clave__delete" placeholder="Contraseña" required="">
                                    </div><br>

                                    <center>
                                      <button type="submit" class="btn btn-danger btn-sm">Eliminar cuenta</button>
                                      <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                                    </center>
                                  </form>

                                </div>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div> 
              </div><Fin row 2 eliminar-->
      </di><!--Fin class col-md-8-->


      <!--Formulario actualización de datos-->
      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-info">
              <div class="panel-heading text-center"><i class="fa fa-refresh"></i>&nbsp;<strong>Actualizar datos de cuenta
                  Administrador</strong></div>
              <div class="panel-body">
                <?php
                $idad = $_SESSION['id'];
                $sql1 = Mysql::consulta("SELECT * FROM tbl_admin WHERE id_usuario='$idad'");
                $reg1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
                ?>
                <form role="form" action="" method="POST">
                  <div class="form-group">
                    <label><i class="fa fa-male"></i>&nbsp;Nombre completo</label>
                    <input type="text" class="form-control" value="<?php echo $reg1['nombre_completo']; ?>" name="nom_usuario_up" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
                  </div>
                  <!-- <div class="form-group">
                           <label><i class="fa fa-user"></i>&nbsp;Usuario anterior</label> -->
                  <input type="hidden" readonly type="text" class="form-control" value="<?php echo $reg1['nombre_usuario']; ?>" name="old_nom__up" placeholder="Usuario Anterior" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="15">
                  <!-- </div> -->
                  <div class="form-group has-success has-feedback">
                    <label class="control-label"><i class="fa fa-user"></i>&nbsp;Nombre de Usuario</label>
                    <input value="<?php echo $reg1['nombre_usuario']; ?>" type="text" id="input_user2" class="form-control" name="usuario_up" placeholder="Nombre de Usuario" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="15">
                    <div id="com_form2"></div>
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-shield"></i>&nbsp;Contraseña anterior</label>
                    <input type="password" class="form-control" name="old_usuario_clave_up_v" placeholder="Contraseña anterior" required="">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-shield"></i>&nbsp;Nueva contraseña</label>
                    <input type="password" class="form-control" name="usuario_clave_up" placeholder="Nueva contraseña" required="">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-envelope"></i>&nbsp;Correo</label>
                    <input type="email" class="form-control" value="<?php echo $reg1['email_usuario']; ?>" name="usuario_email_up" placeholder="Correo" required="">
                  </div><button type="submit" class="btn btn-info">Actualizar datos</button>
                </form>
              </div>
            </div>
          </div>
        </div><!--Fin row-->
      </div><!--Fin class col-md-4-->
    </div><!-- Fin row-->

  </div>
<?php
} else {
?>



  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown" /><br>
        <!-- <img src="" alt="Image" class="img-responsive"/> -->

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
<script>
  // EVITAR REENVIO DE DATOS.
  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
  }
</script>