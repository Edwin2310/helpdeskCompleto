<?php
require_once('config.php');
$id = $_REQUEST['id'];

$sqlDeleteEvento = ("DELETE FROM tbl_calendario WHERE  id='" . $id . "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);
