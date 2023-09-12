<?php

class Mysql
{

    public static function Conectar()
    {
        if (!$mysqli =  new mysqli(SERVER, USER, PASS, BD)) {
            echo "Error en el servidor, verifique sus datos";
        }
        /* Codificar la información de la base de datos a UTF8*/
        $mysqli->set_charset("utf8");
        return $mysqli;
    }



    public static function consulta($query)
    {
        /* 
        echo $query;
        exit(); */

        if (!$consul = mysqli_query(Mysql::Conectar(), $query)) {
            echo 'Error en la consulta SQL ejecutada';
            echo $query;
        }
        return $consul;
    }
}

class MysqlQuery
{

    public static function limpiarCadena($valor)
    {
        $valor = str_ireplace("SELECT", "", $valor);
        $valor = str_ireplace("COPY", "", $valor);
        $valor = str_ireplace("DELETE", "", $valor);
        $valor = str_ireplace("DROP", "", $valor);
        $valor = str_ireplace("DUMP", "", $valor);
        $valor = str_ireplace(" OR ", "", $valor);
        $valor = str_ireplace("%", "", $valor);
        $valor = str_ireplace("LIKE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("!", "", $valor);
        $valor = str_ireplace("¡", "", $valor);
        $valor = str_ireplace("?", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        $valor = str_ireplace("&", "", $valor);
        return $valor;
    }

    public static function RequestGet($val)
    {
        $data = addslashes($_GET[$val]);
        $var = utf8_decode($data);
        $datos = MysqlQuery::limpiarCadena($var);
        return $datos;
    }

    public static function RequestPost($val)
    {
        $data = addslashes($_POST[$val]);
        $var = utf8_decode($data);
        $datos = MysqlQuery::limpiarCadena($var);
        return $datos;
    }

    public static function Guardar($tabla, $campos, $valores)
    {
        /*      echo $tabla;
       echo $campos;
       echo $valores;
    exit();  */

        if (!$sql = Mysql::consulta("INSERT INTO $tabla ($campos) VALUES($valores)", Mysql::Conectar())) {
            die("Error al insertar los datos en la tabla $tabla");
        }

        return $sql;
    }

    public static function Eliminar($tabla, $condicion)
    {
        if (!$sql = Mysql::consulta("DELETE FROM $tabla WHERE $condicion")) {
            die("Error al eliminar registros en la tabla $tabla");
        }

        return $sql;
    }

    public static function Actualizar($tabla, $campos, $condicion)
    {
        /*   echo $tabla;
       echo $campos;
        echo $condicion;
        exit(); 
  */
        if (!$sql = Mysql::consulta("UPDATE $tabla SET $campos WHERE $condicion")) {
            die("Error al actualizar datos en la tabla $tabla");
        }
        return $sql;
    }



    public static function cambioEstatusUsuario($id_user, $estado)
    {
        $conexion = Mysql::Conectar();

        if ($estado == 1) {
            $estado = 0;
        } else {
            $estado = 1;
        }

        $sql = "UPDATE tbl_usuarios SET estado = ? WHERE id_usuario = ? ";
        $query = $conexion->prepare($sql);
        $query->bind_param('ii', $estado, $id_user);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }
}
