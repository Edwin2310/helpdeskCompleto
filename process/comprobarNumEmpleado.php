<?php 
include '../lib/nuevaConexion.php';

$numEmpleado = $_POST['num'];

$empleado = "SELECT * FROM tbl_numeroempleado WHERE Codigo = '$numEmpleado'";

$query = mysqli_query($mysqli, $empleado);

$row = mysqli_fetch_array($query);
if(mysqli_num_rows($query)>0){
    if($row['EnUso'] == 1){
        echo 3;
    } else{
        echo 1;
    }
} else{
    echo 2;
}




?>