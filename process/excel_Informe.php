<?php
include '../lib/nuevaConexion.php';
header('Content-Type: text/html; charset=UTF-8');

if(isset($_GET['Tipoticket'])){
$Tipoticket = $_GET['Tipoticket'];


if($Tipoticket == 0){
    $sql = "SELECT * FROM tbl_informe";
}
if($Tipoticket == 1){
    $sql = "SELECT * FROM tbl_informe WHERE estado_informe='Resuelto'";
}

if($Tipoticket == 2){
    $sql = "SELECT * FROM tbl_informe WHERE estado_informe='Pendiente'";
}

if($Tipoticket == 3){
    $sql = "SELECT * FROM tbl_informe WHERE estado_informe='Rechazado'";
}

if($Tipoticket == 4){
    $sql = "SELECT * FROM tbl_informe WHERE estado_informe='En proceso'";
}

} 
else{
    $sql = "SELECT * FROM tbl_informe"; 
}



$query = mysqli_query($mysqli, $sql);

$salida = "";
$cont = 1;

$salida .= "<table>";
$salida .= "<thead> <th>#</th> <th>Asunto</th> <th>Serie</th> <th>Fecha</th> <th>Tipo de Servicio</th> <th>Lugar de Trabajo</th> <th>Antecedentes</th> <th>Analisis</th> <th>Recomendaciones</th> <th>Conclusiones</th> <th>Anexos</th> </thead>";
while($ticket = mysqli_fetch_array($query)){
    $salida .= "<tr> <td>".$cont."</td> <td>".utf8_decode($ticket['asunto'])."</td> <td>".$ticket['serie']."</td> <td>".$ticket['fecha']."</td> <td>".utf8_decode($ticket['tipo_servicio'])."</td> <td>".utf8_decode($ticket['lugar_trabajo'])."</td> <td>".utf8_decode($ticket['antecedentes'])."</td> <td>".utf8_decode($ticket['analisis'])."</td> <td>".utf8_decode($ticket['recomendaciones'])."</td> <td>".utf8_decode($ticket['conclusiones'])."</td>  <td>".$ticket['anexos']."</td> </tr>";
    $cont++;
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>