<!-- Inicio de sesion, permisos de usuario -->
<?php 
    $nombre=MysqlQuery::RequestPost("nombre_login");
    $clave=md5(MysqlQuery::RequestPost("contrasena_login"));
    $radio=MysqlQuery::RequestPost('optionsRadios');

    // $nombre1="jocanales";
    // $clave1="123456";
    // $radio1="usuario";

    if($nombre!="" && $clave!="" && $radio!=""){
        if($radio1=="admin"){
            $sql=Mysql::consulta("SELECT * FROM tbl_admin WHERE nombre_usuario= '$nombre' AND clave='$clave'");
            if(mysqli_num_rows($sql)>=1){
                $reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $_SESSION['nombre']=$reg['nombre_usuario'];
                $_SESSION['id']=$reg['id_usuario'];
                $_SESSION['nombre_completo']=$reg['nombre_completo'];
                $_SESSION['email']=$reg['email_usuario'];
                $_SESSION['clave']=$clave;
                $_SESSION['tipo']="1";
            }else{
               echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                        <p class="text-center">
                            Nombre de usuario o contraseña incorrectos
                        </p>
                    </div>
                '; 
            }
        }else if($radio=="usuario"){
            $sql=Mysql::consulta("SELECT * FROM tbl_usuarios WHERE nombre_usuario= '$nombre1' AND clave='$clave1'");
            if(mysqli_num_rows($sql)>=1){
                $reg=mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $_SESSION['nombre']=$reg['nombre_usuario'];
                $_SESSION['nombre_completo']=$reg['nombre_completo'];
                $_SESSION['email']=$reg['email_usuario'];
                $_SESSION['clave']=$clave;
                $_SESSION['tipo']="2";
            }else{
                echo '
                    <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                        <p class="text-center">
                            Nombre de usuario o contraseña incorrectos
                        </p>
                    </div>
                '; 
            }
        }else{
            echo '
                <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                    <p class="text-center">
                        No has seleccionado un usuario valido
                    </p>
                </div>
            ';
        }
    }else{
        echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                <p class="text-center">
                    No puedes dejar ningún campo vacío
                </p>
            </div>
        ';
    }



