<?php


function conectarBD(): mysqli
{

    $conexion = mysqli_connect("localhost", "root", "", "bienesraices_crud");

    if (!$conexion) {
        echo "Error no se pudo conectar la BD";
        exit;
    }

    return $conexion;
}
