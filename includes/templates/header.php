<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>


    <!-- INICIO DE HEADER -->
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">

        <div class="contenedor contenido-header">


            <!-- INICIO DE BARRA -->
            <div class="barra">
                <!-- IMAGEN BIENESRAICES -->
                <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices" class="pequeña">

                <!-- MENU DE LAS 3 LINEAS -->
                <div class="mobile-menu">
                    <img src=build/img/barras.svg" alt="Icono menu responsive">
                </div>
                <!-- FIN MENU DE LAS 3 LINEAS -->


                <!-- DARK MODE -->
                <div class="derecha">
                    <!-- BARRA DE NAVEGACION -->
                    <img src="build/img/dark-mode.svg" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="index.php">Inicio</a>
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                    <!-- FIN BARRA DE NAVEGACION -->
                </div>
                <!-- FIN DARK MODE -->


            </div>
            <!-- FIN BARRA -->




        </div>

    </header>
    <!-- FIN DE HEADER -->