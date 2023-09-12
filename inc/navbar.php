<?php
header('Content-Type: text/html; charset=UTF-8');
// if(isset($_POST['nombre_login']) && isset($_POST['contrasena_login'])){
// include "./loginFuncional.php";
// }

$usuarioSalir = $_SESSION['user'];
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if (isset($_SESSION['tipo']) && isset($_SESSION['nombre'])) : ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> &nbsp;
                            <?php echo $_SESSION['nombre']; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">

                            <!-- Tecnicos y desarrolladores -->
                            <?php if ($_SESSION['tipo'] == "2" || $_SESSION['tipo'] == "3") : ?>
                                <li>
                                    <a href="./index.php?view=configuracion"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar
                                        datos</a>
                                </li>

                            <?php endif; ?>

                            <?php if ($_SESSION['tipo'] == "4") : ?>
                                <li>
                                    <a href="./index.php?view=configuracionUser"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar datos</a>
                                </li>

                            <?php endif; ?>

                            <!-- Administrador -->
                            <?php if ($_SESSION['tipo'] == "1") : ?>
                                <li>
                                    <a href="admin.php?view=admin"><span class="fa fa-users"></span> &nbsp;Administrar
                                        Usuarios</a>
                                </li>
                                <li>

                                <li>
                                    <a href="admin.php?view=config"><i class="fa fa-user-plus"></i> &nbsp; Agregar Usuario de
                                        Soporte</a>
                                </li>
                                <li>
                                    <a href="admin.php?view=registro"><i class="fa fa-user-plus"></i> &nbsp; Agregar Usuario</a>
                                </li>
                            <?php endif; ?>

                            <li class="divider"></li>
                            <li><a href="cerrarSesion.php?user=<?php echo base64_encode($usuarioSalir); ?>"><i class=" fa
                                    fa-power-off"></i>&nbsp;&nbsp;Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>

            <?php endif; ?>

            <!-- barra de navegación -->
            <ul class=" nav navbar-nav navbar-right">
                <li>
                    <a href="./index.php"><span class="glyphicon glyphicon-home"></span> &nbsp; Inicio</a>
                </li>
                <?php if ($_SESSION['tipo'] != 4) {
                    if ($_SESSION['tipo'] != 5) {
                ?>
                        <li>
                            <a href="./calendario/index.php"><span class="fa fa-calendar"></span> &nbsp;Calendario</a>
                        </li>
                        <li>
                            <a href="admin.php?view=ticketadmin"><span class="fa fa-ticket"></span> &nbsp; Administrar
                                Tickets</a>
                        </li>
                    <?php } ?>

                    <?php if ($_SESSION['tipo'] == "1") : ?>
                        <li>
                            <a href="admin.php?view=dictamenSubir"><span class="fa fa-book"></span> &nbsp;Dictamen</a>
                        </li>
                    <?php endif; ?>



                    <li>
                        <a href="admin.php?view=informe"><span class="fa fa-desktop"></span> &nbsp;Informe</a>
                    </li>
                    <li>
                        <a href="admin.php?view=salida"><span class="fa fa-sign-out"></span> &nbsp;Salida Equipo</a>
                    </li>
                    <li>
                        <a href="admin.php?view=bitacora"><span class="fa fa-pencil-square"></span> &nbsp;Bitacora</a>
                    </li>

                <?php } ?>


                <!-- Fin barra de navegación -->


                <?php if (!isset($_SESSION['tipo']) && !isset($_SESSION['nombre'])) : ?>
                    <li>
                        <a href="#!" data-toggle="modal" data-target="#modalLog"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Login</a>
                    </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
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
                    <input type="text" class="form-control" name="nombre_login" placeholder="Escribe tu usuario" required="" />
                </div>
                <div class="form-group">
                    <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                    <input type="password" class="form-control" name="contrasena_login" placeholder="Escribe tu contraseña" required="" />
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