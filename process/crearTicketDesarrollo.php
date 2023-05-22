<?php
include '../lib/nuevaConexion.php';

$fechaatendido = $_POST['fechaatendido'];
$nombre_ticket = $_POST['nombre_ticket'];
$email_ticket = $_POST['email_ticket'];
$departamento_ticket = $_POST['departamento_ticket'];
$sistema_ticket = $_POST['sistema_ticket'];
$reporterealizar_ticket = $_POST['reporterealizar_ticket'];
$regional_ticket = $_POST['regional_ticket'];
$idTicket = $_POST['idTicket'];
$e = "Registrado";
                
$sql = "INSERT INTO tbl_ticket_desarrollo(fecha, serie, estado_ticket, nombre_usuario, email, regional, sistema, reporte) VALUES('$fechaatendido','$idTicket','$e','$nombre_ticket','$email_ticket','$regional_ticket','$sistema_ticket','$reporterealizar_ticket')";

if(mysqli_query($mysqli,$sql)){
    echo 1;
} else{
    echo 2;
}


?>