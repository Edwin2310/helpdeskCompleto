<?php
include '../lib/nuevaConexion.php';
header('Content-Type: text/html; charset=UTF-8');

if (isset($_GET['Tipoticket'])) {
    $Tipoticket = $_GET['Tipoticket'];


    if ($Tipoticket == 0) {
        $sql = "SELECT * FROM tbl_bitacoras";
    }
    if ($Tipoticket == 1) {
        $sql = "SELECT * FROM tbl_bitacoras WHERE estado_bitacora='Resuelto'";
    }

    if ($Tipoticket == 2) {
        $sql = "SELECT * FROM tbl_bitacoras WHERE estado_bitacora='Pendiente'";
    }

    if ($Tipoticket == 3) {
        $sql = "SELECT * FROM tbl_bitacoras WHERE estado_bitacora='Rechazado'";
    }

    if ($Tipoticket == 4) {
        $sql = "SELECT * FROM tbl_bitacoras WHERE estado_bitacora='En proceso'";
    }

} else {
    $sql = "SELECT * FROM tbl_bitacoras";
}



$query = mysqli_query($mysqli, $sql);

$salida = "";
$cont = 1;

$salida .= "<table>";
$salida .= "<thead> <th>#</th> <th>Fecha</th> <th>Serie</th> <th>Departamento</th> <th>Regional</th><th>Tecnicos Asignados</th> <th>Descipcion de Equipos</th> <th>Problema Presentado</th> <th>Solucion</th> <th>Estado Bitacora</th> </thead>";
while ($ticket = mysqli_fetch_array($query)) {
    $salida .= "<tr> <td>" . $cont . "</td> <td>" . $ticket['fecha'] . "</td> <td>" . $ticket['serie'] . "</td> <td>" . utf8_decode($ticket['departamento_ticket']) . "</td> <td>" . utf8_decode($ticket['regional_ticket']) . "</td> <td>" . utf8_decode($ticket['tecnicos_ticket']) . "</td> <td>" . utf8_decode($ticket['descripcion_equipos']) . "</td> <td>" . utf8_decode($ticket['problema_presentado']) . "</td> <td>" . utf8_decode($ticket['solucion']) . "</td>  <td>" . $ticket['estado_bitacora'] . "</td> </tr>";
    $cont++;
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_" . time() . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;