<?php


$usuario  = "root";
$password = "!Sistemas911**";
$servidor = "localhost";
$basededatos = "helpdesk";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
