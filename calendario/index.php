<?php
session_start();
include '../lib/nuevaConexion.php';
include '../lib/config.php';
include '../lib/conexion.php';
include('../inc/navbar_calendario.php');


?>


<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="../img/911.png">
  <title>Soporte Técnico 9-1-1</title>
  <link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
  <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>


</head>

<body>

  <?php


  include('config.php');

  $SqlEventos = ("SELECT * FROM tbl_calendario");
  $resulEventos = mysqli_query($con, $SqlEventos);

  ?>
  <div class="mt-5"></div>

  <div class="container">
    <div class="row well">
      <div class="col-sm-3">
        <!--- Boton ver informes creados --->
        <a href="../admin.php?view=todosloscalendarios" style="margin: 3px" class="btn btn-success pull-right"><i
            class="fa fa-calendar" style="font-size:20px;color:white"></i>&nbsp;Ver Los Calendarios Creados</a>
      </div>

      <div class="col-sm-9 ">
        <a href="../index.php" style="margin: px" class="btn btn-success pull-right"><i
            class="fa fa-reply"></i>&nbsp;&nbsp;Regresar a el Menú Principal</a>
        <h2 align="center">Calendario Para Asignación De Ticket</h2>
      </div>
    </div>
    <!--fin row 1-->


    <div class="row">
      <div class="col msjs">
        <?php
        include('msjs.php');
        ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 mb-3">
        <br>
      </div>
    </div>
  </div>



  <br><br>
  <div id="calendar"></div>
  <br><br>




  <?php
  include('modalNuevoEvento.php');
  include('modalUpdateEvento.php');
  ?>



  <!-- SWEETALERT -->
  <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- IMPORTANTE: ESTE SOLO DA AQUI -->
  <!-- SWEETALERT -->

  <script src="js/jquery-3.0.0.min.js"> </script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/moment.min.js"></script>
  <script type="text/javascript" src="js/fullcalendar.min.js"></script>
  <script src='locales/es.js'></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#calendar").fullCalendar({
        header: {
          left: "prev,next today",
          center: "title",
          right: "month,agendaWeek,agendaDay"
        },

        locale: 'es',

        defaultView: "month",
        navLinks: true,
        editable: true,
        eventLimit: true,
        selectable: true,
        selectHelper: false,

        //Nuevo Evento
        select: function (start, end) {
          $("#exampleModal").modal();
          $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));
          $('input[name=evento').val(event.title);
          $('input[name=hora').val(event.time);
          $('input[name=nombre_usuario').val(event.name);
          $('input[name=correo').val(event.email);
          $('input[name=departamento_ticket').val(event.depto);
          $('input[name=area_solicitud').val(event.area);
          $('input[name=regional_ticket').val(event.reg);
          $('input[name=tecnicos_ticket').val(event.asignar);
          $('input[name=problema_presentado').val(event.problema);
          $('input[name=serie').val(event.serial);
          $('input[name=estado_bitacora').val(event.est);
          $('input[name=turnos').val(event.turn);




          var valorFechaFin = end.format("DD-MM-YYYY");
          var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
          $('input[name=fecha_fin').val(F_final);

        },

        events: [
          <?php
          while ($dataEvento = mysqli_fetch_array($resulEventos)) { ?> {
              _id: '<?php echo $dataEvento['id']; ?>',
              title: '<?php echo $dataEvento['evento']; ?>',
              start: '<?php echo $dataEvento['fecha_inicio']; ?>',
              end: '<?php echo $dataEvento['fecha_fin']; ?>',
              color: '<?php echo $dataEvento['color_evento']; ?>',
              time: '<?php echo $dataEvento['hora']; ?>',
              name: '<?php echo $dataEvento['nombre_usuario']; ?>',
              email: '<?php echo $dataEvento['correo']; ?>',
              depto: '<?php echo $dataEvento['departamento_ticket']; ?>',
              area: '<?php echo $dataEvento['area_solicitud']; ?>',
              reg: '<?php echo $dataEvento['regional_ticket']; ?>',
              turn: '<?php echo $dataEvento['turnos']; ?>',
              asignar: '<?php echo $dataEvento['tecnicos_ticket']; ?>',
              problema: '<?php echo $dataEvento['problema_presentado']; ?>',
              serial: '<?php echo $dataEvento['serie']; ?>',
              est: '<?php echo $dataEvento['estado_bitacora']; ?>'



            },
          <?php } ?>
        ],


        //Eliminar Evento
        eventRender: function (event, element) {
          element
            .find(".fc-content")
            .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");

          //Eliminar evento
          element.find(".closeon").on("click", function () {

            var pregunta = confirm("¿Deseas Borrar este Evento?");
            if (pregunta) {

              $("#calendar").fullCalendar("removeEvents", event._id);

              $.ajax({
                title: '¿Desea borrar el formulario?',
                type: "POST",
                url: 'deleteEvento.php',
                data: {
                  id: event._id
                },
                success: function (datos) {
                  $(".alert-danger").show();

                  setTimeout(function () {
                    $(".alert-danger").slideUp(500);
                  }, 3000);

                }
              });
            }
          });
        },


        //Moviendo Evento Drag - Drop
        eventDrop: function (event, delta) {
          var idEvento = event._id;
          var start = (event.start.format('DD-MM-YYYY'));
          var end = (event.end.format("DD-MM-YYYY"));

          $.ajax({
            url: 'drag_drop_evento.php',
            data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
            type: "POST",
            success: function (response) {
              // $("#respuesta").html(response);
            }
          });
        },

        //Modificar Evento del Calendario 
        eventClick: function (event) {
          var idEvento = event._id;
          $('input[name=idEvento').val(idEvento);
          $('input[name=evento').val(event.title);
          $('input[name=fecha_inicio').val(event.start.format('DD-MM-YYYY'));
          $('input[name=fecha_fin').val(event.end.format("DD-MM-YYYY"));
          $('input[name=hora').val(event.time);
          $('input[name=nombre_usuario').val(event.name);
          $('input[name=correo').val(event.email);
          $('input[name=departamento_ticket').val(event.depto);
          $('input[name=area_solicitud').val(event.area);
          $('input[name=regional_ticket').val(event.reg);
          $('input[name=turnos').val(event.turn);
          $('input[name=tecnicos_ticket').val(event.asignar);
          $('input[name=problema_presentado').val(event.problema);
          $('input[name=serie').val(event.serial);
          $('input[name=estado_bitacora').val(event.est);


          $("#modalUpdateEvento").modal();
        },


      });


      //Oculta mensajes de Notificacion
      setTimeout(function () {
        $(".alert").slideUp(300);
      }, 3000);


    });
  </script>

</body>

</html>