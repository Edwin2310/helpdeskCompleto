<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('./archivos/conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $con->real_escape_string(htmlentities($_POST['title']));
    $description = $con->real_escape_string(htmlentities($_POST['description']));
    $upload = $con->real_escape_string(htmlentities($_POST['upload']));
    $fecha = $con->real_escape_string(htmlentities($_POST['fecha']));


    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf' || 'doc' || 'docx') {
            $dir = 'files/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            $new_name_file = $dir . $file_name;
            if (copy($file_tmp_name, '/var/www/html/' . $new_name_file)) {
            }
        }
    }

    $ins = $con->query("INSERT INTO tbl_archivosesp(fecha,title,description,url,upload) VALUES ('$fecha','$title','$description','$new_name_file','$upload')");

    if ($ins) {
        echo 'Archivo Subido con exito';
    } else {
        echo 'El Archivo no se pudo subir';
    }
} else {
    echo 'fail';
}
