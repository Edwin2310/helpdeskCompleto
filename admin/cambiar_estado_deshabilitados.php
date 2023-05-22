<?php


	include ("../archivos/conexion.php");
	include_once "../lib/conexion.php";
    
    $estado=0;

if ($estado == '0'){
    $consulta = "UPDATE tbl_admin SET estado = 1 WHERE estado = 0  ";
    $query_run = mysqli_query($con, $consulta);

    echo "Usuario Activado";

    

}else{
    echo "Error Al Activar Usuario";

}
?>
