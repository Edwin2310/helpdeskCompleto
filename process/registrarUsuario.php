<?php
include '../lib/nuevaConexion.php';

$numEmpleadoNewUser = $_POST['numEmpleadoNewUser'];
$nameNewUser = $_POST['nameNewUser'];
$mailNewUser = $_POST['mailNewUser'];
$numNewUser = $_POST['numNewUser'];
$userNewUser = $_POST['userNewUser'];
$passNewUser = md5($_POST['passNewUser']);
$dept = $_POST['departamentoT'];
$a = 1;
$aa = 4;

$empleado = "SELECT Codigo FROM tbl_numeroempleado WHERE Codigo = '$numEmpleadoNewUser'";

$query = mysqli_query($mysqli, $empleado); 

if(mysqli_num_rows($query)>0){
    
    $activo = "SELECT Codigo FROM tbl_numeroempleado WHERE Estado = '1' AND EnUso = '0' AND Codigo = '$numEmpleadoNewUser'";
    $query2 = mysqli_query($mysqli, $activo);
    
    if(mysqli_num_rows($query2)>0){
        $correo = "SELECT nombre_usuario FROM tbl_usuarios WHERE email_usuario = '$mailNewUser'";
        $query1 = mysqli_query($mysqli, $correo);
        if(mysqli_num_rows($query1)>0){
            echo 3;
        } else{
            $sql = "INSERT INTO tbl_usuarios(nombre_completo, nombre_usuario, id_rol, clave, email_usuario, telefono, departamento, numeroEmpleado) VALUES ('$nameNewUser','$userNewUser', '$aa', '$passNewUser', '$mailNewUser', '$numNewUser', '$dept', '$numEmpleadoNewUser')";
            
            if(mysqli_query($mysqli,$sql)){
                
                $sql1 = "UPDATE tbl_numeroempleado SET EnUso = '1' WHERE Codigo = '$numEmpleadoNewUser'";
                
                
                
                //Asignando a casa Usuario el estado 1 que es igual a activo
                
                
                $con = new mysqli('localhost', 'root', '', 'helpdesk');
                $nameNewUser =$_POST['nameNewUser'];
                
                $consulta= "UPDATE tbl_usuarios SET estado = '1'  WHERE numeroEmpleado = '$numEmpleadoNewUser'";  
                $num_estado = mysqli_query($con,$consulta);
                
                
                
                if(mysqli_query($mysqli,$sql1)){
                    echo 1;
                } else{
                    echo 2;
                }
                
                
            } else{
                echo 2;
            }
        }
        
    } else{
        echo 4;
    }
    
    
    
    
    
    
    
} else{
    echo 0;
}

?>