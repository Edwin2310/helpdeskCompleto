<?php
date_default_timezone_set("America/Tegucigalpa");
setlocale(LC_ALL, "es_ES");
//$hora = date("g:i:A");

require("config.php");
$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio));
$f_fin             = $_REQUEST['fecha_fin'];
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));
$fecha_fin1        = strtotime($seteando_f_final . "+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));
$time = $_POST['hora'];
$name = $_POST['nombre_usuario'];
$email = $_POST['correo'];

$depto = $_POST['departamento_ticket'];
$area = $_POST['area_solicitud'];
$reg = $_POST['regional_ticket'];
$asignar = $_POST['tecnicos_ticket'];

$problema = $_POST['problema_presentado'];
$serial = $_POST['serie'];
$est = $_POST['estado_bitacora'];
$turn = $_POST['turnos'];

$color_evento = $_POST['color_evento'];



$InsertNuevoEvento = "INSERT INTO tbl_calendario(
  evento,
  fecha_inicio,
  fecha_fin,
  hora,
  nombre_usuario,
  correo,
  departamento_ticket,
  area_solicitud,
  regional_ticket,
  turnos,
  tecnicos_ticket,
  problema_presentado,
  serie,
  estado_bitacora,
  color_evento
  )
  VALUES (
    '" . $evento . "',
    '" . $fecha_inicio . "',
    '" . $fecha_fin . "',
    '" . $time . "',
    '" . $name . "',
    '" . $email . "',
    '" . $depto . "',
    '" . $area . "',
    '" . $reg . "',
    '" . $turn . "',
    '" . $asignar . "',
    '" . $problema . "',
    '" . $serial . "',
    '" . $est . "',
    '" . $color_evento . "'
    )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

header("Location:index.php?e=1");
