<?php


include_once "../archivos/conexion.php";
include_once "../lib/conexion.php";


$estado=0;
$id_estado= $_POST['id_estado'];


if ($estado == '0'){
    $consulta = "UPDATE tbl_usuarios SET estado = 1 WHERE estado = 0  ";
    $query_run = mysqli_query($con, $consulta);

    //echo "Usuario Activado <br>";
    
   
    
}if ($estado == '0'){
    
    $consulta_enUso = "UPDATE tbl_numeroempleado SET Estado = 2  WHERE Estado = 1  AND EnUso = 1  "; //FALTA PONERLE CONDICION PARA QUE SOLO AGARRE UNA ID Y NO TODOS LOS CAMPOS
    $query_runUso = mysqli_query($con, $consulta_enUso); 
    
    //echo "Estado Activado <br>"; 
    
}if($estado == '0'){
    

    $consulta_enUso = "UPDATE tbl_numeroempleado SET Estado = 1  WHERE Estado = 2  AND EnUso = 1 "; //FALTA PONERLE CONDICION PARA QUE SOLO AGARRE UNA ID Y NO TODOS LOS CAMPOS
    $query_runUso = mysqli_query($con, $consulta_enUso); 
    
    //echo "Estado Activado EnUso <br>";  


}
else{
    echo "Error Al Activar Usuario";
}   




?>
