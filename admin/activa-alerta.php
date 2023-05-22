<?php
include("../archivos/conexion.php");
include_once "../lib/conexion.php";



if ($estado == 1) {
    echo "Estado Activado <br>";
} else {

    echo "Estado Descactivado <br>";
}
$sql = "UPDATE tbl_usuarios SET estado='$estado' WHERE id_usuario ='$id_user'";

if (mysqli_query($con, $sql)) {
    echo ("Conexion exitoso");
} else {
    echo ("Falla en la Conexion");
}

mysqli_close($con);
?>

//how to resize images with php?