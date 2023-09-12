<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/* Declaracion de variables   */
if (isset($_POST['user_reg']) && isset($_POST['clave_reg']) && isset($_POST['nom_complete_reg']) && isset($_POST['tel_reg']) && isset($_POST['departamentoT']) && isset($_POST['email_reg']) && isset($_POST['numEmpleado'])) {
  $id_empleado = MysqlQuery::RequestPost('id_empleado');
  $nombre_reg = utf8_encode(MysqlQuery::RequestPost('nom_complete_reg'));
  $user_reg = MysqlQuery::RequestPost('user_reg');
  $clave_reg = md5(MysqlQuery::RequestPost('clave_reg'));
  $clave_reg2 = MysqlQuery::RequestPost('clave_reg');
  $email_reg = MysqlQuery::RequestPost('email_reg');
  $id_rol_save = 4;
  $telefono = MysqlQuery::RequestPost('tel_reg');
  $regional = MysqlQuery::RequestPost('regional');
  $dep = utf8_encode(MysqlQuery::RequestPost('departamentoT'));
  $numEE = MysqlQuery::RequestPost('numEmpleado');



  $sqlUserEmail = "SELECT * FROM tbl_usuarios WHERE nombre_usuario='$user_reg' OR email_usuario='$email_reg'";

  $queryUserEmail = mysqli_query($mysqli, $sqlUserEmail);


  $sqlNumEmpleado = "SELECT EnUso FROM tbl_numeroempleado WHERE Codigo = '$numEE'";
  $queryNumEmpleado = mysqli_query($mysqli, $sqlNumEmpleado);

  if (mysqli_num_rows($queryNumEmpleado) > 0) {
    $numEmpCheck = mysqli_fetch_array($queryNumEmpleado);

    $numEmpCheckTrue = $numEmpCheck['EnUso'];
  } else {
    $numEmpCheckTrue = 1;
  }






  if ($numEmpCheckTrue == 1) {
    echo '
    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
    <p class="text-center">
    ERROR AL REGISTRARSE: El numero de empleado ya esta en uso.
    </p>
    </div>
    ';
  } else {
    if (mysqli_num_rows($queryUserEmail) > 0) {
      echo '
      <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4 class="text-center">OCURRIÓ UN ERROR</h4>
      <p class="text-center">
      ERROR AL REGISTRARSE: Este usuario o correo ya estan registrados.
      </p>
      </div>
      ';
    } else {

      if (MysqlQuery::Guardar("tbl_usuarios", "nombre_completo, nombre_usuario, id_rol, email_usuario, clave, departamento, telefono, numeroEmpleado, regional, estado", "'$nombre_reg', '$user_reg','$id_rol_save', '$email_reg', '$clave_reg', '$dep', '$telefono', '$numEE','$regional', '1'")) {


        //Asignando a casa Usuario el estado 1 que es igual a activo

        /*       $con = new mysqli('localhost', 'root', '', 'helpdesk');
        $consulta = "UPDATE tbl_usuarios SET estado = '1'  WHERE estado = '0'";
        $num_estado = mysqli_query($con, $consulta);
 */
        //Fin de Consulta

        $sql2 = "UPDATE tbl_numeroempleado SET EnUso = '1' WHERE Codigo = '$numEE'"; //CAMBIAMOS EL ESTADO A 1 CUANDO SE CREE EL USUARIO
        mysqli_query($mysqli, $sql2);



        echo '
        <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="text-center">REGISTRO EXITOSO</h4>
        <p class="text-center">
        Cuenta creada exitosamente, Soporte Técnico 9-1-1.
        </p>
        </div>
        ';
      } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="text-center">OCURRIÓ UN ERROR</h4>
        <p class="text-center">
        ERROR AL REGISTRARSE: Por favor intente nuevamente.
        </p>
        </div>
        ';
      }
    }
  }
}



/* Fin declaración */
?>



<div class="container">
  <div class="row well">
    <div class="col-sm-3">
      <img src="./img/usuario7.png" alt="Image center" class="img-responsive animated tada" width="190" height="90">
    </div>
    <div class="col-sm-9 lead">
      <a href="index.php" class="btn btn-primary  pull-right"><i class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a
        Inicio</a>
      <br><br>
      <h2 align="left" class="text-info">Registro de Nuevos Usuarios</h2>
    </div>
  </div><!--fin row 1-->
  <div class="col-sm-2">

  </div>
  <!-- Formulario para crear nuevo usuario  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <div class="panel panel-success">
          <div class="panel-heading text-center"><i class="fa fa-plus"></i><strong>&nbsp;Agregar nuevo usuario</strong>
          </div>

          <div class="panel-body">


            <form role="form" action="" method="POST">
              <div class="form-group">
                <label hidden>&nbsp;Id de Usuario</label>
                <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" placeholder="" maxlength="40">
                <label hidden>&nbsp;Id de Empleado</label>
                <input type="hidden" class="form-control" id="id_empleado" name="id_empleado" placeholder="" maxlength="40">
                <label>&nbsp;Número de Empleado</label>
                <input type="text" class="form-control" id="numEmpleado" name="numEmpleado" placeholder="Numero de empleado" maxlength="40">

              </div>
              <button type="button" class="button btn-success" onclick="nEmp();">Comprobar número empleado</button>
              <hr style="height:2px;border:none;color:#8fd38f;background-color:#8fd38f;">
              <div class="form-group">
                <label><i class="fa fa-male"></i>&nbsp;Nombre completo</label>
                <input type="text" class="form-control" name="nom_complete_reg" placeholder="Nombre completo" required="" pattern="[a-zA-Z ]{1,40}" title="Nombre Apellido" maxlength="40">
              </div>
              <div class="form-group has-success has-feedback">
                <label class="control-label"><i class="fa fa-user"></i>&nbsp;Nombre de usuario</label>
                <input type="text" id="input_user" class="form-control" name="user_reg" placeholder="Nombre de usuario" required="" pattern="[a-zA-Z0-9]{1,15}" title="Ejemplo7 maximo 15 caracteres" maxlength="20">
                <div id="com_form"></div>
              </div>
              <div class="form-group">
                <label><i class="fa fa-key"></i>&nbsp;Contraseña</label>
                <input type="password" class="form-control" name="clave_reg" placeholder="Contraseña" required="">
              </div>
              <div class="form-group">
                <label><i class="fa fa-envelope"></i>&nbsp;Email</label>
                <input type="email" class="form-control" name="email_reg" placeholder="Escriba el email" required="">
              </div>

              <div class="form-group">
                <label><i class="fa fa-envelope"></i>&nbsp;Telefono</label>
                <input type="text" class="form-control" name="tel_reg" placeholder="Escriba el telefono" required="">
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
                <label><i class="fa fa-wrench"></i>&nbsp;Departamento</label>
                <div class='input-group'>
                  <select name="departamentoT" id="departamentoT" style="color: black; width:200px; height:30px;">
                    <option style="text-align:center; font-weight:bold" value="0">
                      Seleccionar
                      Departamento
                    </option>
                    <option style="text-align:center; font-weight:bold" value="0">
                      Departamento Administrativo </option>
                    <?php

                    $dept = "SELECT id_departamento, departamento FROM tbl_departamento";
                    $query = mysqli_query($mysqli, $dept);
                    while ($departamento = mysqli_fetch_array($query)) {
                    ?>
                      <option value="<?php echo ($departamento["departamento"]) ?>"> <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"] ?></option>
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
                  </select>
                </div>
              </div>
              <!-- Fin formulario -->
              <!-- Botón para Abrir el ticket -->
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8 text-center">
                  <button type="submit" class="btn btn-info">Crear Cuenta</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>



    </div>

  </div>

</div>


</div>



<!--  Función para validar -->
<script>
  $(document).ready(function() {
    $("#input_user").keyup(function() {
      $.ajax({
        url: "./process/val.php?id=" + $(this).val(),
        success: function(data) {
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

<script type="text/javascript">
  function nEmp() {
    nEmpleado = $('#numEmpleado').val();

    $.ajax({
      method: "POST",
      data: "num=" + nEmpleado,
      url: "process/comprobarNumEmpleado.php",
      success: function(respuesta) {
        if (respuesta == 1) {
          // console.log("existe");
          Swal.fire({
            icon: 'success',
            title: '¡Este numero de empleado existe y esta disponible!',
            showConfirmButton: false,
            timer: 3500
          });
        } else {
          if (respuesta == 2) {
            // console.log("no existe");
            Swal.fire({
              icon: 'error',
              title: '¡Este numero de empleado no existe!',
              showConfirmButton: false,
              timer: 2100
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: '¡Este numero de empleado ya ha sido utilizado!',
              showConfirmButton: false,
              timer: 2100
            });
          }

        }


      }
    });
  }
</script>