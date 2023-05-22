<?php

include('./archivos/conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $con->real_escape_string(htmlentities($_POST['title']));
    $description = $con->real_escape_string(htmlentities($_POST['description']));
    $fecha = $con->real_escape_string(htmlentities($_POST['fecha']));
    $upload = $con->real_escape_string(htmlentities($_POST['upload']));



    $file_name = $_FILES['file']['name'];

    echo $file_name;

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf' || 'doc' || 'docx') {
            $dir = 'filesArchivos/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            $new_name_file = $dir . $file_name;
            if (copy($file_tmp_name, $new_name_file)) {
            }
        }
    }

    $ins = $con->query("INSERT INTO tbl_archivoespdesa(fecha,title,description,url,upload) VALUES ('$fecha','$title','$description','$new_name_file','$upload')");

    if ($ins) {
        echo 'Archivo Subido con exito';
    } else {
        echo 'El Archivo no se pudo subir';
    }

    header('Location: admin/archivoEs-view.php');
} else {
    echo 'fail';
}
