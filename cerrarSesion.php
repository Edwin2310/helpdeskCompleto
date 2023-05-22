<?php

// require_once("pages/conexion/conexion.php");
echo $user = base64_decode($_GET['user']);
//UPDATE IS LOGGED IN:
// $query = "UPDATE tbl_usuarios SET isLogged = 0 WHERE usuario = '$user';";
// if (mysqli_query($mysqli, $query)) {

    session_start();
    session_unset();
    session_destroy();

    header("location: loginFuncional.php");
// }
?>