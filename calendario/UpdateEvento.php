<?php
date_default_timezone_set("America/Tegucigalpa");
setlocale(LC_ALL, "es_ES");

include('config.php');

$idEvento         = $_POST['idEvento'];
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
$color_evento = $_POST['color_evento'];
$turn = $_POST['turnos'];



$UpdateProd = ("UPDATE tbl_calendario
    SET evento ='$evento',
        fecha_inicio ='$fecha_inicio',
        fecha_fin ='$fecha_fin',
        hora ='$time',
        nombre_usuario ='$name',
        correo ='$email',
        departamento_ticket ='$depto',
        area_solicitud ='$area',
        regional_ticket ='$reg',
        turnos ='$turn',
        tecnicos_ticket ='$asignar',
        problema_presentado ='$problema',
        estado_bitacora ='$est',
        color_evento ='$color_evento'
    WHERE id='" . $idEvento . "' ");
$result = mysqli_query($con, $UpdateProd);

header("Location:index.php?ea=1");
