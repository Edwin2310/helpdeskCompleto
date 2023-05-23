<?php
include '../lib/nuevaConexion.php';
header('Content-Type: text/html; charset=UTF-8');

if (isset($_GET['Tipoticket'])) {
    $Tipoticket = $_GET['Tipoticket'];

    if ($Tipoticket == 0) {
        $sql = "SELECT * FROM tbl_ticket";
    }
    if ($Tipoticket == 1) {
        $sql = "SELECT * FROM tbl_ticket WHERE estado_ticket='Resuelto'";
    }

    if ($Tipoticket == 2) {
        $sql = "SELECT * FROM tbl_ticket WHERE estado_ticket='Pendiente'";
    }

    if ($Tipoticket == 3) {
        $sql = "SELECT * FROM tbl_ticket WHERE estado_ticket='Rechazado'";
    }

    if ($Tipoticket == 4) {
        $sql = "SELECT * FROM tbl_ticket WHERE estado_ticket='En proceso'";
    }
} else {
    $sql = "SELECT * FROM tbl_ticket";
}




$query = mysqli_query($mysqli, $sql);

$salida = "";
$cont = 1;
$salida .= "<table>";
$salida .= "<thead> <th>#</th> <th>Fecha</th> <th>Serie</th> <th>Estado del ticket</th> <th>Usuario creador</th> <th>Email</th> <th>Departamento</th> <th>Problema Presentado</th> <th>Solucion</th> <th>Asignado a</th></thead>";
while ($ticket = mysqli_fetch_array($query)) {
    $salida .= "<tr> <td>" . $cont . "</td> <td>" . $ticket['fecha'] . "</td> <td>" . $ticket['serie'] . "</td> <td>" . utf8_decode($ticket['estado_ticket']) . "</td> <td>" . utf8_decode($ticket['nombre_usuario']) . "</td> <td>" . $ticket['email'] .
        "</td> <td>" . utf8_decode($ticket['id_dept']) . "</td> <td>" . utf8_decode($ticket['asunto']) . "</td> <td>" . utf8_decode($ticket['solucion']) . "</td> <td>" . utf8_decode($ticket['asignar_ticket']) . "</td> </tr>";
    $cont++;
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_" . time() . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;