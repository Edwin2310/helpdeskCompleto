<?php

include_once "../lib/conexion.php";
//$Usuarios=new Usuarios();

//id_user, $estado
$id_user=$_POST['id_user'];
$estado=$_POST['estado'];
echo $Usuarios->cambioEstatusUsuario($id_user,$estado);







?>