<?php
header('Content-Type: text/html; charset=UTF-8');
// if(isset($_POST['nombre_login']) && isset($_POST['contrasena_login'])){
// include "./loginFuncional.php";
// }

$usuarioSalir = $_SESSION['user'];
?>

<style type="text/css">
    .navbar {

        background-color: #222222;
        border-color: #080808;
        height: auto;
        position: static;


    }

    .bs-example-navbar-collapse-1 {
        background-color: #080808;
        border-color: #080808;


    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"><span class="fa fa-home"></span> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../calendario/index.php"><span class="fa fa-calendar"></span> Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=ticketadmin"><span class="fa fa-ticket"></span> Administrar
                    Tickets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=reportes"><span class="fa fa-cloud-upload"></span>
                    Reportes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=archivoEs"><span class="fa fa-file-text"></span>
                    Archivos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=dictamenSubir"><span class="fa fa-book"></span> Dictamen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=informe"><span class="fa fa-desktop"></span> Informe
                    Técnico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin.php?view=bitacora"><span class="fa fa-pencil-square"></span>
                    Bitacora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cerrarSesion.php?user=<?php echo base64_encode($usuarioSalir); ?>"><i
                        class="fa fa-power-off"></i>&nbsp; Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>




<!-- barra de navegación -->

</nav>




<!-- ******** Formulario incio de sesión ******** -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalLog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center text-primary" id="myModalLabel">Bienvenido a Soporte Técnico 9-1-1
                </h4>
            </div>

            <form action="" method="POST" style="margin: 18px;">
                <div class="form-group">
                    <label><span class="glyphicon glyphicon-user"></span>&nbsp;Usuario</label>
                    <input type="text" class="form-control" name="nombre_login" placeholder="Escribe tu usuario"
                        required="" />
                </div>
                <div class="form-group">
                    <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                    <input type="password" class="form-control" name="contrasena_login"
                        placeholder="Escribe tu contraseña" required="" />
                </div>


                <p>¿Cómo iniciaras sesión?</p>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="usuario" checked>
                        Usuario
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="admin">
                        Administrador
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ******** Fin Formulario incio de sesión ******** -->