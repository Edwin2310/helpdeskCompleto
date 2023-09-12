<?php
$mysqli = new mysqli("localhost", "root", "!Sistemas911**", "helpdesk", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
mysqli_set_charset($mysqli, "utf8"); //Admite acentos, ñ, etc
