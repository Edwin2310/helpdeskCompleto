<?php if(!$_SESSION['nombre']==""&&!$_SESSION['tipo']==""){ 
        
        /*Script para eliminar cuenta*/
        // if(isset($_POST['usuario_delete']) && isset($_POST['clave_delete'])){
        //   $usuario_delete=MysqlQuery::RequestPost('usuario_delete');
        //   $clave_delete=md5(MysqlQuery::RequestPost('clave_delete'));
         
        //   $sql=Mysql::consulta("SELECT * FROM tbl_usuarios WHERE nombre_usuario= '$usuario_delete' AND clave='$clave_delete'");

        //   if(mysqli_num_rows($sql)>=1){
        //      MysqlQuery::Eliminar("tbl_admin", "nombre_usuario='$usuario_delete' and clave='$clave_delete'");
        //      echo '<script type="text/javascript"> window.location="eliminar.php"; </script>';
        //   }else{
        //     echo '
        //         <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        //             <h4 class="text-center">OCURRIÓ UN ERROR</h4>
        //             <p class="text-center">
        //                 No hemos podido eliminar la cuenta por que los datos son incorrectos
        //             </p>
        //         </div>
        //     '; 
        //   }
        // }
         
         
        /*Script para actualizar datos de cuenta*/
        if(isset($_POST['old_pass_update']) && isset($_POST['new_pass_update'])){

          // $nombre_complete_update=MysqlQuery::RequestPost('name_complete_update');
          // $old_user_update=MysqlQuery::RequestPost('old_user_update');
          // $new_user_update=MysqlQuery::RequestPost('new_user_update');
          $email_update=$_SESSION['user'];
          $old_pass_update=md5(MysqlQuery::RequestPost('old_pass_update'));
          $new_pass_update=md5(MysqlQuery::RequestPost('new_pass_update'));
          // $telefono_update=MysqlQuery::RequestPost('telefono_update');
          
          $sqlPass = "SELECT clave FROM tbl_admin WHERE email_usuario= '$email_update'";
          $queryPass = mysqli_query($mysqli, $sqlPass);
          
          $pas=mysqli_fetch_array($queryPass);

          $passConsulta = $pas['clave'];

          // print_r($passConsulta);

          // $passConsulta = "contraseña mala";

           if($passConsulta == $old_pass_update){
              // if(mysqli_num_rows($sql11)==1){
            if(MysqlQuery::Actualizar("tbl_admin", " clave='$new_pass_update'", "email_usuario= '$email_update'")){
              
              // MysqlQuery::Actualizar("tbl_usuarios", "nombre_completo='$nombre_complete_update', nombre_usuario='$new_user_update', email_usuario='$email_update', clave='$new_pass_update'", "nombre_usuario='$old_user_update' and clave='$old_pass_update'");
              // $_SESSION['nombre']=$old_user_update;
              $_SESSION['clave']=$new_pass_update;
  
              echo '
                <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">CUENTA ACTUALIZADA</h4>
                    <p class="text-center">
                      ¡Tus datos han sido actualizados correctamente!
                    </p>
                </div>
              ';
            
            

           
          }else{
            echo '
              <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="text-center">OCURRIO UN ERROR</h4>
                  <p class="text-center">
                    Asegurese que los datos ingresados son validos. Por favor intente nuevamente</p>
                  </p>
              </div>
            '; 
          }

           } else{
            echo '
              <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="text-center">OCURRIO UN ERROR</h4>
                  <p class="text-center">
                    La contraseña vieja es incorrecta. Por favor intente nuevamente</p>
                  </p>
              </div>
            ';
           }
           
          
        }
        ?>
        <div class="container">
          <div class="row well">
            <div class="col-sm-3">
              <img src="img/engranaje.png" alt="Image" class="img-responsive animated tada">
              
            </div>
             <!-- Boton para regresar -->
             <div class="col-sm-17">
            <a href="index.php" style="margin: 17px" class="btn btn-success pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a Inicio</a>
            </div>
            <div class="col-sm-9 lead">
              <h2 class="text-info"> <center>Cambio de contraseña </h2>
              <h2 class="text-info"><center>Soporte Técnico 9-1-1</h2>
              <br></br>
              <p>Si necesitas actualizar otro dato de tu cuenta por favor comunicate con un administrador de Soporte Técnico 9-1-1</p>
            </div>
          </div><!--Fin row well-->

          
          <?php 
                                $aa = $_SESSION['nombre'];

                                
                                        $nameU = "SELECT * FROM tbl_admin WHERE nombre_usuario = '$aa'";
                                    
                                $nameImprimir = mysqli_query($mysqli, $nameU);
                                while($recorre = mysqli_fetch_array($nameImprimir)){
                                        $nameInput = $recorre['nombre_completo'];
                                        $emailInput = $recorre['email_usuario'];
                                        $deptInput = $recorre['departamento'];
                                        $usuarioInput = $recorre['nombre_usuario'];
                                        $telefono = $recorre['telefono'];
                                        }  
                                ?>

                                         <!----------------------------- Inicio Actualinizar datos ----------------------------->
          <div class="row">
            <div class="col-sm-8">
              <div class="panel panel-info">
                <div class="panel-heading text-center"><i class="fa fa-retweet"></i>&nbsp;&nbsp;<strong>Cambiar Contraseña</strong></div>
                <div class="panel-body center">
                    <form action="" method="post" role="form">
                    <div class="form-group">
                      <label class="text-primary"><i class="fa fa-male"></i>&nbsp;&nbsp;Nombre completo</label>
                      <input readonly value="<?php echo $nameInput; ?>" type="text" class="form-control" placeholder="Nombre completo" name="name_complete_update" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
                    </div>
                    <div class="form-group">
                  
                      <label class="text-primary"><i class="fa fa-user"></i>&nbsp;&nbsp;Nombre de usuario</label>
                      <input readonly value="<?php echo $usuarioInput; ?>" type="text" class="form-control" placeholder="Nombre de usuario actual" name="old_user_update" required="" pattern="[a-zA-Z0-9 ]{1,30}" title="Ejemplo7" maxlength="20">
                    </div>
                    <!-- <div class="form-group">
                      <label class="text-primary"><i class="fa fa-user"></i>&nbsp;&nbsp;Nuevo nombre de usuario</label>
                      <input type="text" class="form-control" id="input_user" placeholder="Nuevo nombre de usuario" name="new_user_update" required="" pattern="[a-zA-Z0-9 ]{1,30}" title="Ejemplo7" maxlength="20">
                      <div id="com_form"></div>
                    </div> -->
                    
                    <div class="form-group">
                      <label class="text-primary"><i class="fa fa-phone"></i>&nbsp;&nbsp;Teléfono</label>
                      <input readonly value="<?php echo $telefono; ?>" type="telefono" class="form-control"  placeholder="Escriba su número de teléfono" name="telefono_update" required="">
                    </div>
                    <div class="form-group">
                      <label class="text-primary"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Email</label>
                      <input readonly value="<?php echo $emailInput; ?>" type="email" class="form-control"  placeholder="Escriba su email" name="email_update" required="">
                    </div>
                    <div class="form-group">
                      <label class="text-danger"><i class="fa fa-key"></i>&nbsp;&nbsp;Contraseña vieja</label>
                      <input type="password" class="form-control" placeholder="Contraseña actual" name="old_pass_update" required="">
                    </div>
                    <div class="form-group">
                      <label class="text-primary"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Contraseña nueva</label>
                      <input type="password" class="form-control" placeholder="Nueva Contraseña" name="new_pass_update" required="">
                    </div>
                    <center>
                    <button type="submit" class="btn btn-info">Actualizar datos</button>
                  </form>
                </div>
              </div>
            </div><!--Fin col 8-->
                                      <!----------------------------- Fin Actualinizar datos ----------------------------->
                                      
                                               <!-- *****************Eliminar Cuenta  *****************  -->
            <!-- <div class="col-sm-4 text-center well">
              <br><br><br><br><br><br><br><br>
              <img src="img/delete_user.png" alt="Image"><br><br><br>
              <button class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Eliminar cuenta</button>
              <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title text-center text-danger" id="myModalLabel">¿Deseas eliminar tu cuenta?</h4>
                    </div>
                    <form action="" method="post" role="form" style="padding:20px;">
                      <p class="text-warning">Si estas seguro que deseas eliminar tu cuenta por favor introduce tu nombre de usuario y contraseña</p>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" name="usuario_delete" placeholder="Nombre de usuario" required="">
                      </div><br>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" name="clave_delete" placeholder="Contraseña" required="">
                      </div><br>
                      
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar cuenta</button>
                        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancelar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <br><br><br><br><br><br><br>
            </div>
          </div>
        </div> -->
<?php
}else{
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="img/Stop.png" alt="Image" class="img-responsive animated slideInDown"/><br>
                
                
            </div>
            <div class="col-sm-7 animated flip">
                <h1 class="text-danger">Lo sentimos esta página es solamente para usuarios registrados en Soporte Técnico 9-1-1</h1>
                <h3 class="text-info text-center">Inicia sesión para poder acceder</h3>
            </div>
            <div class="col-sm-1">&nbsp;</div>
        </div>
    </div>
<?php
}
?>
<script>
    $(document).ready(function(){
        $("#input_user").keyup(function(){
          $.ajax({
            url:"./process/val.php?id="+$(this).val(),
            success:function(data){
              $("#com_form").html(data);
            }
          });
        });
    });
</script>

<script>
                  // EVITAR REENVIO DE DATOS.
                  if (window.history.replaceState) { // verificamos disponibilidad
                    window.history.replaceState(null, null, window.location.href);
                  }
                  </script>
