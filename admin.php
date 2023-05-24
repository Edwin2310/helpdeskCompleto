<?php
session_start();
include './lib/conexion.php';
include './lib/config.php';
include './lib/nuevaConexion.php';
header('Content-Type: text/html; charset=UTF-8');

// if($_SESSION['tipo']!="1" && $_SESSION['tipo']!="2"){
//     session_start(); 
//     session_unset();
//     session_destroy();
//     header("Location: ./index.php"); 
// }
if ($_SESSION['tipoUser'] == 1) {
  $tiempoDesloguear = 1800; // 60 seconds * 30 minutes = 1800 ... Tiempo de para desconexion del sistema
} else {
  $tiempoDesloguear = 45000;
}
if ((time() - $_SESSION["last_time"]) > $tiempoDesloguear) {
  header('Location: cerrarSesion.php?user=' . base64_encode($_SESSION['user']));
} else {
  if ($_SESSION['nombre'] != "" && $_SESSION['tipoUser'] == "2") {
    ?>

    <!DOCTYPE html>
    <html>

    <head>
      <title>Soporte Técnico 9-1-1</title>
      <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/911icon.ico">
      <?php include "./inc/links.php"; ?>
    </head>

    <body>
      <?php include "./inc/navbar.php"; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-header">
              <h1 class="animated lightSpeedIn">Soporte Técnico 9-1-1</h1>
              <span class="label label-danger">Sistema Nacional de Emergencias 9-1-1</span>
              <p class="pull-right text-primary">
                <strong>
                  <?php include "./inc/timezone.php"; ?>
                </strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php

      $WhiteList = [
        "ticketadmin",
        "archivoEs",
        "archivosDes",
        "archivodesa",
        "dictamen",
        "bitacora",
        "salida",
        "informe",
        "calendario",
        "registro",
        "ticketeditespecial",
        "crearticketadmin",
        "ticketpendiente",
        "ticketenproceso",
        "ticketresuelto",
        "ticketrechazado",
        "todoslostickets",
        "todaslasbitacoras",
        "todoslosinformes",
        "todoslosformularios",
        "todosloscalendarios",
        "ticketespecial",
        "ticket",
        "ticketedit",
        "users",
        "admin",
        "desarrolladores",
        "bienes",
        "deshabilitados",
        "desactivar",
        "config",
        "crearadmin",
        "userGeneral",
        "ticketdesarrollo",
        "crearticketdesarrollo",
        "ticketeditDes",
        "dictamenSubir",
        "adminedit",
        "usuarioedit",
        "useredit",
        "cambiocontrausers",
        "cambiocontadmin",
        "excelTicket"
      ];
      if (isset($_GET['view']) && in_array($_GET['view'], $WhiteList) && is_file("./admin/" . $_GET['view'] . "-view.php")) {
        include "./admin/" . $_GET['view'] . "-view.php";
      } else {
        echo '<h2 class="text-center">Lo sentimos, la opción que ha seleccionado no se encuentra disponible</h2>';
      }
  } else {


    ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown" /><br>

          </div>
          <div class="col-sm-7 animated flip">
            <h1 class="text-danger">Lo sentimos esta página es solamente para Tecnicos de Soporte Técnico 9-1-1</h1>
            <h3 class="text-info text-center">Inicia sesión como Tecnicos para poder acceder</h3>
          </div>
          <div class="col-sm-1">&nbsp;</div>
        </div>
      </div>
      <?php

  }
}
?>
  <script>
    $(document).ready(function () {

      $("#input_user").keyup(function () {
        $.ajax({
          url: "./process/val_admin.php?id=" + $(this).val(),
          success: function (data) {
            $("#com_form").html(data);
          }
        });
      });


      $("#input_user2").keyup(function () {
        $.ajax({
          url: "./process/val_admin.php?id=" + $(this).val(),
          success: function (data) {
            $("#com_form2").html(data);
          }
        });
      });

    });
  </script>
  <script type="text/javascript" src="DataTables/JSZip-2.5.0/jszip.js"></script>
  <script type="text/javascript" src="DataTables/pdfmake-0.1.36/pdfmake.js"></script>
  <script type="text/javascript" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="DataTables/DataTables-1.11.5/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="DataTables/DataTables-1.11.5/js/dataTables.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/AutoFill-2.3.7/js/dataTables.autoFill.js"></script>
  <script type="text/javascript" src="DataTables/AutoFill-2.3.7/js/autoFill.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/dataTables.buttons.js"></script>
  <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.colVis.js"></script>
  <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.html5.js"></script>
  <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.print.js"></script>
  <script type="text/javascript" src="DataTables/ColReorder-1.5.5/js/dataTables.colReorder.js"></script>
  <script type="text/javascript" src="DataTables/DateTime-1.1.2/js/dataTables.dateTime.js"></script>
  <script type="text/javascript" src="DataTables/FixedColumns-4.0.2/js/dataTables.fixedColumns.js"></script>
  <script type="text/javascript" src="DataTables/FixedHeader-3.2.2/js/dataTables.fixedHeader.js"></script>
  <script type="text/javascript" src="DataTables/KeyTable-2.6.4/js/dataTables.keyTable.js"></script>
  <script type="text/javascript" src="DataTables/Responsive-2.2.9/js/dataTables.responsive.js"></script>
  <script type="text/javascript" src="DataTables/Responsive-2.2.9/js/responsive.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/RowGroup-1.1.4/js/dataTables.rowGroup.js"></script>
  <script type="text/javascript" src="DataTables/RowReorder-1.2.8/js/dataTables.rowReorder.js"></script>
  <script type="text/javascript" src="DataTables/Scroller-2.0.5/js/dataTables.scroller.js"></script>
  <script type="text/javascript" src="DataTables/SearchBuilder-1.3.2/js/dataTables.searchBuilder.js"></script>
  <script type="text/javascript" src="DataTables/SearchBuilder-1.3.2/js/searchBuilder.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/SearchPanes-2.0.0/js/dataTables.searchPanes.js"></script>
  <script type="text/javascript" src="DataTables/SearchPanes-2.0.0/js/searchPanes.bootstrap5.js"></script>
  <script type="text/javascript" src="DataTables/Select-1.3.4/js/dataTables.select.js"></script>
  <script type="text/javascript" src="DataTables/StateRestore-1.1.0/js/dataTables.stateRestore.js"></script>
  <script type="text/javascript" src="DataTables/StateRestore-1.1.0/js/stateRestore.bootstrap5.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.3/dist/sweetalert2.all.min.js"
    integrity="sha256-qLED6pNKyHLH2GHsu5GJIx4Lq1LrmGz7x2hZZ7kg4hU=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      var table = $('#example').DataTable({
        "responsive": true,
        "autoWidth": true,
        lengthChange: false,

      });
      new $.fn.dataTable.FixedHeader(table);
      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
    $(document).ready(function () {
      var table = $('#example2').DataTable({
        "responsive": true,
        "autoWidth": true,
        lengthChange: false
      });
      new $.fn.dataTable.FixedHeader(table);
      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>