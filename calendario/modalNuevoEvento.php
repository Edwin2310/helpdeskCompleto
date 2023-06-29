<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST" onclick="generateRandomNumber()" onsubmit="return validateForm();">

        <input type="hidden" class="form-control" name="idEvento" id="idEvento">

        <!-- Select para agregarle un nombre a el Evento -->
        <div class="form-group">
          <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre del Evento" required>
          </div>
        </div>
        <!-- Fin Select para agregarle un nombre a el Evento -->


        <!-- Select Fecha Inicial -->
        <div class="form-group">
          <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
          <div class="col-sm-12">
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" required>
          </div>
        </div>
        <!-- Fin Select Fecha Inicial -->


        <!-- Select Fecha Final -->
        <div class="form-group">
          <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final</label>
          <div class="col-sm-12">
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final" required>
          </div>
        </div>
        <!-- Fin Select Fecha Final -->


        <!-- Select Hora Asignacion -->
        <div class="form-group">
          <label for="hora" class="col-sm-12 control-label">Hora Asignación</label>
          <div class="col-sm-12">
            <input type="time" class="form-control" name="hora" id="hora" required>
          </div>
        </div>
        <!-- Fin Select Hora Asignacion -->


        <!-- Select Nombre de Usuario -->
        <div class="form-group">
          <label for="nombre_usuario" class="col-sm-12 control-label">Nombre Usuario</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre Usuario" required>
          </div>
        </div>
        <!-- Fin Select Nombre de Usuario -->


        <!-- Select para Ingresar el Correo -->
        <div class="form-group">
          <label for="correo" class="col-sm-12 control-label">Correo</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" name="correo" id="correo" placeholder="correo@911.gob.hn" required>
          </div>
        </div>
        <!-- Fin Select para Ingresar el Correo -->


        <!-- Select para Catálogo de Departamento del 9-1-1 -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Edificio Administrativo</label>
          <div class="col-sm-12">
            <div class='input-group'>

              <select class="form-control" name="departamento_ticket" required>
                <option value="" required> -Seleccionar Departamento- </option>

                <?php

                $dept = Mysql::consulta("SELECT id_departamento, departamento FROM tbl_departamento");

                while ($departamento = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo utf8_encode($departamento["departamento"]) ?>"> <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"] ?></option>
                <?php } ?>
              </select>

            </div>
          </div>
        </div>
        <!-- Fin Select Departamento del 9-1-1  -->

        <!-- Select para Área-->
        <div class="form-group">
          <label class="col-sm-12 control-label">Edificio Operativo</label>
          <div class="col-sm-12">
            <div class='input-group'>

              <select class="form-control" name="area_solicitud" required>
                <option value="" required> -Seleccionar Área- </option>
                <?php
                $dept = Mysql::consulta("SELECT id_area, area_solicitud FROM tbl_area_solicitud");

                while ($area_solicitud = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo utf8_encode($area_solicitud["area_solicitud"]) ?>"> <?php echo $area_solicitud["id_area"], ".-", $area_solicitud["area_solicitud"] ?></option>
                <?php } ?>
              </select>

            </div>
          </div>
        </div>
        <!-- Fin Select Área -->


        <!-- select para Regionales -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Regional</label>
          <div class='col-sm-12'>
            <div class="input-group">
              <select class="form-control" name="regional_ticket" placeholder="regional_ticket" required>
                <option value="" required> -Seleccionar Regional- </option>

                <?php
                $dept1 = Mysql::consulta("SELECT idRegional, nombreRegional FROM tbl_regionales");
                while ($ticket1 = mysqli_fetch_array($dept1)) {
                ?>
                  <option value="<?php echo utf8_encode($ticket1["nombreRegional"]) ?>"> <?php echo $ticket1["idRegional"], ".-", $ticket1["nombreRegional"] ?></option>

                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <!-- Fin Select Regionales -->


        <!-- Select para Catálogo de Turnos del 9-1-1 -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Turno</label>
          <div class="col-sm-12">
            <div class='input-group'>

              <select class="form-control" name="turnos" required>
                <option value=""> -Seleccionar Turno- </option>
                <?php

                $dept = Mysql::consulta("SELECT id_turno, turnos FROM tbl_turnos");

                while ($turnos = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo utf8_encode($turnos["turnos"]) ?>"> <?php echo $turnos["id_turno"], ".-", $turnos["turnos"] ?></option>
                <?php } ?>
              </select>

            </div>
          </div>
        </div>
        <!-- Fin Select Turnos -->


        <!-- select para asignar ticket -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Asignar Técnico</label>
          <div class='col-sm-12'>
            <div class="input-group">
              <select class="form-control" name="tecnicos_ticket" placeholder="tecnicos_ticket" onchange="asignar(value)" required>
                <option value="" required> -Asignar Técnico- </option>
                <?php
                $dept = Mysql::consulta("SELECT id_usuario, nombre_completo FROM tbl_admin  WHERE id_rol = '2'");
                while ($ticket = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo $ticket["nombre_completo"] ?>"> <?php echo $ticket["nombre_completo"] ?>
                  </option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <!-- Fin Select asignar ticket -->



        <!-- Select para Tareas a realizar -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Técnicos Asignados</label>
          <div class="col-sm-12">
            <textarea readonly class="form-control" rows="3" name="tecnicos_ticket" id="asignarT" required></textarea>
            <!-- <input type="text" class="form-control" name="tecnicos_ticket" required="" id="asignarT"> -->
          </div>
        </div>
        <!-- Fin Select Problemas -->


        <!-- Select Creado para el Problema Pesentado -->
        <div class="form-group">
          <label for="problema_presentado" class="col-sm-12 control-label">Problema Presentado</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="problema_presentado" id="problema_presentado" placeholder="Descripción del problema" required>
          </div>
        </div>
        <!-- Fin Select Creado para el Problema Pesentado -->



        <!-- Select para estado_bitacora-->
        <div class="form-group">
          <label class="col-sm-12 control-label">Estado Final</label>
          <div class="col-sm-12">
            <div class='input-group'>

              <select class="form-control" name="estado_bitacora" required>
                <option value="" required> -Seleccionar Estado- </option> <!----AQUI PONER LOS MODELOS ----->
                <?php

                $dept = Mysql::consulta("SELECT id_estado_bitacora, estado_bitacora FROM tbl_estado_bitacora");

                while ($estado_bitacora = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo utf8_encode($estado_bitacora["estado_bitacora"]) ?>"> <?php echo $estado_bitacora["id_estado_bitacora"], ".-", $estado_bitacora["estado_bitacora"] ?></option>
                <?php } ?>
              </select>

            </div>
          </div>
        </div>
        <!-- Fin Select estado_bitacora -->

        <!-- Select Creado para la Serie -->
        <div class="form-group" hidden>
          <label for="serie" class="col-sm-12 control-label">Serie</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="serie" id="serie">

          </div>
        </div>
        <!-- Fin Select Creado para la Serie -->



        <!-- DIV creado para escoger el tipo de color -->
        <div class="col-md-12" id="grupoRadio">

          <input type="radio" name="color_evento" id="orange" value="#FF5722" checked>
          <label for="orange" class="circu" style="background-color: #FF5722;"> </label>

          <input type="radio" name="color_evento" id="amber" value="#FFC107">
          <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

          <input type="radio" name="color_evento" id="lime" value="#8BC34A">
          <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

          <input type="radio" name="color_evento" id="rojo" value="#f52929">
          <label for="rojo" class="circu" style="background-color: #f52929;"> </label>

          <input type="radio" name="color_evento" id="blue" value="#2196F3">
          <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

          <input type="radio" name="color_evento" id="indigo" value="#9c27b0">
          <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

          <input type="radio" name="color_evento" id="black" value="#000001">
          <label for="black" class="circu" style="background-color: #000001;"> </label>

          <input type="radio" name="color_evento" id="gris" value="#C0C0C0">
          <label for="gris" class="circu" style="background-color: #C0C0C0;"> </label>


        </div>
        <!--Fin DIV creado para escoger el tipo de color -->


        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        </div>
      </form>

    </div>
  </div>
</div>





<!-- SWEETALERT -->
<script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- IMPORTANTE: ESTE SOLO DA AQUI -->
<!-- SWEETALERT -->




<!--********* Script *********-->


<!-- Script para crear un numero de Serie aleatorio por cada Evento -->
<script type="text/javascript">
  function generateRandomNumber() {
    // Genera un número aleatorio entre 0 y 100
    const randomNumber = Math.random().toString(36).substring(2, 12)

    // Asigna el número aleatorio al input
    document.getElementById('serie').value = randomNumber;

  }
</script>
<!-- Fin Script para crear un numero de Serie aleatorio por cada Evento -->


<!-- Funcion Creada Para Mostrar La Alerta -->
<script type="text/javascript">
  function validateForm() {
    var x = document.getElementById("problema_presentado").value;
    if (x.trim() == "") {
      swal("El campo no puede estar vacío o contener solo espacios en blanco.", {
        buttons: false,
        timer: 2000,
      });
      return false;


    } else {
      event.preventDefault();
      Swal.fire({
        title: '¿Desea enviar el formulario?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
      }).then((result) => {
        if (result.value) {
          document.formEvento.submit();
        }
        return false;
      })
    }

  }
</script>
<!-- Fin De Funcion Creada Para Mostrar La Alerta -->





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