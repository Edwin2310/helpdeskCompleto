<?php


	include ("../archivos/conexion.php");
	include_once "../lib/conexion.php";
    
    $estado=0;

if ($estado == '0'){
    $consulta = "UPDATE tbl_admin SET estado = 2 WHERE estado = 0  ";
    $query_run = mysqli_query($con, $consulta);

    echo "Usuario Desactivado ";
    

}else{
    echo "Error Al Desactivado Usuario";

}
?>
