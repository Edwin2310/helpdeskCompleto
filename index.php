<?php
session_start();
include './lib/nuevaConexion.php';
include './lib/config.php';
include './lib/conexion.php';
header('Content-Type: text/html; charset=UTF-8');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set("America/Tegucigalpa"); // Trae de vuelta la Fecha y hora automatica
$fecha_Index = date('Y-M-d H:i:s');
if (isset($_SESSION['user'])) {
  if ($_SESSION['tipoUser'] == 1) {
    $tiempoDesloguear = 1800; // 60 seconds * 30 minutes = 1800 ... Tiempo de para desconexion del sistema
  } else {
    $tiempoDesloguear = 45000;
  }

  // if ((time() - $_SESSION["last_time"]) > 45000) { 
  if ((time() - $_SESSION["last_time"]) > $tiempoDesloguear) {
    header('Location: cerrarSesion.php?user=' . base64_encode($_SESSION['user']));
  } else {
    // $_SESSION["last_time"] = time();
    $VarSession = $_SESSION['user'];

    //Consulta para todo el sistema
    if ($_SESSION['tipoUser'] == 1) {
      $sql = "SELECT * FROM tbl_usuarios WHERE email_usuario = '$VarSession'";
    } else {
      $sql = "SELECT * FROM tbl_admin WHERE email_usuario = '$VarSession'";
    }
    // $sql = "SELECT * FROM tbl_usuarios WHERE nombre_usuario='$VarSession'";
    $r = mysqli_query($mysqli, $sql);
    while ($reg = mysqli_fetch_array($r)) {
      $_SESSION['tipo'] = $reg['id_rol'];
      $_SESSION['nombre'] = $reg['nombre_usuario'];
      $_SESSION['id'] = $reg['id_usuario'];
    }
  }
} else {
  header('Location: loginFuncional.php');
  exit;
}


// PHP code to get the MAC address of Client
// $MAC = exec('getmac');

// Storing 'getmac' value in $MAC
// $MAC = strtok($MAC, ' ');


// if($MAC == '48-4D-7E-A3-50-B3'){
//     echo $MAC; 
// } else{
//     echo "nope";
// }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>


<!DOCTYPE html>
<html>

<head>
  <title>Soporte Técnico 9-1-1</title>
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/911icon.ico">
  <?php include "./inc/links.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
  </script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
</head>

<body>
  <?php include "./inc/navbar.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-header">
          <h1 class="animated lightSpeedIn">Soporte Técnico 9-1-1</h1>
          <!-- <h1 class="animated lightSpeedIn"><?php //echo $mmm; 
          ?></h1> -->
          <span class="label label-danger">Sistema Nacional de Emergencias 9-1-1</span>
          <!-- <a class="nav-link " href=" cerrarSesion.php?user=<?php //echo base64_encode($VarSession); 
          ?>">cerrar sesion</a> -->
          <p class="pull-right text-primary">
            <strong>
              <?php include "./inc/timezone.php"; ?>
            </strong>
          </p>
          <!-- <button type="button" onclick="getMac();">MAC</button> -->
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_GET['view'])) {
    $content = $_GET['view'];
    $WhiteList = ["index", "ticket", "ticketcon", "ticketadmin", "registro", "configuracion", "configuracionUser", "calendario", "informe", "bitacora"];
    if (in_array($content, $WhiteList) && is_file("./user/" . $content . "-view.php")) {
      include "./user/" . $content . "-view.php";
    } else {
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img src="./img/Stop.png" alt="Image" class="img-responsive" /><br>


          </div>
          <div class="col-sm-7 text-center">
            <h1 class="text-danger">Lo sentimos, la opción que ha seleccionado no se encuentra disponible</h1>
            <h3 class="text-info">Por favor intente nuevamente</h3>
          </div>
          <div class="col-sm-1">&nbsp;</div>
        </div>
      </div>
      <?php
    }
  } else {
    // if($_SESSION['tipo'] == 4){
    //     include "./admin/dictamen-view.php";
    //     // include "admin.php";
    //     // header('Location: ./admin/dictamen-view.php'); 
    // }else{
    include "./user/index-view.php";
    // }           
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.3/dist/sweetalert2.all.min.js"
    integrity="sha256-qLED6pNKyHLH2GHsu5GJIx4Lq1LrmGz7x2hZZ7kg4hU=" crossorigin="anonymous"></script>

  <!-- <script>
   
  //  function getMac(){
  //   network.get_active_interface(function(err, obj) {

  //     console.log(obj.mac_address);
  //     /* objeto resultante:

  //     { name: 'eth0',
  //       ip_address: '10.0.1.3',
  //       mac_address: '56:e5:f9:e4:38:1d',
  //       type: 'Wired',
  //       netmask: '255.255.255.0',
  //       gateway_ip: '10.0.1.1' }

  //     */

  //     });


  //  }
   
</script> -->

</body>

</html>