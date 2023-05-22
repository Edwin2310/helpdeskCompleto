
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php error_reporting(0); ?> 

<?php if($_SESSION['nombre']!="" && $_SESSION['tipo']=="1"){ ?>    
    
    <!---------------------ELIMINAR USUARIOS -------------------------->
    <?php 
    if(isset($_POST['id_del'])){
        $id_user=MysqlQuery::RequestPost('id_del');
        if(MysqlQuery::Eliminar("tbl_usuarios", "id_usuario='$id_user'")){
            echo '
            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">USUARIO ELIMINADO</h4>
            <p class="text-center">
            El usuario fue eliminado del sistema con exito
            </p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">OCURRIÓ UN ERROR</h4>
            <p class="text-center">
            No hemos podido eliminar el usuario
            </p>
            </div>
            ';
        }
    }
    
    $idA=$_SESSION['id'];
    /* Todos los admins*/
    $num_admin=Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='1' AND estado = '1'");
    $num_total_admin = mysqli_num_rows($num_admin); 
    
    /* Todos los técnicos*/
    $num_user=Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='2' AND estado = '1'");
    $num_total_usuario = mysqli_num_rows($num_user);
    
    /* Todos los desarrolladores*/
    $num_des=Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='3'AND estado = '1' ");
    $num_total_des = mysqli_num_rows($num_des);
    
    /*Todos los usuarios */
    $num_userGeneral=Mysql::consulta("SELECT * FROM tbl_usuarios WHERE id_rol='4' AND estado = '1'");
    $num_total_userGeneral = mysqli_num_rows($num_userGeneral);
    
    /* Todos los de bienes*/
    $num_bienes=Mysql::consulta("SELECT * FROM tbl_admin WHERE id_rol='5' AND estado = '1'");
    $num_total_bienes = mysqli_num_rows($num_bienes);
    
    ?>
    
    <!---------------------FIN ELIMINAR USUARIOS -------------------------->
    
    
    
    
    <!---------------------DESACTIVAR USUARIOS -------------------------->
    
    <?php 
    if(isset($_POST['id_estado'])){
        $id_user=MysqlQuery::RequestPost('id_estado');
        $estado=MysqlQuery::RequestPost('estado');
        
        if(MysqlQuery::Actualizar("tbl_usuarios", "estado='$estado'","id_usuario='$id_user'")){
            echo '
            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">USUARIO DESACTIVADO</h4>
            <p class="text-center">
            El usuario fue desactivado del sistema con exito
            </p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="text-center">OCURRIÓ UN ERROR</h4>
            <p class="text-center">
            No hemos podido desactivar el usuario
            </p>
            </div>
            ';
        }
    }	
    
    
    
    ?>
    
    <!--------------------- FIN DESACTIVAR USUARIOS -------------------------->
    
    
    
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    </head>
    <body>
    <!-- Titulo e imagen -->
    <div class="container">
    <div class="row">
    <div class="col-sm-2">
    <img  src="./img/idcard.png" alt="Image" class="img-responsive animated flipInY" width="220" height="105">
    </div>
    <div class="col-sm-10">
    <br>
    <h2 class="text-info"><center>Bienvenido, en esta página se muestran todos los usuarios registrados.</h2>
    </div>
    </div>
    </div>
    
    <br><br>
    
    <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
    <ul class="nav nav-pills nav-justified">
    <li><a href="./admin.php?view=users"><i class="fa fa-users"></i>&nbsp;&nbsp;Técnicos&nbsp;&nbsp;<span class="badge"><?php echo $num_total_usuario; ?></span></a></li>
    <li><a href="./admin.php?view=admin"><i class="fa fa-male"></i>&nbsp;&nbsp;Administradores&nbsp;&nbsp;<span class="badge"><?php echo $num_total_admin; ?></span></a></li>
    <li><a href="./admin.php?view=desarrolladores"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Desarrolladores&nbsp;&nbsp;<span class="badge"><?php echo $num_total_des; ?></span></a></li>
    <li><a href="./admin.php?view=bienes"><i class="fa fa-address-card-o"></i>&nbsp;&nbsp;Bienes Nacionales&nbsp;&nbsp;<span class="badge"><?php echo $num_total_bienes; ?></span></a></li>
    <li><a href="./admin.php?view=userGeneral" style="color:#c1d12d;"><i class="fa fa-user" style="color:#c1d12d;"></i>&nbsp;&nbsp;Usuarios&nbsp;&nbsp;<span class="badge"><?php echo $num_total_userGeneral; ?></span></a></li>
    <li><a href="./admin.php?view=bienes"><i class="fa fa-user"></i>&nbsp;&nbsp;Deshabilitados&nbsp;&nbsp;<span class="badge"><?php echo $num_total_desac; ?></span></a></li>

    </ul>
    </ul>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <?php 
    $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
    mysqli_set_charset($mysqli, "utf8");
    
    // $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    // $regpagina = 15;
    // $inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;
    
    // $selusers=mysqli_query($mysqli,"SELECT SQL_CALC_FOUND_ROWS * FROM tbl_usuarios WHERE id_rol='4' LIMIT $inicio, $regpagina");
    $selusers=mysqli_query($mysqli,"SELECT SQL_CALC_FOUND_ROWS * FROM tbl_usuarios  WHERE id_rol='4' AND  estado='1' "); //Consulta donde se dejan los usuarios activados
    
    $totalregistros = mysqli_query($mysqli,"SELECT FOUND_ROWS()");
    $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);
    
    // $numeropaginas = ceil($totalregistros["FOUND_ROWS()"]/$regpagina);
    if(mysqli_num_rows($selusers)>0):
        ?>
        <!-- Tabla que muestra los usuarios registrados en el sistema -->
        <table id="example" class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
        <th class="text-center">#</th>
        
        <th class="text-center">Nombre completo</th>
        <th class="text-center">Nombre de usuario</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Email</th>
        <th class="text-center">Tipo de Usuario</th>
        <th class="text-center">Opciones</th>
        
        
        </tr>
        </thead>
        <tbody>
        <?php
        // $ct=$inicio+1;
        $ct=1;
        while ($row=mysqli_fetch_array($selusers, MYSQLI_ASSOC)): 
            ?>
            
            
            
            
            <tr>
            
            <td class="text-center"><?php echo $ct; ?></td>
            <td class="text-center"><?php echo $row['nombre_completo']; ?></td>
            <td class="text-center"><?php echo $row['nombre_usuario']; ?></td>
            <td class="text-center"><?php echo $row['telefono']; ?></td>
            <td class="text-center"><?php echo $row['email_usuario']; ?></td>
            <td class="text-center">Usuario</td>
            
            <td class="text-center">
            <!-- actualizar información -->
            <a href="admin.php?view=usuarioedit&id=<?php echo $row['id_usuario']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
            
            <!-- eliminar -->
            <form action="" method="POST" style="display: inline-block;">
            <input type="hidden" name="id_del" value="<?php echo $row['id_usuario']; ?>">
            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            
            
            <!-- Cambio de contraseña -->
            <a href="admin.php?view=cambiocontrasena&id=<?php echo $row['id_usuario']; ?>" class="btn btn-sm btn-info"><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
            </form>
            
            
            
            <!-------------------------- Cambiar estado----------------------------->    
            <?php
            if($row['estado']==1){
                ?>
                <form action="" method="POST" style="display: inline-block;">
                <input type="hidden" name="id_estado" value="<?php echo $row['id_usuario']; ?>">
                <button type="submit" onclick="" class="btn btn-success btn-sm" >
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <!--                 Activar
                -->                </button>
                <?php
            }else if($row['estado']== 2){
                ?>
                <form action="" method="POST" style="display: inline-block;">
                <input type="hidden" name="id_estado" value="<?php echo $row['id_usuario']; ?>">
                <button type="submit" onclick="" class="btn btn-danger btn-sm" >
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <!--                 Desactivado
                -->                </button>
                <?php
            }
            
            ?>
            <!-------------------------- Fin Cambiar estado----------------------------->   
            
            </td>
            </tr>
            <?php
            $ct++;
        endwhile; 
        ?>
        </tbody>
        </table>
        <!-- Fin tabla -->
        <?php else: ?>
            <h2 class="text-center">No hay usuarios registrados en el sistema</h2>
            <?php endif; ?>
            </div>
            
            </div>
            </div>
            </div>
            <?php
        }else{
            ?>
            <div class="container">
            <div class="row">
            <div class="col-sm-4">
            <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown"/><br>
            
            </div>
            <div class="col-sm-7 animated flip">
            <h1 class="text-danger">Lo sentimos esta página es solamente para administradores</h1>
            <h3 class="text-info text-center">Inicia sesión como administrador para poder acceder</h3>
            </div>
            <div class="col-sm-1">&nbsp;</div>
            </div>
            </div>
            <?php
        }
        ?>    
        
        <script type="text/javascript" src="DataTables/JSZip-2.5.0/jszip.js"></script>
        <script type="text/javascript" src="DataTables/pdfmake-0.1.36/pdfmake.js"></script>
        <script type="text/javascript" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="DataTables/DataTables-1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="DataTables/DataTables-1.11.5/js/dataTables.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/AutoFill-2.3.7/js/dataTables.autoFill.js"></script>
        <script type="text/javascript" src="DataTables/AutoFill-2.3.7/js/autoFill.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/dataTables.buttons.js"></script>
        <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.colVis.js"></script>
        <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.html5.js"></script>
        <script type="text/javascript" src="DataTables/Buttons-2.2.2/js/buttons.print.js"></script>
        <script type="text/javascript" src="DataTables/ColReorder-1.5.5/js/dataTables.colReorder.js"></script>
        <script type="text/javascript" src="DataTables/DateTime-1.1.2/js/dataTables.dateTime.js"></script>
        <script type="text/javascript" src="DataTables/FixedColumns-4.0.2/js/dataTables.fixedColumns.js"></script>
        <script type="text/javascript" src="DataTables/FixedHeader-3.2.2/js/dataTables.fixedHeader.js"></script>
        <script type="text/javascript" src="DataTables/KeyTable-2.6.4/js/dataTables.keyTable.js"></script>
        <script type="text/javascript" src="DataTables/Responsive-2.2.9/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="DataTables/Responsive-2.2.9/js/responsive.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/RowGroup-1.1.4/js/dataTables.rowGroup.js"></script>
        <script type="text/javascript" src="DataTables/RowReorder-1.2.8/js/dataTables.rowReorder.js"></script>
        <script type="text/javascript" src="DataTables/Scroller-2.0.5/js/dataTables.scroller.js"></script>
        <script type="text/javascript" src="DataTables/SearchBuilder-1.3.2/js/dataTables.searchBuilder.js"></script>
        <script type="text/javascript" src="DataTables/SearchBuilder-1.3.2/js/searchBuilder.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/SearchPanes-2.0.0/js/dataTables.searchPanes.js"></script>
        <script type="text/javascript" src="DataTables/SearchPanes-2.0.0/js/searchPanes.bootstrap5.js"></script>
        <script type="text/javascript" src="DataTables/Select-1.3.4/js/dataTables.select.js"></script>
        <script type="text/javascript" src="DataTables/StateRestore-1.1.0/js/dataTables.stateRestore.js"></script>
        <script type="text/javascript" src="DataTables/StateRestore-1.1.0/js/stateRestore.bootstrap5.js"></script>
        
        
        
        
        <!------------------------- JS ----------------------------->
        
        
        <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
        </script>
        
        
        
        
        
        
        <script>
        
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "responsive": true,
                "autoWidth": true,
                lengthChange: false,
                
            });
            new $.fn.dataTable.FixedHeader( table );
            table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                "responsive": true,
                "autoWidth": true,
                lengthChange: false
            });
            new $.fn.dataTable.FixedHeader( table );
            table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
        
        </script>
        
        
        
        
        <script>
        
        if($('#id_estado').val() != '')
        {
            var form_data = $(this).serialize();
            $.ajax({
                url:"./admin/cambiar_estado.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    //console.log(data);
                    //alert("Asignado");
                }
                
            });
        }
        
        </script>           
        </body>
        </html>
        
        
        
        