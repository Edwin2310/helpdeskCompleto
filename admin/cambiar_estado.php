<?php


include ("../archivos/conexion.php");
include_once "../lib/conexion.php";



if(isset($id_usuario)){
    
    $id_usuario = $_POST['id_usuario'];
    $id_empleado = $_POST['id_empleado'];
    $estado=0;
    $Estado = $_POST['Estado'];
    $EnUso = $_POST['EnUso'];
    
    if ($estado == '0'){
        
        $consulta = "UPDATE tbl_usuarios SET estado = 2 WHERE id_usuario = $id_usuario AND estado = 0";
        $query_run = mysqli_query($con, $consulta);
        
        echo "Usuario Desactivado <br>";
        
        
    }
    
    
}








/* 
$estado=0;

if ($estado == '0'){
    
    $consulta = "UPDATE tbl_usuarios SET estado = 2 WHERE estado = 0 ";
    
    
    $query_run = mysqli_query($con, $consulta);
    
    echo "Usuario Desactivado <br>";
    
}if ($estado == '0'){
    
    $consulta_enUso = "UPDATE tbl_numeroempleado SET Estado = 2  WHERE Estado = 1  AND EnUso = 1 "; //FALTA PONERLE CONDICION PARA QUE SOLO AGARRE UNA ID Y NO TODOS LOS CAMPOS
    $query_runUso = mysqli_query($con, $consulta_enUso);
    
    echo "Estado Desactivado <br>"; 
    
}
else{
    echo "Error Al Desactivar Usuario";
    
} */


?>
