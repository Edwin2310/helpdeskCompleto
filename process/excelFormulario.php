<?php
include '../lib/nuevaConexion.php';
header('Content-Type: text/html; charset=UTF-8');

if (isset($_GET['Tipoticket'])) {
    $Tipoticket = $_GET['Tipoticket'];


    if ($Tipoticket == 0) {
        $sql = "SELECT * FROM tbl_equipo_entrada";
    }
    if ($Tipoticket == 1) {
        $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Resuelto'";
    }

    if ($Tipoticket == 2) {
        $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Pendiente'";
    }

    if ($Tipoticket == 3) {
        $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Rechazado'";
    }

    if ($Tipoticket == 4) {
        $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='En proceso'";
    }

} else {
    $sql = "SELECT * FROM tbl_equipo_entrada";
}



$query = mysqli_query($mysqli, $sql);

$salida = "";
$cont = 1;

$salida .= "<table>";
$salida .= "<thead> <th>#</th> <th>Fecha</th> <th>Serie</th> <th>Edificio</th> <th>Departamento</th> <th>Tecnico</th> <th>Usuario</th> <th>Procesador</th> <th>Disco Duro</th> <th>Memoria RAM</th> <th>Service/Tag</th> <th>No.Inventario</th>  <th>Equipo</th> <th>Dispositivos Adicionales</th> <th>Diagnostico</th> <th>Solucion</th> <th>Requerimiento</th> <th>Lugar Trabajo</th>  <th>Fecha Entrega</th> <th>Hora</th> <th>Observaciones</th> <th>Estado Informe</th> </thead>";
while ($ticket = mysqli_fetch_array($query)) {
    $salida .= "<tr> <td>" . $cont .
        "</td> <td>" . $ticket['fecha'] .
        "</td> <td>" . $ticket['serie'] .
        "</td> <td>" . utf8_decode($ticket['edificio']) .
        "</td> <td>" . utf8_decode($ticket['departamento']) .
        "</td> <td>" . utf8_decode($ticket['tecnico']) .
        "</td> <td>" . utf8_decode($ticket['usuario']) .
        "</td> <td>" . utf8_decode($ticket['procesador']) .
        "</td> <td>" . utf8_decode($ticket['disco']) .
        "</td> <td>" . utf8_decode($ticket['memoria']) .
        "</td> <td>" . utf8_decode($ticket['service']) .
        "</td> <td>" . utf8_decode($ticket['inventario']) .
        "</td> <td>" . utf8_decode($ticket['equipo']) .
        "</td> <td>" . utf8_decode($ticket['adicionales']) .
        "</td> <td>" . utf8_decode($ticket['diagnostico']) .
        "</td> <td>" . utf8_decode($ticket['solucion']) .
        "</td> <td>" . utf8_decode($ticket['requerimiento']) .
        "</td> <td>" . utf8_decode($ticket['lugar']) .
        "</td> <td>" . utf8_decode($ticket['fecha_entrega']) .
        "</td> <td>" . utf8_decode($ticket['hora']) .
        "</td> <td>" . utf8_decode($ticket['observaciones']) .
        "</td> <td>" . $ticket['estado_informe'] . "</td> </tr>";
    $cont++;
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_" . time() . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;