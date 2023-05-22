<!-- Codigo para hacer login con la conexion -->

<?php
require_once("pages/examples/db/conexion.php");
session_start();
session_unset();
session_destroy();

session_start();

date_default_timezone_set('America/Tegucigalpa');
$hour = date('H:i:s');
$dia = date('d-m-Y');
$dia_bitacora = date('Y-m-d');

try {
    if (isset($_POST["btnLogin"])) {
        if (isset($_SESSION['user'])) {
            header('Location: index.php');
            exit;
        }

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = mysqli_real_escape_string($mysqli, $_POST['username']);
            $password = $_POST['password'];

            $sql = "SELECT * FROM usuario WHERE usuario = '" . strtolower($username) . "'";
            $stmt = mysqli_query($mysqli, $sql);

            if ($row = mysqli_fetch_array($stmt)) {

                if (password_verify($password, $row['contra']) or (password_verify($password, $row['contra_temporal']) && $row['cambio_contra'] == 1)) {
                    if ($row['estado'] == "baja") {
                        header("Location: login.php?error=El usuario se encuentra dado de baja, contacte con el administrador");
                    } else {
                        if ($row['cambio_contra'] == "1") {
                            session_start();
                            $_SESSION['user'] = strtolower($username);
                            $_SESSION['cod_empleado'] = $row['codigo_empleado'];
                            $_SESSION['dep_empleado'] = $row['departamento'];
                            $_SESSION['rol_empleado'] = $row['rol'];
                            $_SESSION["last_time"] = time();
                            header('Location:cambio.php');
                            exit;
                        } else {
                            session_start();
                            $_SESSION['user'] = strtolower($username);
                            $_SESSION['cod_empleado'] = $row['codigo_empleado'];
                            $_SESSION['dep_empleado'] = $row['departamento'];
                            $_SESSION['rol_empleado'] = $row['rol'];
                            $_SESSION["last_time"] = time();

                            $sql2 = "INSERT INTO bitacora(usuario, gerencia_unidad, accion, fecha, hora) VALUES ('" . $_SESSION['user'] . "', '" . $_SESSION['dep_empleado'] . "', 'Ha ingresado al Sistema', '$dia_bitacora', '$hour')";
                            mysqli_query($mysqli, $sql2);

                            $fp = fopen("bitacora de Sistema Desarrollo.txt","a");
                            fwrite($fp,"Dirección IP del cliente: " . gethostbyname("almacen.911.gob.hn") . ", Día: $dia, Hora: $hour" . " - El usuario: " . $_SESSION['user'] . " ingresó al Sistema" . PHP_EOL);
                            fclose($fp);

                            header('Location:index.php');
                            exit;
                        }
                    }
                } else {

                    $fp = fopen("bitacora de Sistema Desarrollo.txt","a");
                    fwrite($fp,"Dirección IP del cliente: " . gethostbyname("almacen.911.gob.hn") . ", Día: $dia, Hora: $hour" . " - Intentó de ingreso al sistema con el usuario: " . $_POST['username'] . ", con contraseña erronea" . PHP_EOL);
                    fclose($fp);

                    header("Location: login.php?error=Usuario o Contraseña Incorrecta");
                }
            } else {
                
                $fp = fopen("bitacora de Sistema Desarrollo.txt","a");
                fwrite($fp,"Dirección IP del cliente: " . gethostbyname("almacen.911.gob.hn") . ", Día: $dia, Hora: $hour" . " - Intentó de ingreso al sistema con el usuario: " . $_POST['username'] . ", no encontrado en la lista de usuarios" . PHP_EOL);
                fclose($fp);

                header("Location: login.php?error=Usuario y/o Contraseña Incorrectos");
            }
        }
    }
} catch (Exception $xp) {
    echo $xp;
}
?>
<!-- -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
    <link rel="manifest" href="images/favicon//site.webmanifest">
    <link rel="mask-icon" href="images/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Almacen 911 | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .headerS {
            background: url(dist/img/Home-Empleados.png) no-repeat center center;
            background-size: 100% 100%;
        }

        .Logo {
            background: url(dist/img/logo_911.png) no-repeat center center;
        }

        .logoimg {
            width: 55%;
            height: auto;
        }
    </style>
</head>

<body class="hold-transition login-page headerS">
    <div class="login-box">
        <div class="login-logo">
            <div class="row">
                <!-- <img style="display: block; margin-right: auto; max-width:50%; width:30%; border-radius: 40px;" src="dist/img/logo_911.png"/> -->
                <div class="mt-3" style="margin-left: auto; margin-right: auto;">
                    <h4 style="color: #000000; font-weight: bold;" href="index.html"><b>Bienvenidos al sistema</b></h4>
                    <h4 style="color: #000000; font-weight: bold;" href="index.html"><b>Almacen 911</b></h4>
                </div>
            </div>
        </div>
        <!-- /.login-logo -->
        <div style="opacity: 0.9; background-color:#ccd1d7;" class="card">
            <div style="border-radius: 25px; background-color:#ccd1d7;" class="card-body login-card-body">
                <p style="font-size: 1.3rem; font-weight: 500; color: #000000;" class="login-box-msg">Iniciar Sesión</p>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($_GET['error']) ?>
                    </div>
                <?php } ?>
                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input id="username" name="username" type="text" class="form-control" placeholder="Usuario" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span style="color: black;" class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span style="color: black;" class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>