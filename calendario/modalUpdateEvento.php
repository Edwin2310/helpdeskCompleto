<div class="modal" id="modalUpdateEvento" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="formEventoUpdate" id="formEventoUpdate" action="UpdateEvento.php" class="form-horizontal" method="POST">


        <input type="hidden" class="form-control" name="idEvento" id="idEvento">

        <!-- Select para agregarle un nombre a el Evento -->
        <div class="form-group">
          <label for="evento" class="col-sm-12 control-label">Nombre del Evento</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="evento" id="evento" required>
          </div>
        </div>
        <!-- Fin Select para agregarle un nombre a el Evento -->



        <!-- Select Fecha Inicial -->
        <div class="form-group">
          <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicial Anterior</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" readonly>
          </div>
        </div>
        <!-- Fin Select Fecha Inicial -->


        <!-- Select Fecha Inicial -->
        <div class="form-group">
          <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicial Nueva</label>
          <div class="col-sm-12">
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" required>
          </div>
        </div>
        <!-- Fin Select Fecha Inicial -->


        <!-- Select Fecha Final -->
        <div class="form-group">
          <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final Anterior </label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" readonly>
          </div>
        </div>
        <!-- Fin Select Fecha Final -->

        <!-- Select Fecha Final -->
        <div class="form-group">
          <label for="fecha_fin" class="col-sm-12 control-label">Fecha Final Nueva</label>
          <div class="col-sm-12">
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" required>
          </div>
        </div>
        <!-- Fin Select Fecha Final -->





        <!-- Select Hora Asignacion -->
        <div class="form-group">
          <label for="hora" class="col-sm-12 control-label">Hora Asignada</label>
          <div class="col-sm-12">
            <input type="time" class="form-control" name="hora" id="hora" required>
          </div>
        </div>
        <!-- Fin Select Hora Asignacion -->

        <!-- Select Nombre de Usuario -->
        <div class="form-group">
          <label for="nombre_usuario" class="col-sm-12 control-label">Nombre Usuario</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" required>
          </div>
        </div>
        <!-- Fin Select Nombre de Usuario -->

        <!-- Select para Ingresar el Correo -->
        <div class="form-group">
          <label for="correo" class="col-sm-12 control-label">Correo</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" name="correo" id="correo" required>
          </div>
        </div>
        <!-- Fin Select para Ingresar el Correo -->


        <!-- Select para Catálogo de Departamento del 9-1-1 -->
        <div class="form-group">
          <label for="departamento_ticket" class="col-sm-12 control-label">Departamento</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="departamento_ticket" id="departamento_ticket" readonly>
          </div>
        </div>
        <!-- Fin Select Departamento del 9-1-1  -->


        <!-- Select para Área-->
        <div class="form-group">
          <label for="area_solicitud" class="col-sm-12 control-label">Area Solicitud</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="area_solicitud" id="area_solicitud" readonly>
          </div>
        </div>
        <!-- Fin Select Área -->


        <!-- select para Regionales -->
        <div class="form-group">
          <label for="regional_ticket" class="col-sm-12 control-label">Regional</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="regional_ticket" id="regional_ticket" readonly>
          </div>
        </div>
        <!-- Fin Select Regionales -->


        <!-- select para asignar ticket -->
        <div class="form-group">
          <label for="tecnicos_ticket" class="col-sm-12 control-label">Tecnico Anterior</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="tecnicos_ticket" id="tecnicos_ticket" readonly>
          </div>
        </div>
        <!-- Fin Select asignar ticket -->



        <!-- select para Regionales -->
        <div class="form-group">
          <label for="turnos" class="col-sm-12 control-label">Turno Anterior</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="turnos" id="turnos" readonly>
          </div>
        </div>
        <!-- Fin Select Regionales -->


        <!-- Select para Catálogo de Turnos del 9-1-1 -->
        <div class="form-group">
          <label class="col-sm-12 control-label">Turno Actual</label>
          <div class="col-sm-12">
            <div class='input-group'>

              <select class="form-control" name="turnos" required>
                <option value=""> -Seleccionar Turno- </option>
                <?php

                $dept = Mysql::consulta("SELECT id_turno, turnos FROM tbl_turnos");

                while ($turnos = mysqli_fetch_array($dept)) {
                ?>
                  <option value="<?php echo utf8_encode($turnos["turnos"]) ?>"> <?php echo $turnos["id_turno"], ".-", $turnos["turnos"] ?></option>
                <?php }  ?>
              </select>

            </div>
          </div>
        </div>
        <!-- Fin Select Turnos -->












        <!-- Select Creado para el Problema Pesentado -->
        <div class="form-group">
          <label for="problema_presentado" class="col-sm-12 control-label">Problema Presentado</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="problema_presentado" id="problema_presentado" required>
          </div>
        </div>
        <!-- Fin Select Creado para el Problema Pesentado -->


        <!-- Select Creado para el Problema Pesentado -->
        <div class="form-group">
          <label for="estado_bitacora" class="col-sm-12 control-label">Estado Actual</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="estado_bitacora" id="estado_bitacora" readonly>
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
                <?php }  ?>
              </select>
            </div>
          </div>
        </div>
        <!-- Fin Select estado_bitacora -->


        <!-- DIV creado para escoger el tipo de color -->
        <div class="col-md-12 activado">

          <input type="radio" name="color_evento" id="orangeUpd" value="#FF5722" checked>
          <label for="orangeUpd" class="circu" style="background-color: #FF5722;"> </label>

          <input type="radio" name="color_evento" id="amberUpd" value="#FFC107">
          <label for="amberUpd" class="circu" style="background-color: #FFC107;"> </label>

          <input type="radio" name="color_evento" id="limeUpd" value="#8BC34A">
          <label for="limeUpd" class="circu" style="background-color: #8BC34A;"> </label>

          <input type="radio" name="color_evento" id="rojoUpd" value="#f52929">
          <label for="rojoUpd" class="circu" style="background-color: #f52929;"> </label>

          <input type="radio" name="color_evento" id="blueUpd" value="#2196F3">
          <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

          <input type="radio" name="color_evento" id="indigoUpd" value="#9c27b0">
          <label for="indigoUpd" class="circu" style="background-color: #9c27b0;"> </label>

          <input type="radio" name="color_evento" id="blackUpd" value="#000001">
          <label for="blackUpd" class="circu" style="background-color: #000001;"> </label>

          <input type="radio" name="color_evento" id="grisUpd" value="#C0C0C0">
          <label for="grisUpd" class="circu" style="background-color: #C0C0C0;"> </label>

        </div>
        <!--Fin DIV creado para escoger el tipo de color -->



        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar Cambios</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        </div>
      </form>

      <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
      </form>
    </div>
  </div>
</div>